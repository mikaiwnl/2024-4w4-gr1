<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thème du groupe 1</title>
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri(); ?>/normalize.css">
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@500;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>

<body>
  
    <?php get_header(); ?>

    <div id="accueil" class="global">
        <section>
        <h2>ERREUR 404: </h2>
            <p>vous essayez d'Accéder à une page qui n'existe pas</p>
            <p>Pour revenir à la page d'accueil cliquer sur le lien suivant</p>

            <?php get_bloginfo('name') ; ?>
            <?php get_bloginfo('url'); ?>
            <a href="<?php echo get_bloginfo('url')?>"><?php echo get_bloginfo('name') ?></a>

         <?php wp_nav_menu(array('theme_location' => 'principal', 'container' => 'nav')); ?> 
        </section>
        </div>    
     
        <div class="flexbox">
        <div class="cours">
       
                    <div class="carte">
                        
                    
                        
                
                    </div>
                
       
                    </div>   
        
        
    <div id="footer" class="global">
        <footer><h2>Footer</h2>
        <?php get_search_form() ?>
              <h3> (h3) Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi vero maiores saepe eveniet quas, laudantium eius earum iure tempore quisquam repellat accusamus eum repudiandae adipisci! Similique obcaecati aperiam distinctio enim.</h3>
                <h3> (h3) Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum architecto maxime eos nesciunt eligendi, at nihil minus maiores nemo quis alias. Debitis facilis exercitationem suscipit voluptates provident dolorem? Illum, expedita?</h3>
        </footer>
    </div>
</body>
</html>