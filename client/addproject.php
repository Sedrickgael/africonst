<?php
session_start();
?>
<?php
    
    include("../config/connexion.php");
    include("../controller/authentification.php");
?>
<?php
    if(!(isset($_SESSION['id']) ) ){
        header("Location: ../login");
    }else {
   $getid = intval($_SESSION['id']);
   $requser = $bdd->prepare('SELECT * FROM user WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>   

<?php
      include('_header.php')
    ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Projet</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="dashboard">Home</a>
                        </li>
                        
                        <li class="breadcrumb-item active">
                            <strong>Ajouter projet</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Nouveau projet</h5>
                        </div>
                        <div class="ibox-content">
                            
                            <p>
                                Trouver l'entreprise idéal pour la réalisation de votre projet.
                            </p>
                            <?php
         if(isset($erreur)) {
            echo '<div class="alert alert-danger">'.$erreur."</div>";
         }
         ?>

                                <form role="form" id="form" method="POST">
                                    <div class="form-group"><label>Nom</label> <input type="text" placeholder="Nom du projet" class="form-control" required name="nom"></div>
                                    <div class="form-group"><label>Site</label> <input type="text" placeholder="site (situation)" class="form-control" name="site"></div>
                                    <div class="form-group"><label>Descrption</label> <textarea placeholder="Enter email" class="form-control" name="description"></textarea></div>
                                    <div>
                                        <button class="btn btn-sm btn-warning m-t-n-xs" type="submit" name="ajouter"><strong>Ajouter</strong></button>
                                    </div>
                                </form>
                        </div>
                    </div>


                </div>
                
            </div>

       <?php
      include('_footer.php')
    ?>
    <?php   
}
?> 


       
   