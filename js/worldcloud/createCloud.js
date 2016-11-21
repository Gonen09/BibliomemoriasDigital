
// Ejemplo datos de entrada
var words = [
	"WEB HTML XML CSS JavaScript PHP Bootstrap JQuery MySQL ODBC JSON AJAX Solr D3 Git Hub",
	"Assembly Pascal C Java C# Python Prolog LaTeX",
	"Introducción Informática Programación Estructurada Estructura Datos Fundamentos Informática teórica Programación orientada Objetos ",
	"Diseño Análisis Algoritmos Teoría de Autómatas Lenguajes Formales Programación Avanzada Software I Software II Inteligencia Artificial",
	"SWI-PROLOG Dev-Pascal Dev-C CodeBlocks Eclipse NetBeans Visual Studio MonoDevelop PyCharm Ninja PyScript Notepad++ Atom Brackets SublimeText Assembler Gedit",
	"VirtualBox XAMPP TeamViewer Git Bash FileZilla Firefox Chrome MariaDb Postgres Oracle Clementine"
]

// Elemento en donde insertar el wordcloud 

var myWordCloud = wordCloud('#cloud');

//Start cycling through the demo data
showNewWords(myWordCloud);