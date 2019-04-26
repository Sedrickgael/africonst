<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Afri-Const | Dashboard Entreprises</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="img/profile_small.jpg"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold"><?php echo $userinfo['nom_ent'].' '.$userinfo['type_ent'] ?></span>
                            <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                        </a>
                        <?php
         if(isset($_SESSION['id']) AND $userinfo['id_ent'] == $_SESSION['id']) {
         ?>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="profile">Profile</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="../signout">Logout</a></li>
                        </ul>
                        <?php
         }
         ?>
                    </div>
                    <div class="logo-element">
                        AC
                    </div>
                </li>
                <li class="">
                    <a href="dashboard"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                </li>
                <li>
                    <a href="projet""><i class="fa fa-cloud-upload"></i><span class="nav-label">Projets</span><span class="fa arrow"></span></a>
                </li>
                <li>
                    <a href="contact""><i class="fa fa-edit"></i> <span class="nav-label">Contact</span></a>
                </li>
                
                
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-warning " href="#"><i class="fa fa-bars"></i> </a>
            
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Bienvenu sur Afri-Const</span>
                </li>
                
                <li>
                    <a href="../signout">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
                
            </ul>

        </nav>
        </div>
