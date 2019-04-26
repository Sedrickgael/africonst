<?php include("_header/header.php") ?> 

            <section class="padding" style=" background: #c9c5c5" >
               <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">Afri-Const</h1>

            </div>
            <h3>Register to IN+</h3>
            <p>Create account to see it in action.</p>
            <form class="m-t" role="form" action="login.html">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nom de l'entreprise" required="">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Type" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Localisation" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Contact" required="">
                </div>
                <div class="form-group">
                    <textarea placeholder="Description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-group">
                        <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy </label></div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="login.html">Login</a>
                
            </form>
            
        </div>
    </div>

    
            </section>

           <?php include('_footer/footer.php') ?>