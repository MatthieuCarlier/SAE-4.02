<footer class="bg-ocean flex flex-col items-center justify-center" id="footer">
      <div class="bg-bg w-3/4 lg:w-3/5 rounded p-5">
        <h3 class="text-white text-lg font-semibold">
        <?php the_field('foot_inscription') ?>
        </h3>
        <div class="flex justify-between pt-5">
          <a
            href=""
            class="bg-white flex items-center text-black font-bold rounded px-5 lg:pl-5 lg:pr-56 h-8"
            ><?php the_field('foot_adresse') ?></a
          >
          <a
            href=""
            class="flex bg-white text-black font-bold rounded  h-8 px-2 lg:px-10 items-center justify-center text-sm w-32"
            ><?php the_field('foot_btn') ?></a
          >
        </div>
      </div>
      <div class="w-full px-5 flex justify-between text-white opacity-45">
        <ul>
          <li><?php the_field('foot_faq') ?></li>
          <li><?php the_field('foot_contact') ?></li>
          <li><?php the_field('foot_propos') ?></li>
        </ul>
        <ul>
          <li><?php the_field('foot_politique') ?></li>
          <li><?php the_field('foot_terms') ?></li>
          <li><?php the_field('foot_choices') ?></li>
        </ul>
      </div>
      <div class="flex items-center p-2 justify-center text-white">
        <p class=""> <?php the_field('droit') ?></p>
      </div>
    </footer>