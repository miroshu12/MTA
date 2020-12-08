<?php get_header(); ?>
    <aside id="sidebar1">
        <?php if ( is_active_sidebar( 'primary-widget-area-one' ) ) : ?>
        <div id="primary1" class="widget-area">
        <ul class="xoxo">
        <?php dynamic_sidebar( 'primary-widget-area-one' ); ?>
        </ul>
        </div>
        <?php endif; ?>
    </aside>
    <main id="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
        <?php comments_template(); ?>
        <?php endwhile; endif; ?>
        <?php get_template_part( 'nav', 'below' ); ?>
    </main>
    <aside id="sidebar2">
        <?php if ( is_active_sidebar( 'primary-widget-area-two' ) ) : ?>
        <div id="primary2" class="widget-area">
        <ul class="xoxo">
        <?php dynamic_sidebar( 'primary-widget-area-two' ); ?>
        </ul>
        </div>
        <?php endif; ?>
    </aside>
<?php get_footer(); ?>
