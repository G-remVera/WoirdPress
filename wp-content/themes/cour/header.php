<html lang="en">
<head>
<?php wp_head(); ?>
</head>
<body>
    <div class="container">
<?php
    $args = [
        'theme_location' => 'header_theme',
        'container' => 'nav',
        'container_class' => 'nav-items'
    ];
    wp_nav_menu($args)
?>