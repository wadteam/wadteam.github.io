<?php
session_start();
if(isset($_SESSION['email']) && $_SESSION['estado']=="Admin"){ 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
    //Incluyendo imports de CSS
    include '/templates/import-css.php'; 
    ?>
    <title>Home de administrador - YCourses</title>
</head>

<body>
    <!--IMPORTANDO NAVBAR-->
    <?php include "/templates/navbar.php" ?>
    
    <!--IMPORTANDO SIDEBAR-WRAPPER -->
    <?php include "/templates/sidebar.php" ?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle"><i id="icon-btn" class="fas fa-chevron-circle-right"></i></a>
                <h1>Interfaz de administración</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque, sunt ut atque soluta modi in ea minus fuga velit. Veritatis recusandae a animi laudantium, possimus sint dolor culpa dolore libero.
                Minima necessitatibus ipsa ullam fuga corporis nemo fugit atque illum delectus excepturi doloremque libero reprehenderit odit eligendi quo commodi ipsam aliquam voluptates quae accusamus, dicta vel perspiciatis veritatis. Nemo, sunt!
                Corrupti, odio perspiciatis! Qui, ea dicta veniam possimus amet repudiandae excepturi numquam, odio nulla ipsum quis id unde beatae, deleniti tenetur laboriosam veritatis necessitatibus iure! Exercitationem ea vitae aut voluptas!
                Sint deserunt suscipit magni eveniet perspiciatis facere, numquam culpa veritatis libero corrupti in voluptates beatae nam iure omnis animi provident eius inventore molestiae. Dolor, laudantium veniam quam nemo molestiae facere.
                Dolores est quae adipisci soluta expedita officiis neque laboriosam delectus, commodi aspernatur deleniti placeat harum molestiae rem voluptates vitae id nostrum deserunt magni modi? Nam illum velit voluptate porro possimus.
                Recusandae dolor sapiente reprehenderit eaque similique tempore ipsam hic odio rem cumque ut sunt sit, saepe accusamus quia aliquid, quam maiores consectetur nostrum perspiciatis, in tempora rerum nisi inventore? Corrupti?
                Natus voluptas nemo maiores quaerat ea beatae quibusdam alias? Temporibus explicabo impedit, natus labore quisquam ullam aperiam in tempora sequi commodi. Aliquid sequi omnis rem assumenda dicta est nobis veritatis.
                Incidunt libero illum ut eligendi pariatur in vitae magnam sed nihil voluptates explicabo praesentium beatae sit alias maiores quis sequi, impedit fugit nam eveniet minima voluptate maxime architecto obcaecati. Exercitationem.
                Necessitatibus rerum perspiciatis ipsum explicabo accusantium consequuntur pariatur officiis itaque molestiae praesentium amet, voluptate sint autem earum. Quisquam ipsa eveniet expedita non, vel ducimus quo velit at sapiente voluptates iste.
                Nostrum similique, quos temporibus et adipisci sunt pariatur nam ipsum distinctio veritatis culpa, quasi dolore, ad eaque suscipit ipsam vel officiis illum rem doloribus voluptatibus exercitationem voluptatum placeat quae. Dolores.
                Ullam, sint soluta aspernatur impedit explicabo libero veritatis. Omnis, dolorem placeat nisi officiis ullam cum quos officia amet. Quisquam deserunt explicabo libero quidem obcaecati cum repellendus quis, consectetur quo ipsa.
                Nisi provident culpa, reiciendis soluta suscipit atque sapiente ex laborum ullam eius fuga molestiae. Inventore laborum consectetur eaque saepe quod dolorum, doloremque asperiores quam quo eligendi possimus maiores sequi magnam! <code>#page-content-wrapper</code>.</p>
                
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <?php
    //Incliendo Imports JS  
    include '/templates/import-js.php'; 
    ?>
    <script>

        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            if ($("#icon-btn").hasClass("fa-chevron-circle-right")) {
                $("#icon-btn").removeClass("fa-chevron-circle-right");
                $("#icon-btn").addClass("fa-chevron-circle-left");
            }else{
                $("#icon-btn").removeClass("fa-chevron-circle-left");
                $("#icon-btn").addClass("fa-chevron-circle-right");
            }
            
        });

    </script>
</body>

</html>
<?php 
}else{
	header("Location: ../../error-inesperado.html");
} 
?>