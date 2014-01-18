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

<div class="flexslider" style="margin-top:30px; width:80%; margin-left:7%; height:90% !important; padding:35px">
                <ul class="slides">
                    
                        <li>
                            <img  src= "<?php echo URL; ?>public/images/Bourse1.jpg" />
                        </li>
			<li>
                             <img  src= "<?php echo URL; ?>public/images/bourse2.jpg"/>
                        </li>                   
			<li>
                            <img  src= "<?php echo URL; ?>public/images/bourse.jpg"/>
                        </li>                   
                </ul>
 </div>


