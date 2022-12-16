<?php
function headerLogin()
{
  echo '<title>Título</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
        <link href="../css/bootstrap-social.css" rel="stylesheet" type="text/css">	    
        <link href="../css/templatemo_style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <link rel="stylesheet" type="text/css" href="css/my-login.css">';
}

function headerG(){
echo '
<title>Macro biotica &mdash; Vida Natural</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../fonts/icomoon/style.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
<link rel="stylesheet" href="../css/magnific-popup.css">
<link rel="stylesheet" href="../css/jquery-ui.css">
<link rel="stylesheet" href="../css/owl.carousel.min.css">
<link rel="stylesheet" href="../css/owl.theme.default.min.css">
<script src="https://kit.fontawesome.com/295839e1c0.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/aos.css">
<link rel="stylesheet" href="../css/style.css">';

}

function menuAdmin()
{
  echo '<nav class="dashboard-nav-list"><a href="../Inicio.php" class="dashboard-nav-item"><i class="fas fa-home"></i>
  Ir al inicio </a>
  <div class="dashboard-nav-dropdown"><a href="../Usuario/dashUsuarios.php" class="dashboard-nav-item"><i class="fas fa-users"></i> Usuarios </a></div>
  <div class="dashboard-nav-dropdown"><a href="../Producto/dashInventario.php" class="dashboard-nav-item"><i class="fa-solid fa-boxes-stacked"></i></i> Inventario </a>
  <div class="dashboard-nav-dropdown"><a href="../Categoria/dashCategoria.php" class="dashboard-nav-item"><i class="fa-solid fa-boxes-stacked"></i></i> Categoria </a>
  <div class="dashboard-nav-dropdown"><a href="../Proveedor/dashProveedores.php" class="dashboard-nav-item"><i class="fas fa-users"></i> Proveedores </a></div>
  <div class="dashboard-nav-dropdown"><a href="../ContactoEmp/dashContactoEmp.php" class="dashboard-nav-item"><i class="fas fa-users"></i> Contactos Empresariales </a></div>
  <div class="dashboard-nav-dropdown"><a href="../Auditoria/dashAudit.php" class="dashboard-nav-item"><i class="fas fa-users"></i> Auditorias </a></div>
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
