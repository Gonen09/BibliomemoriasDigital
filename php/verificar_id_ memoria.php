<?php
/*
$versión_solr = solr_get_version();
print $versión_solr;
print "<br>";
*/

/*
$info_campos = "";
while ($post = each($_POST))
{
	$info_campos = $info_campos."|".$post[0] . " = " . $post[1];
}
echo $info_campos."!!!!!";
/**/
if (isset($_POST["id_memoria"])){
	$options = array
	(
		'hostname' => 'localhost',
		'login'    => 'admin',
		'password' => '',
		'port'     => 8983,
		'path'     => 'solr/tesis',
	);

	$client = new SolrClient($options);
	$query = new SolrQuery();
	$query->setQuery("id_tesis:".$_POST["id_memoria"]);
	$query->setStart(0);
	$query->setRows(2);
	$query->addField('id_tesis');

	$query_response = $client->query($query);
	$response = $query_response->getResponse();

	if($response->response->numFound > 0) 
		echo "true";
	else
		echo "false";
}
else{
	echo "error";	
}

?>