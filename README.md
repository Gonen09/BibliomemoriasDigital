# BibliomemoriasDigital

Bienvenido a nuestro repositorio de Memorias de Título de la carrera de Ingeniería en Computación e Informática de la Universidad de La Serena.

El propósito de este repositorio es administrar de manera eficiente las memorias de título de la carrera, subiéndolas de forma digital, con un formato definido por la Escuela de Ingeniería en Computación, para que los estudiantes, académicos u otra persona interesada en trabajos en el área de Redes y Telecomunicaciones, Base de Datos, Ingeniería de Software e Inteligencia Artificial puedan obtener información para su uso personal.

## Descripción del curso

Electivo III : Recuperación de la Información, es un curso del Ciclo Superior, teórico-práctico, que entrega las herramientas y conceptos en el ámbito de la Búsqueda y Recuperación de Información (Information Search and Retrieval (ISR)),esto es, búsqueda y recuperación de información en documentos electrónicos y cualquier tipo de colección documental digital, búsqueda de metadatos que describan documentos de internet, y como objetivo conocer y manejar algunas herramientas para realizar la recuperación en textos, imágenes, sonido o datos de otras características, de manera eficiente, según criterio de búsqueda, algoritmos y metodologías existentes. Se llevan a cabo diversas actividades y proyectos que se derivan de los contenidos.

## Empezando

Estas instrucciones le ayudarán a obtener una copia del proyecto en funcionamiento en su máquina local para fines de desarrollo y pruebas. Consulte el despliegue para obtener notas sobre cómo implementar el proyecto en un sistema activo.

## Requisitos previos

- Instalar el paquete servidor web XAMPP
- Instalar maquina virtual JAVA
- Instalar el servidor de Solr.

## Instalando

Para instalar la página copiar todo el contenido del proyecto en la carpeta "htdocs" de XAMPP,
para la configuración de SOLR, revisar el archivo "Instrucciones utilización SOLR+PHP"
dentro de la carpeta "solr". Para obtener los datos del administrador y datos de pruebas para
la base de datos, seguir las instrucciones de "crear e importar bd" desde la carpeta "bd".

## Uso

Navegando la página de inicio encontremos información de la página y del curso,
en la página de búsquedas, podremos encontrar las interfaces de búsquedas para
encontrar las memorias disponibles, además en la página de inicio y de búsquedas 
encontramos la opción "formulario de contacto" con la cual se puede contactar con
él administrador del sitio y esta la opción "iniciar sesión" con la cual se puede
acceder a la sección administrador. Finalmente la página de administrador para 
gestionar las memorias (agrega o eliminar memorias) y ver la información de contacto.

Observación: La resolución óptima para la visualización correcta de los componentes 
			 del sitio es "1600 x 900 px", la versión para dispositivos móviles no está
			 completamente adaptada.


## Construido con (Referencias API's)

* [xampp](https://www.apachefriends.org/es/index.html) - Servidor web
* [Solr](http://lucene.apache.org/solr/) - Indexación y búsquedas
* [Tika](https://tika.apache.org/) - Extracción contenido memorias
* [Pecl](https://pecl.php.net/) - Conexión Solr con PHP
* [JQuery](http://jquery.com/download/) - Librería JavaScript
* [Bootstrap](http://getbootstrap.com/getting-started/) - Interfaz gráfica web y diseño adaptativo
* [Jtable](http://www.jtable.org/) - Tablas de datos
* [D3](http://d3js.org/) - Dependencia Gráficos
* [WorldCloud](https://github.com/wvengen/d3-wordcloud) - Nube de palabras
* [RadarChart](https://www.visualcinnamon.com/2015/10/different-look-d3-radar-chart.html) - Gráfico radar memorias
* [FoamTree](https://get.carrotsearch.com/foamtree/demo/api/index.html) - Gráfico panal resultados de búsquedas
* [Github](https://github.com/) - Plataforma de desarrollo colaborativo

## Contribuir

1. ¡Fork!
2. Cree su rama de características: `git checkout -b mi-nueva-caracteristica`
3. Confirme sus cambios: `git commit -am 'Añadir alguna característica'`
4. Conecte la rama: `git push origen mi-nueva-caracteristica`
5. Envíe una solicitud de union (pull request)

## Desarrolladores

* Gabriela Barrera 
* Jorge Campos 
* Héctor Encina 
* Felipe Robledo 
* Gonzalo Santander 

Vea también sus [cuentas github](https://github.com/Gonen09/BibliomemoriasDigital/graphs/contributors) .

## Licencia

Sin especificar.
