<?php
//下記記述は、template-adress.phpと被ってしまうのでfunction.phpに記述する
// if(is_page('contact')){
// 	remove_filter('the_content', 'wpautop');
// }
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

		<!-- 茶色のバーにアクセスのタイトル -->
        <h2 class="pageTitle"><?php the_title(); ?><span><?php echo strtoupper($post->post_name); ?></h2>

		<!-- パンくず -->
		<?php get_template_part('template-parts/breadcrumb'); ?>

        <main class="main">
            <div class="container">
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
        </main>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
