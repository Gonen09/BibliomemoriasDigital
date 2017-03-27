BibliomemoriasDigital
=====================

Bienvenido a nuestro repositorio de Memorias de Titulo de la carrera Ingeniería en Computación e Informática de la Universidad de La Serena.

El proposito de este repositorio es administrar de manera eficiente las memorias de titulo de la carrera, subiendo de forma digital las memorias de titulo, con un formato definido por la escuela de ingeniería en computación, para que los estudiantes, academicos u persona interesada en trabajos en el area de Redes y telecominicaciones, Base de Datos Ingeniería de Software e Inteligencia Artificial puedan obtener información para su uso personal.

Descripcion del curso
---------------------

Electivo III : Recuperación de la Información, es un curso del Ciclo Superior, teórico-práctico, que entrega las herramientas y conceptos en el ámbito de la Búsqueda y Recuperación de Información (Information Search and Retrieval (ISR)),esto es, búsqueda y recuperación de información en documentos electrónicos y cualquier tipo de colección documental digital, búsqueda de metadatos que describan documentos de internet, y como objetivo conocer y manejar algunas herramientas para realizar la recuperación en textos, imágenes, sonido o datos de otras características, de manera eficiente, según criterio de búsqueda, algoritmos y metodologías existentes. Se llevan a cabo diversas actividades y proyectos que se derivan de los contenidos.

## Empezando

Estas instrucciones le ayudarán a obtener una copia del proyecto en funcionamiento en su máquina local para fines de desarrollo y pruebas. Consulte el despliegue para obtener notas sobre cómo implementar el proyecto en un sistema activo.

### Requisitos previos

- Instalar el paquete servidor web XAMPP
- Instalar maquina virtual JAVA
- Instalar el servidor de Solr.

### Instalando

Para instalar la pagina copiar todo el contenido del proyecto en la carpeta "htdocs",
para la configuracion de SOLR, revisar el archivo "Instrucciones utilización SOLR+PHP"
dentro de la carpeta "solr". Para obtener los datos del administrador y datos de pruebas
seguir las instrucciones de "crear e importar bd" desde la carpeta "bd".

## Uso

Navegando la pagina de inicio encontremos información de la pagina y del curso,
en la pagina de busquedas, podremos encontrar las interfaces de busquedas para
encontrar las memorias disponibles y por ultimo la pagina de administrador
para gestionar las memorias (agrega o eliminar memorias) y la informacion de contacto.


## Construido con (Referencias API's)

* [xampp] (https://www.apachefriends.org/es/index.html) - Servidor web
* [Solr] (http://lucene.apache.org/solr/) - Indexación y búsquedas
* [Tika] (https://tika.apache.org/) - Extraccion contenido memorias
* [Pecl] (https://pecl.php.net/) - Conexión Solr con PHP
* [JQuery] (http://jquery.com/download/) - Libreria JavaScript
* [Bootstrap] (http://getbootstrap.com/getting-started/) - Interfaz gráfica
* [Jtable] (http://www.jtable.org/) - Tablas de datos
* [D3] (http://d3js.org/) - Dependencia Graficos
* [WorldCloud] (https://github.com/wvengen/d3-wordcloud) - Nube de palabras
* [RadarChart] (https://www.visualcinnamon.com/2015/10/different-look-d3-radar-chart.html) - Grafico radar memorias
* [FoamTree] (https://get.carrotsearch.com/foamtree/demo/api/index.html) - Grafico panal resultados de búsquedas

## Contribuir

1. ¡Fork!
2. Cree su rama de características: `git checkout -b mi-nueva-caracteristica`
3. Confirme sus cambios: `git commit -am 'Añadir alguna característica'`
4. Conecte la rama: `git push origen mi-nueva-caracteristica`
5. Envíe una solicitud de union (pull request)

## Autores

* ** Gabriela Barrera **
* ** Jorge Campos **
* ** Hector Encina **
* ** Felipe Robledo **
* ** Gonzalo Santander **

Vea también sus [cuentatas github] (https://github.com/Gonen09/BibliomemoriasDigital/graphs/contributors) que participaron en este proyecto.

## Licencia

Este proyecto está licenciado bajo la Licencia MIT
