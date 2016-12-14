<?php

  function correo_lista($id,$nombre,$motivo,$fecha,$leido){
    print ('
        <tr id="leido-'.$leido.'">
          <td class="mailbox-name"><a href="read-mail.html">'.$nombre.'</a></td>
          <td class="mailbox-subject"><b><a href="#">'.$motivo.'</a></td>
          <td class="mailbox-date">'.$fecha.'</td>
          <td><a id="'.$id.'" href="#" class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar correo"></a></td>
        </tr>
    ');
  }

  function correo_abrir($id,$nombre,$correo,$motivo,$comentario,$fecha){


  }

?>
