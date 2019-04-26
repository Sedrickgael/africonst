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
            <div class="wrapper wrapper-content">
        <div class="row">
                    <div class="col-lg-4">
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
                    <div class="col-lg-4">
                     
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5><a href="chat">Chat</a></h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">0</h1>
                                <small>Vos messages</small>
                            </div>
                        </div>
                     
                    </div>
                    
                    <div class="col-lg-4">

                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Ajouter réalisaion</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">Sans limite</h1>
                                <small>Vos réalisation</small>
                            </div>
                        </div>
            </div>
        </div>
        <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            
                            <div class="ibox-content ibox-heading">
                                <h3><a href="chat"><i class="fa fa-envelope-o"></i> <VAR>Vos messages</VAR></a></h3>
                            </div>
                            <div class="ibox-content">
                                <div class="feed-activity-list">

                                    <h5>Aucun message</h5>
                                    <!--div class="feed-element">
                                        <div>
                                            <small class="float-right">5m ago</small>
                                            <strong>Jesica Ocean</strong>
                                            <div>Contrary to popular belief, Lorem Ipsum</div>
                                        </div>
                                    </div-->


                                </div>
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