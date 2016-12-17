<?php

  function encabezado(){

    print('
      <!-- Header -->
      <header>
        <div class="row">
          <div align="center" class="col-lg-12">
                <img src="image/principal/banner.png" class="img-responsive" id="banner">
          </div> <!-- /.col-lg-12 -->
        </div>  <!-- /.row -->
      </header> <!-- Header -->
    ');
  }

  function piePagina(){

    print ('
      <!-- Footer -->
      <footer>
          <div class="row">
            <div align="center" class="col-lg-12">
                  <img src="image/principal/footer_uls.png" id="foot" class="img-responsive"/>
            </div> <!-- /.col-lg-12 -->
          </div> <!-- /.row -->
      </footer>
    ');
  }
?>
