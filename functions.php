
<?php 
    add_theme_support('menus'); 
    add_theme_support('custom-logo');
    function register_my_menus() {
        register_nav_menus(
          array(
            'principal' => __( 'Principal Menu' ),
            'secondaire' => __( 'Secondaire Menu' )
          )
        );
      }
      add_action( 'init', 'register_my_menus' ); 
      add_theme_support('menus');
      add_theme_support('custom-logo');

/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function _4w4_modifie_requete_principale($query)
{
    if ($query->is_home() && $query->is_main_query() && !is_admin()) {
        $query->set('category_name', 'note4w4');
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', '_4w4_modifie_requete_principale');


function custom_image_size_for_gallery( $sizes ) {

  return array_merge( $sizes, array(

      'thumbnail' => __('Thumbnail'),

      'medium'    => __('Medium'),

      'large'     => __('Large'),

      'full'      => __('Full Size'),

  ));
}

add_filter( 'image_size_names_choose', 'custom_image_size_for_gallery' );