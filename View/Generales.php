<?php
function headerLogin()
{
  echo '<title>Título</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
        <link href="View/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="View/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="View/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
        <link href="View/css/bootstrap-social.css" rel="stylesheet" type="text/css">	    
        <link href="View/css/templatemo_style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <link rel="stylesheet" type="text/css" href="css/my-login.css">';
}

function headerG(){
echo '
<title>Macro biotica &mdash; Vida Natural</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="fonts/icomoon/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<script src="https://kit.fontawesome.com/295839e1c0.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/style.css">';

}

function menuC(){
    echo '<div class="site-navbar py-2">
    <div class="search-wrap">
        <div class="container">
            <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
            <form action="#" method="post">
                <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
            </form>
        </div>
    </div>
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div class="logo">
                <div class="site-logo">
                    <a href="inicio.php" class="js-logo-clone"><strong class="text-primary">VIDA</strong>Natural</a>
                </div>
            </div>
            <div class="main-nav d-none d-lg-block">
                <nav class="site-navigation text-right text-md-center" role="navigation">
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                        <li class="active"><a href="inicio.php">Inicio</a></li>
                        <li><a href="shop.php">Tienda</a></li>
                        <li class="has-children">
                            <a href="#">Productos</a>
                            <ul class="dropdown">
                                <li><a href="#">Suplementos</a></li>
                                <li class="has-children">
                                    <a href="#">Vitaminas</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Suplementos</a></li>
                                        <li><a href="#">Vitaminas</a></li>
                                        <li><a href="#">Dieta &amp; Nutricion</a></li>
                                        <li><a href="#">Te &amp; Cafe</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Dieta &amp; Nutricion</a></li>
                                <li><a href="#">Te &amp; Cafe</a></li>
                            </ul>
                        </li>
                        <li><a href="#about">Acerca de</a></li>
                        <li><a href="contact.php">Contacto Empresarial</a></li>
                    </ul>
                </nav>
            </div>
            
        </div>
    </div>
</div>';
}

function menuInicioAdmin(){
  echo '<div class="site-navbar py-2">
  <div class="search-wrap">
      <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
              <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
      </div>
  </div>
  <div class="container">
      <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
              <div class="site-logo">
                  <a href="inicioAdmin.php" class="js-logo-clone"><strong class="text-primary">VIDA</strong>Natural</a>
              </div>
          </div>
          <div class="main-nav d-none d-lg-block">
              <nav class="site-navigation text-right text-md-center" role="navigation">
                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li class="active"><a href="inicioAdmin.php">Inicio</a></li>
                      <li><a href="shop.php">Tienda</a></li>
                      <li class="has-children">
                          <a href="#">Productos</a>
                          <ul class="dropdown">
                              <li><a href="#">Suplementos</a></li>
                              <li class="has-children">
                                  <a href="#">Vitaminas</a>
                                  <ul class="dropdown">
                                      <li><a href="#">Suplementos</a></li>
                                      <li><a href="#">Vitaminas</a></li>
                                      <li><a href="#">Dieta &amp; Nutricion</a></li>
                                      <li><a href="#">Te &amp; Cafe</a></li>
                                  </ul>
                              </li>
                              <li><a href="#">Dieta &amp; Nutricion</a></li>
                              <li><a href="#">Te &amp; Cafe</a></li>
                          </ul>
                      </li>
                      <li><a href="#about">Acerca de</a></li>
                      <li><a href="contact.php">Contacto Empresarial</a></li>
                      <li><a href="dashboard.php">Admin</a></li>
                  </ul>
              </nav>
          </div>
          
      </div>
  </div>
</div>';
}



function menuAdmin()
{
  echo '<nav class="dashboard-nav-list"><a href="InicioAdmin.php" class="dashboard-nav-item"><i class="fas fa-home"></i>
  Ir al inicio </a>
  <div class="dashboard-nav-dropdown"><a href="Usuario/dashUsuarios.php" class="dashboard-nav-item"><i class="fas fa-users"></i> Usuarios </a></div>
  <div class="dashboard-nav-dropdown"><a href="Producto/dashInventario.php" class="dashboard-nav-item"><i class="fa-solid fa-boxes-stacked"></i></i> Inventario </a>
  <div class="dashboard-nav-dropdown"><a href="Categoria/dashCategoria.php" class="dashboard-nav-item"><i class="fa-solid fa-boxes-stacked"></i></i> Categoria </a>
  <div class="dashboard-nav-dropdown"><a href="Proveedor/dashProveedores.php" class="dashboard-nav-item"><i class="fas fa-users"></i> Proveedores </a></div>
  <div class="dashboard-nav-dropdown"><a href="ContactoEmp/dashContactoEmp.php" class="dashboard-nav-item"><i class="fas fa-users"></i> Contactos Empresariales </a></div>
  <div class="dashboard-nav-dropdown"><a href="Auditoria/dashAudit.php" class="dashboard-nav-item"><i class="fas fa-users"></i> Auditorias </a></div>
  <div class="dashboard-nav-dropdown-menu"><a href="#" class="dashboard-nav-dropdown-item">All</a><a href="#" class="dashboard-nav-dropdown-item">Recent</a><a href="#" class="dashboard-nav-dropdown-item">Images</a><a href="#" class="dashboard-nav-dropdown-item">Video</a></div>
  </div>

  <div class="dashboard-nav-dropdown"><a href="#!" class="dashboard-nav-item"><i class="fa-solid fa-exclamation"></i> Auxiliar </a>
  <div class="dashboard-nav-dropdown-menu"><a href="#" class="dashboard-nav-dropdown-item">All</a><a href="#" class="dashboard-nav-dropdown-item">Recent</a><a href="#" class="dashboard-nav-dropdown-item"> Projections</a>
  </div>
  </div>
  <div class="nav-item-divider"></div>
  <a href="../../index.php" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
  </nav>';
}



function footerC(){
    echo '<div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <a name="about"></a>
        <div class="block-7">
          <h3 class="footer-heading mb-4">About <strong class="text-primary">Pharmative</strong></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates
            sed dolorum excepturi iure eaque, aut unde.</p>
        </div>

      </div>
      <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
        <h3 class="footer-heading mb-4">Navigation</h3>
        <ul class="list-unstyled">
          <li><a href="#">Supplements</a></li>
          <li><a href="#">Vitamins</a></li>
          <li><a href="#">Diet &amp; Nutrition</a></li>
          <li><a href="#">Tea &amp; Coffee</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="block-5 mb-5">
          <h3 class="footer-heading mb-4">Información para contacto </h3>
          <ul class="list-unstyled">
            <li class="address">Tejar, El Guarco, Costa Rica</li>
            <li class="phone"><a href="tel://8697 5160">
                +506 8697 5160</a></li>
            <li class="email">macrovidanaturalcr@gmail.com</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row pt-5 mt-5 text-center">
      <div class="col-md-12">
        <p>
          <!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;
          <script>
            document.write(new Date().getFullYear());
          </script> All rights reserved | This template is made
          with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
          <!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>

    </div>
  </div>';

}
function footerLogin()
  {
      echo '<script src="../View/js/jquery.min.js"></script>
            <script src="../View/js/bootstrap.min.js"></script>'; 
  }


  ?>

<!--Start of Tawk.to Script-->

<script type="text/javascript">

var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();

(function(){

var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];

s1.async=true;

s1.src='https://embed.tawk.to/639b4d36daff0e1306dcd75f/1gkbab73a';

s1.charset='UTF-8';

s1.setAttribute('crossorigin','*');

s0.parentNode.insertBefore(s1,s0);

})();

</script>

<!--End of Tawk.to Script-->
<body>
</body>
