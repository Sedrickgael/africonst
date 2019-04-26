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
        <h2>Messagerie</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard">Home</a>
            </li>
            
            <li class="breadcrumb-item active">
                <strong>Mesagerie</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>


<div class="wrapper wrapper-content animated fadeInRight">
    
    <div class="row">
        <div class="col-lg-12">

                <div class="ibox chat-view">

                    <div class="ibox-title">
                        <small class="float-right text-muted">Aucun message</small>
                         
                    </div>


                    <div class="ibox-content">

                        <div class="row">

                            <div class="col-md-9 ">
                                <div class="chat-discussion">

                                    <!--div class="chat-message left">
                                        <img class="message-avatar" src="img/a1.jpg" alt="" >
                                        <div class="message">
                                            <a class="message-author" href="#"> Michael Smith </a>
                                            <span class="message-date"> Mon Jan 26 2015 - 18:39:23 </span>
                                            <span class="message-content">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                            </span>
                                        </div>
                                    </div-->
                                    

                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="chat-users">


                                    <div class="users-list">
                                       
                                        <p>Aucun utilisateur</p>


                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="chat-message-form">

                                    <div class="form-group">

                                        <textarea class="form-control message-input" name="message" placeholder="Enter message text"></textarea>
                                    </div>

                                </div>
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