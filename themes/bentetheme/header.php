<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title><?php bloginfo('title') ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                wp_nav_menu(
                    [
                        'menu'            => 'header',
                        'link_before'     => '',
                        'link_after'      => '',
                        'menu_class'      => 'navbar-nav me-auto mb-2 mb-lg-0',
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarSupportedContent',
                        'add_li_class'    => 'nav-item',
                        'add_a_class'     => 'nav-link',
                    ]
                );
                ?>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- <figure class="header__figure">
	<img class="header__logo" src="PLAATJEEE.png" alt="">
</figure>

<nav class="header__nav">
	<ul class="header__nav__list">
		<li class="header__nav__item">Home</li>
		<li class="header__nav__item">Over</li>
		<li class="header__nav__item">Foto's</li>
		<li class="header__nav__item">Events</li>
        <li class="header__nav__item">Contact</li>
    </ul>
</nav>
<main> -->