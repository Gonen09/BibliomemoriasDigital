<?php

$fp = fopen("correos_paginacion_prueba.sql", "w");

for ($i=1; $i <= 57; $i++) {
  fputs($fp,"INSERT INTO `contactos` (`id`, `nombre`, `email`, `telefono`, `motivo`, `comentario`, `fecha`, `leido`)\r\n");
  fputs($fp,"VALUES (NULL, 'Correo ".$i."', 'ejeltschz@costarica.com', '+56978944021', 'Felicitación',\r\n");
  fputs($fp,"'Muy bonita pagina, esta como para aprobar un curso jajaja. Atte.', NOW(), '0');\r\n");
  fputs($fp,"\r\n");
}

fclose($fp);

?>
