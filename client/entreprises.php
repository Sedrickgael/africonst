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
   $entreprises=$bdd->query('SELECT *FROM entreprises');
  $categories=$entreprises->fetchAll();
?>    

<?php
      include('_header.php')
    ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Entreprises</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="dashboard">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Toutes les entreprises</strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">


                    <?php 
                foreach ($categories as $categories) {
                  
                  echo '<div class="col-lg-3">
                <div class="contact-box center-version">
                     <a href="#">
                        <img alt="image" class="rounded-circle" src="assets/img/html_logo.png">'.                  
                        '<h3 class="m-b-xs"><strong>'.$categories['nom_ent'].'</strong></h3>'.
                        '<div class="font-bold">'.$categories['type_ent'].'</div>'.
                        '<hr>
                        <address class="m-t-md">
                            <strong>'.$categories['loc_ent'].'</strong><br>'
                            .$categories['description_ent'].'<br>'
                            .$categories['contact_ent'].'<br>
                            
                            
                        </address> </a>'.
                  '
                    </div>
            </div>';
                }
                ?>                    

        </div>
        </div>
        <?php
      include('_footer.php')
    ?>
    <?php   
}
?> 