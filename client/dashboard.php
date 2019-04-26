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
            <div class="wrapper wrapper-content">
        <div class="row">
                    <div class="col-lg-3 col-md-6" >
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Projets</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">0</h1>
                                <small>vos projets</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 ">
                      
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5><a href="chat">Chat</a></h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">0</h1>
                                <small>All</small>
                            </div>
                        </div>
                      
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Entreprises</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">2</h1>
                                <small>toutes les entreprises</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5><a href="addproject">Ajouter projet</a></h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">sans limite</h1>
                                <small>nouvelles constructions</small>
                            </div>
                        </div>
            </div>
        </div>
        <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            
                            <div class="ibox-content ibox-heading">
                                <h3><a href="chat"><i class="fa fa-envelope-o"></i> Nouveau message</a></h3>
                            </div>
                            <div class="ibox-content">
                                <div class="feed-activity-list">

                                    <!--div class="feed-element">
                                        <div>
                                            <small class="float-right text-navy">1m ago</small>
                                            <strong>Monica Smith</strong>
                                            <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</div>
                                        </div>
                                    </div-->

                                    <p>Aucun message</p>


                                </div>
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