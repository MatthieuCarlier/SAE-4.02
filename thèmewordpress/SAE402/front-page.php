
<?php 
    get_header();
?>
<div class="wrapper">
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
      <div class="bulle"><span class="dot"></span></div>
    </div>

<main>
      <section
        class="mt-4 bg-bg -z-10 w-full relative h-screen flex flex-col items-center justify-center text-left p-5 lg:justify-normal lg:flex-row lg:gap-10 lg:px-20 lg:py-20 lg:text-center">
        <div class="flex flex-col item-center justify-center lg:flex-row fixed z-10">
          <div
            class="flex flex-col justify-center text-white lg:w-1/2 lg:text-left p-5">
            <h1 class="text-5xl pt-6 fontpage">
              <?php the_field('titre') ?>
            </h1>
            <p class="pt-10 pb-10">
            <?php the_field('description') ?>
            </p>
          </div>
          <div class="flex items-center justify-center px-11 gap-5 p-5 lg:flex-col">
            <img
              src="<?php the_field('icone_page') ?>"
              alt="iconpage"
              class="w-40 rounded-full lg:w-72"/>
          </div>
        </div>
      </section>

      <section
        class="w-full bg-transparent bloc flex flex-col items-center justify-center z-20"
      >
        <img src="<?php echo get_template_directory_uri(); ?>/public/asset/transitionrequin.png" alt="" />
      </section>

      <section
        class="flex flex-col items-center justify-center bg-ciant"
      >
      <div class="flex flex-col items-center justify-center text-white">
          <h1 class="py-7 font-bouquet text-6xl fontpage" id="propos"><?php the_field('titre_jeu') ?></h1>

            <iframe src="<?php echo get_template_directory_uri(); ?>/public/asset/teaser.mp4" class="h-32 lg:h-96 w-full" controls></iframe>

            

          
          <div class="flex flex-col lg:flex-row gap-5 pt-4">
            <div class="flex flex-col items-center">
              <img src="<?php the_field('fleche') ?>" alt="" class="h-16" />
              <p class="w-52 text-center">
              <?php the_field('fleche_text') ?>
              </p>
            </div>
            <div class="flex flex-col items-center">
              <img src="<?php the_field('attention') ?>" alt="" class="h-16" />
              <p class="w-52 text-center">
              <?php the_field('attention_text') ?>
              </p>
            </div>
            <div class="flex flex-col items-center">
              <img src="<?php the_field('taille') ?>" alt="" class="h-16" />
              <p class="w-52 text-center">
              <?php the_field('taille_text') ?>
              </p>
            </div>
                     </div>
        </div>
      </section>
           <section class="bg-ciant w-full">
        <img src="<?php echo get_template_directory_uri(); ?>/public/asset/transition2.png" alt="transition2" />
      </section>
      <section class="flex flex-col items-center justify-center bg-bleu">
        <div
          class="flex flex-col items-center justify-center text-white gap-10"
        >
          <h1 class="text-6xl fontpage" id="equipe"><?php the_field('titre_equipe') ?></h1>


<?php $args = array(
    'post_type' => 'cards',);

$query = new WP_Query( $args );

if($query->have_posts()) {
  while($query->have_posts()) {
  $query->the_post(); 
  
  ?>
<div class="flex flex-col lg:flex-row gap-12 items-center">
            <div class="flex flex-col border border-white rounded">
              <div class="flex flex-col items-center px-5 py-7">
                <img src="<?php the_field('img_perso') ?>" alt="" class="w-20" />
                <h3><?php the_field('card_nom') ?></h3>
                <h4><?php the_field('text_metier') ?></h4>
              </div>
              <ul class="flex">
                <li class="border border-white py-3 px-10">
                  <img src="<?php the_field('img1_card') ?>" alt="" />
                </li>
                <li class="border border-white py-3 px-10">
                  <img src="<?php the_field('img2_card') ?>" alt="" />
                </li>
                <li class="border border-white py-3 px-10">
                  <img src="<?php the_field('img3_card') ?>" alt="" />
                </li>
              </ul>
            </div>
            <p class="w-80 text-center">
            <?php the_field('des_card') ?>
            </p>
          </div>
          <div class="flex flex-col-reverse lg:flex-row gap-12 items-center">
            <p class="w-80 text-center">
            <?php the_field('des_card2') ?>
            </p>
            <div class="flex flex-col border border-white rounded">
              <div class="flex flex-col items-center px-5 py-7">
                <img src="<?php the_field('img_perso2') ?>" alt="" class="w-20" />
                <h3><?php the_field('card_nom2') ?></h3>
                <h4><?php the_field('text_metier2') ?></h4>
              </div>
              <ul class="flex">
                <li class="border border-white py-3 px-10">
                  <img src="<?php the_field('img1_card2') ?>" alt="" />
                </li>
                <li class="border border-white py-3 px-10">
                  <img src="<?php the_field('img2_card2') ?>" alt="" />
                </li>
                <li class="border border-white py-3 px-10">
                  <img src="<?php the_field('img3_card2') ?>" alt="" />
                </li>
              </ul>
            </div>
          </div>
          <?php
  }
  wp_reset_postdata();
}
?>
        </div>
      </section>



      <section class="bg-bleu w-full">
        <img src="<?php echo get_template_directory_uri(); ?>/public/asset/transition3.png" alt="transition3" />
      </section>    </main>
<?php 
    get_footer();

?>

</html>