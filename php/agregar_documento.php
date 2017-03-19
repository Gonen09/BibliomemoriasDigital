
<?php
	mb_internal_encoding('UTF-8');
	mb_http_output('UTF-8');

	if(isset($_POST['id_tesis']) && isset($_FILES['archivo_tesis'])) {
		//Como nombre al archivo se le asigna el id de la tesis para subirlo al servidor en la carpeta "pdf".
		$destino = "../pdf/".$_POST['id_tesis'].".pdf";
		//Si el archivo se sube correctamente al servido con el nombre asignado...
		if(move_uploaded_file($_FILES['archivo_tesis']['tmp_name'],$destino)) {
			//Variables de Control.
			$i = 0;
			$j = 0;

			//Recolección de Información por POST (Al no estar los "name" declarados en la fuente, estos se estimaron y se recomienda que en la fuente se declaren los mismos que aquí se consideran.)
			$id = $_POST["id_tesis"];
			$url = $destino; //en la carpeta "pdf" con nombre "id_tesis.pdf".
			$titulo = $_POST["titulo_tesis"];
			$alumnos = explode(",",$_POST["tesistas"]); //Arreglo con lo ingresado por el usuario separado por comas, example: "juan, isabel" = ["juan","isabel"].
			$profesores = explode(",",$_POST["profesores"]); //Arreglo con lo ingresado por el usuario separado por comas, example: "jeltsch,leyton" = ["jeltsch","leyton"].
			$ano = $_POST["ano"];
			$abstract = $_POST["abstract"];
			$contenido = preg_replace('/\s{2,}/',"\n",shell_exec('java -Dfile.encoding=UTF8 -jar tikaextract.jar '.$destino)); //"shell_exec" ejecuta el comando para extraer el texto del pdf seleccionado, luego con "preg_replace" se eliminan los saltos de línea excesivos y se almacena el texto del pdf parseado en la variable "contenido".
			$texto_areas = shell_exec('java -jar FW_Pointer.jar ');
			$options = array
			(
				'hostname' => 'localhost',
				'login'    => 'admin',
				'password' => '',
				'port'     => 8983,
				'path'     => 'solr/tesis',
			);

			$client = new SolrClient($options);
			$doc = new SolrInputDocument();

			$doc->addField('id_tesis',$id);
		//	$doc->addField('url_archivo',$url);
			$doc->addField('titulo_tesis',$titulo);

			foreach ($alumnos as $alumno) {
				$doc->addField('alumno',$alumno);
			}
			foreach ($profesores as $profesor) {
				$doc->addField('profesor',$profesor);
			}
			$doc->addField('ano',$ano);
			$doc->addField('abstract',$abstract);
			$doc->addField('contenido',$contenido);

			$areas = explode ("|",$texto_areas);
			$campo_valores_area = "";
			foreach ($areas as $area){
				if ($area != ""){
					$aux = explode(":",$area);
					if (count ($aux) > 1){
						echo "III".$aux[0]."--".$aux[1]."IIII";
						if ($aux[1] > 0){
							//echo $aux[1]."ingresar";
							$doc->addField('clasificacion',$aux[0]);
							if ($campo_valores_area != "")
								$campo_valores_area = $campo_valores_area."|";
							$campo_valores_area = $campo_valores_area.$area;
						}
					}
				}
			}
			$doc->addField('valores_clasificacion',$campo_valores_area);
		//	$doc->addField('clasificacion',);

			$updateResponse = $client->addDocument($doc);
			$c = curl_init('http://localhost:8983/solr/admin/cores?action=RELOAD&core=tesis');
			curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
			$page = curl_exec($c);
			curl_close($c);
		}
	} else {
		echo 'ERROR EN LA SUBIDA DE LA MEMORIA<br>';
	}
?>