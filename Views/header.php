<html>
<head>
    <title>Porte Feuille</title>
    <link rel="stylesheet" href="../public/css/default.css">
    <link rel="stylesheet" href="../public/css/flexslider.css">
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/validationForm.css">
    <script type="text/javascript" src="../public/js/jquery.js"></script>
    <script type="text/javascript" src="../public/js/jquery-ui.js"></script>
    <script type="text/javascript" src="../public/js/modernizr.custom.21718.js"></script>
     <script type="text/javascript" src="../public/js/jqueryMigrate.js"></script>
    <script type="text/javascript" src="../public/js/custom.js"></script>
    <script type="text/javascript" src="../public/js/jquery_flexslider-min.js"></script>
    <script type="text/javascript" src="../public/js/picnet.table.filter.min.js"></script>
    <script type="text/javascript" src="../public/js/JqueryValidate.js"></script>
    <script type="text/javascript" src="../public/js/LiveValidation.js"></script>
    <script type="text/javascript">
        function imprimer()
        {
		window.print() ;
        }
	</script>
    <?php
    if (isset($this->js)){
        foreach ($this->js as $js){
        echo '<script type="text/javascript" src="'.URL.'Views/'.$js.'"></script>';
        }
        }
    ?>
 
</head>

<body style="background: #0088cc">
  
    <?php Session::init(); ?>
   
    <div>
         
     

  <!--<div class="navbar-inner">-->
        <ul class="nav nav-pills"  id="header" > 
        <?php if (Session::get('loggedIn') == false){ ?>
            <li class="active"><a href="/index"> <img src= "../../public/images/home.png" />&nbsp;&nbsp;Accueil</a></li>
            <li class="active"><a href="/help"><img src= "../../public/images/aide.png" />&nbsp;&nbsp;Aide</a></li>
        <?php } ?>
        <?php if (Session::get('loggedIn') == true){ ?>
            <li class="active"><a href="/Dashboard"><img src= "../../public/images/home.png" />&nbsp;Dashboard</a></li>
        <?php if (Session::get('role') == 'owner'){ ?>
            <li class="active"><a href="/user"><img src= "../../public/images/ico_login.gif" />&nbsp;&nbsp;Users</a></li>
        <?php } ?>
        
            <li class="active"> <a href="/Dashboard/logout"><img src= "../../public/images/logout.png" />&nbsp;Logout</a></li> 
        <?php }else{ ?>
            <li class="active"><a href="/login"><img src= "../../public/images/ico_login.gif" />&nbsp;Connecter</a></li>
        <?php } ?>
        </ul>
        </div>

<!--  </div>-->
    <div id="content">


