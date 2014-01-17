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
 <script type="text/javascript">
            $(window).load(function() {
            $('.flexslider').flexslider({
            animation: Modernizr.touch ? "slide" : "fade",
            slideshowSpeed: 6000,
            animationSpeed: Modernizr.touch ? 2000 : 2000,
            controlNav: false,
            touch: true
        });
    });
</script>
</head>

<body>
    <?php Session::init(); ?>
   
    <div id="header">
         <div class="flexslider">
                <ul class="slides">
                    
                        <li>
                            <img  src= "<?php echo URL; ?>public/images/Bourse1.jpg"/>
                        </li>
			<li>
                             <img  src= "<?php echo URL; ?>public/images/bourse2.jpg"/>
                        </li>                   
			<li>
                            <img  src= "<?php echo URL; ?>public/images/bourse.jpg"/>
                        </li>                   
                </ul>
            </div>
       
<!--<div class="navbar">
  <div class="navbar-inner">-->
        <ul class="nav nav-pills">
        <?php if (Session::get('loggedIn') == false){ ?>
            <li class="active"> <a href="<?php echo URL; ?>index">Index</a></li>
            <li class="active"> <a href="<?php echo URL; ?>help">Help</a></li>
        <?php } ?>
        <?php if (Session::get('loggedIn') == true){ ?>
            <li class="active"><a href="<?php echo URL; ?>Dashboard">Dashboard</a></li>
        <?php if (Session::get('role') == 'owner'){ ?>
            <li class="active"><a href="<?php echo URL; ?>user">Users</a></li>
        <?php } ?>
        
            <li class="active"> <a href="<?php echo URL; ?>Dashboard/logout">LogOut</a></li>
        <?php }else{ ?>
            <li class="active"> <a href="<?php echo URL; ?>login">Login</a></li>
        <?php } ?>
        </ul>
        </div>
<!--  </div>
</div>-->
    <div id="content">


