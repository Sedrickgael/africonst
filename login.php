<?php
session_start();

    include("config/connexion.php");
    include("controller/authentification.php");


if(isset($_POST['connexion'])) {
   $email = htmlspecialchars($_POST['email']);
   $email_ent = htmlspecialchars($_POST['email']);
   $password = sha1($_POST['password']);
   if(!empty($email) AND !empty($password)) {
      $requser = $bdd->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
      $requser->execute(array($email, $password));
      $userexist = $requser->rowCount();
      $reqentreprises = $bdd->prepare("SELECT * FROM entreprises WHERE email_ent = ? AND password = ?");
      $reqentreprises->execute(array($email_ent, $password));
      $entreprisesxist = $reqentreprises->rowCount();
      
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['email'] = $userinfo['email'];
         header("Location: client/dashboard.php");
      } elseif ($entreprisesxist == 1) {
        $entreprisesinfo = $reqentreprises->fetch();
         $_SESSION['id'] = $entreprisesinfo['id_ent'];
         $_SESSION['email'] = $entreprisesinfo['email_ent'];
         header("Location: entreprises/dashboard.php");
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
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
            <form class="m-t" method="POST" action="">
                <?php
         if(isset($erreur)) {
            echo '<div class="alert alert-danger">'.$erreur."</div>";
         }
         ?>
              
                <div class="form-group">
                    <input type="email" value="" id="email" class="form-control" placeholder="Email" name="email" autocomplete="off">
                </div>
                <p id="format" style="color : red; display: none; font-size : 12px; margin-top : 10px">Mauvais format( ex: toto@gmail.com)</p>
                <div class="form-group">
                    <input type="password" value="" autocomplete="off" id="password" name="password" class="form-control" placeholder="Password" >
                </div>
                <input type="submit" class="btn btn-primary block full-width m-b" name="connexion" value="Connexion" >
                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="signin">Create an account</a>
            </form>
            
        </div>
    </div>

    
            </section>
              </form>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </section>

<?php include('_footer/footer.php') ?>