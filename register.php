<?php
session_start();

    include("config/connexion.php");
    include("controller/authentification.php");
    include("controller/client.php");
?>
<?php include("_header/header.php") ?> 

            <section class="padding" style=" background: #c9c5c5" >
               <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">Afri-Const</h1>

            </div>
            <h3>Bienvue</h3>
            <p>Connectez-vous</p>
            <?php
         if(isset($erreur)) {
            echo '<div class="alert alert-danger">'.$erreur."</div>";
         }
         ?>
            <form class="m-t" role="form" method="POST">

              <p style="text-align : center; color : red; margin-top : -5px"><span style="color : black;"> NB :</span> Tous les champs ci-dessous sont obligatoires</p>
                <div class="form-group">
                    <input placeholder="Nom entreprise" id="nomInscription" name="nom_ent" type="text" value="" class="form-control" autocomplete="off"><br>
                    <p id="validNom" style="color : #2CAF58; display: none; font-size : 12px; margin-top : -10px">Nom valide</p>
                            <p id="erreurNom" style="color : red; display: none; font-size : 12px; margin-top : -10px">Le nom doit contenir au moins 2 caractères</p>
                </div>

                <div class="form-group">
                    <input placeholder="Email" id="email" name="email_ent" type="email" value="" class="form-control" autocomplete="off"><br>
                    
                            <p id="format" style="color : red; display: none; font-size : 12px; margin-top : -10px">Mauvais format( ex: toto@gmail.com)</p>     
                            
                </div>
                
                <div class="form-group">
                    <input placeholder="type" id="nomInscription" name="type_ent" type="text" value="" class="form-control" autocomplete="off"><br>
                    <p id="validNom" style="color : #2CAF58; display: none; font-size : 12px; margin-top : -10px">Nom valide</p>
                            <p id="erreurNom" style="color : red; display: none; font-size : 12px; margin-top : -10px">Veillez entrer un type valide</p>
                </div>
                <div class="form-group">
                    <input placeholder="Situation" id="nomInscription" name="loc_ent" type="text" value="" class="form-control" autocomplete="off"><br>
                    <p id="validNom" style="color : #2CAF58; display: none; font-size : 12px; margin-top : -10px">Nom valide</p>
                            <p id="erreurNom" style="color : red; display: none; font-size : 12px; margin-top : -10px">La localisation doit contenir au moins 2 caractères</p>
                </div>
                <div class="form-group">
                    <input placeholder="Telephone" id="telInscription" name="contact_ent" type="tel" value="" class="form-control" autocomplete="off"><br>
                </div>
                
                <div class="form-group">
                    <textarea placeholder="Description" id="nomInscription" name="description_ent" type="text" value="" class="form-control" autocomplete="off"></textarea><br>    
                    <p id="validNom" style="color : #2CAF58; display: none; font-size : 12px; margin-top : -10px">Nom valide</p>
                            <p id="erreurNom" style="color : red; display: none; font-size : 12px; margin-top : -10px">La description doit contenir au moins 2 caractères</p>                
                </div>
                <div class="form-group">
                    <input placeholder="Mot de passe" id="mpInscription" name="password" type="password" class="form-control"><br>
                    <p id="mp" style="color : red; display: none; font-size : 12px; margin-top : -10px">Veillez renseigné un mot de passe</p>
                            <p id="mpForm" style="color : red; display: none; font-size : 12px; margin-top : -10px">Le mot de passe doit contenir au moins 6 caractères</p>
                            <p id="mpFormV" style="color : #2CAF58; display: none; font-size : 12px; margin-top : -10px">Mot de passe validé</p>
                    </div>
                <button type="submit" class="btn btn-primary block full-width m-b" name="register">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="login">Login</a>
                
            </form>
            
        </div>
    </div>

    
            </section>

           <?php include('_footer/footer.php') ?>