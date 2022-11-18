 <?php
    include_once 'Generales.php';
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <?php
        headerG();
        ?>
 </head>

 <body>


     <div class="dashboard">
         <div class="dashboard-nav">
             <header><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a><a href="#" class="brand-logo"> <span>Vida Natural</span></a></header>
             <?php
        menuAdmin();
        ?>
         </div>
         <div class='dashboard-app'>
             <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
             <div class='dashboard-content'>
                 <div class='container'>
                     <div class='card'>
                         <div class='card-header'>
                             <h1>Bienvenido al Dashboard</h1>
                         </div>
                         <div class='card-body'>
                             <p>Su cuenta es de adminitrador</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>








     <script src="../View/js/dash.min.js"></script>


 </body>

 </html>