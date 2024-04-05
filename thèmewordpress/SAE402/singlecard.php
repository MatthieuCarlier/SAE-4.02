
<?php 
    get_header();

?>
<?php if (have_post()):
while (have_post()):the_post(); ?>

<div class="flex flex-col lg:flex-row gap-12 items-center">
            <div class="flex flex-col border border-white rounded">
              <div class="flex flex-col items-center px-5 py-7">
                <img src="<?php the_field('img_perso') ?>" alt="" class="w-20" />
                <h3><?php the_field('card_nom') ?></h3>
                <h4><?php the_field('card_metier') ?></h4>
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

<?php endwhile; endif; ?>