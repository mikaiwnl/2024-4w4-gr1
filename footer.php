<?php 
/**template footer .php  
 * 
 * */ 
?>


<div id="footer" class="global clr-agencement-secondaire">
        <footer>
            <h2>Footer</h2>
            <a class="btn large" href="#entete">retour en haut</a>
           
            <?php wp_nav_menu(array('theme_location' => 'secondaire', 'container' => 'nav')); ?>

            <section id="flexbox.elm"></section>
        </footer>


        
</div>
<?php wp_footer(); ?>
</body>

</html>