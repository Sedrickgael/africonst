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
   $requser = $bdd->prepare('SELECT * FROM entreprises WHERE id_ent = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>    
   

<?php
      include('_header.php')
    ?>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Contacter l'administrateur</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="dashboard">Home</a>
                        </li>
                       
                        <li class="breadcrumb-item active">
                            <strong>Contact</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                       
                        <div class="ibox-content">
                            <form id="form" action="#" class="wizard-big">
                                <h1>Contact</h1>
                                <fieldset>
                                    <h2>Contacter l'administrateur</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Email *</label>
                                                <input  name="email" type="email" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Nom *</label>
                                                <input  name="nom" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Subjet *</label>
                                                <input  name="sujet" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>message *</label>
                                                <textarea name="message"  class="form-control required"></textarea>
                                            </div>
                                            <input type="submit" name="Envoyer" class="btn btn-warning block">

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa  fa-pencil" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                

                            </form>
                        </div>
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