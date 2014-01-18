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
            <li class="active"><a href="<?php echo URL; ?>index"> <img src= "<?php echo URL; ?>public/images/home.png" />&nbsp;&nbsp;Accueil</a></li>
            <li class="active"><a href="<?php echo URL; ?>help"><img src= "<?php echo URL; ?>public/images/aide.png" />&nbsp;&nbsp;Aide</a></li>
        <?php } ?>
        <?php if (Session::get('loggedIn') == true){ ?>
            <li class="active"><a href="<?php echo URL; ?>Dashboard"><img src= "<?php echo URL; ?>public/images/home.png" />&nbsp;Dashboard</a></li>
        <?php if (Session::get('role') == 'owner'){ ?>
            <li class="active"><a href="<?php echo URL; ?>user"><img src= "<?php echo URL; ?>public/images/ico_login.gif" />&nbsp;&nbsp;Users</a></li>
        <?php } ?>
        
            <li class="active"> <a href="<?php echo URL; ?>Dashboard/logout"><img src= "<?php echo URL; ?>public/images/logout.png" />&nbsp;Logout</a></li> 
        <?php }else{ ?>
            <li class="active"><a href="<?php echo URL; ?>login"><img src= "<?php echo URL; ?>public/images/ico_login.gif" />&nbsp;Connecter</a></li>
        <?php } ?>
        </ul>
        </div>

<!--  </div>-->
    <div id="content">


