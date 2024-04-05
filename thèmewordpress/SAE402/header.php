
<html lang="en">
<head>
    <?php wp_head(); ?>
    <?php init_scripts(); ?>
    
</head>
<body>
<header>
<nav class="navbar lg:px-20 lg:py">
      
      <img src="<?php the_field('img_logo') ?>" alt="logo" class="logo">
      <ul class="menu">
          <li class="menu__li"><a class="menu-btn" href="#propos"><?php the_field('nav_propos') ?></a></li>
          <li class="menu__li"><a class="menu-btn" href="#equipe"><?php the_field('nav_equipe') ?></a></li>
          <li class="menu__li"><a class="menu-btn" href="#footer"><?php the_field('nav_contact') ?></a></li>
          <li class="menu__li btn_jeu"><a class="menu-btn" href="https://www.n-hautin.mmi-limoges.fr/SAE402/SplashyGame.html"><?php the_field('nav_jouer') ?></a></li>

      </ul>

</nav> 
</header>
