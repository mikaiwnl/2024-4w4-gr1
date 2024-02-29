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
    <div id="entete" class="global">
        <header class="entete__header">
            <h1>Thème du michael #1(h1)</h1>
            <h2>4w4-Conception d'interface et <span>développement Web</span></h2>
            <h3>TIM-College de Maisonneuve</h3>
            <button><a href="https://www.freecodecamp.org/">Évenements</a></button>
        </header>
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>
    <div id="accueil" class="global">
        <section>
        <h2>Accueil</h2>
        <div class="cours">
            <?php 
                // if(have_posts()){
                //     while(have_posts()){
                //         the_post();
                //         the_title('<h3>','</h3>');
                //         echo wp_trim_words(get_the_content(),30);
                //     }
                // }

                if(have_posts()):
                    while(have_posts()) : the_post();
                    $titre = get_the_title();
                    $sigle = substr($titre,0,7); 
                    $titreCours = substr($titre ,8 ,-5);
                    $duree = substr($titre, -6,6);
                    $titrefinale = trim(substr($titre,7),$duree)
                ?>   
                    <div class="carte">
                        <p><?php echo $sigle ?></p>
                        <h3><?php echo $titrefinale ?></h3>
                        <h3><?php echo $duree ?></h3>
                        
                        
                        <p><?php echo wp_trim_words(get_the_content(),20); ?></p>  
                    </div>
                   <?php endwhile;?>    
                    <?php endif;?>
            <p><a class="btn" href="#footer">bas de page</a></p>
        </div>
        </section>
        
    </div>
    <div id="evenement" class="global diagonal">
        <section>
        <h2>Évenement</h2>
        <h3>On peut enlever singe de la foret mais on peut pas enlever foret de la singe  (h3) Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis vero adipisci repudiandae ea eius officiis, labore autem sunt dolores voluptatibus quos vitae perspiciatis nostrum nobis est. Doloremque modi nam neque? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla aliquam corrupti sint recusandae accusantium exercitationem nisi, ipsa eligendi, dicta rerum voluptas consequuntur? Cumque corrupti nisi, dolorum unde in sit aperiam.</h3>

          
        </section>
      

    </div>
    <div id="galerie" class="global">
        <section><h2>Gallerie(h2)</h2>
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptate vitae quisquam ipsum est a doloremque in, blanditiis architecto iure perferendis dolorum esse? Dicta, quasi officia autem voluptate ex ad.</h3>
        </section>
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: var(--couleur-arriere-footer);" class="shape-fill"></path>
            </svg>
        </div>
    </div>
    <div id="footer" class="global">
        <footer><h2>Footer</h2>
            <a class="btn large" href="#entete">retour en haut</a>
                <h3> (h3) Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi vero maiores saepe eveniet quas, laudantium eius earum iure tempore quisquam repellat accusamus eum repudiandae adipisci! Similique obcaecati aperiam distinctio enim.</h3>
                <h3> (h3) Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum architecto maxime eos nesciunt eligendi, at nihil minus maiores nemo quis alias. Debitis facilis exercitationem suscipit voluptates provident dolorem? Illum, expedita?</h3>
        </footer>
    </div>
</body>
</html>