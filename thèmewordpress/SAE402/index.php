<?php 
    get_header();
    the_post();
?>

<main>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
                <h1 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white"><?php echo get_the_title(); ?></h1>
                <?php echo get_the_content(); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>