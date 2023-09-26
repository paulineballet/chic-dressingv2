<?php

add_action('wp_enqueue_scripts', 'chicdressing_enqueue_styles');
function chicdressing_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

//add_filter('big_image_size_threshold', '__return_false');

// Cette fonction supprime certains styles de la file d'attente de WordPress.
// Ces styles sont liés à des polices Google spécifiques utilisées par le thème Ashe.
function remove_ashe_gfonts_scripts()
{
    // 'wp_dequeue_style' est une fonction WordPress qui permet de supprimer un style enregistré de la file d'attente.
    // Les lignes suivantes suppriment les polices Google 'Playfair', 'Open Sans', 'Kalam' et 'Rokkitt' du thème Ashe.
    wp_dequeue_style('ashe-playfair-font');
    wp_dequeue_style('ashe-opensans-font');
    wp_dequeue_style('ashe-kalam-font');
    wp_dequeue_style('ashe-rokkitt-font');
}

// 'add_action' est une fonction WordPress qui permet d'ajouter une fonction à un "hook" spécifique.
// Ici, elle ajoute la fonction 'remove_ashe_gfonts_scripts' au hook 'wp_enqueue_scripts'.
// Le dernier paramètre, 11, est la priorité de l'action. Plus le nombre est élevé, plus tard l'action sera exécutée.
add_action('wp_enqueue_scripts', 'remove_ashe_gfonts_scripts', 11);
