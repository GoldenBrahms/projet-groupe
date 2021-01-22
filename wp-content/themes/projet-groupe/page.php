<?php get_header()?>

je suis page.php

<?php 
    $pageTitle = get_the_title();
    if($pageTitle == 'Tableau de bord'){
        get_template_part( 'template-parts/content/content', 'dashboard');
    }
    if($pageTitle == 'Nos Formations'){
        get_template_part( 'template-parts/content/content', 'formations');
    }
    if($pageTitle == 'Ajouter une formation'){
        get_template_part( 'template-parts/forms/form', 'formation');
    }
?>