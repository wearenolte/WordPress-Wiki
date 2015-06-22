<?php
/**
 * @package moxie_wiki
 */
?>

<?php
    $loop = new WP_Query( array( 'post_type' => 'link', 'category_name' => 'current', 'ignore_sticky_posts' => 1, 'paged' => $paged ) );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="pindex">
                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="pimage">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                <?php } ?>
                <div class="ptitle">
                    <h2><?php echo get_the_title(); ?></h2>
                </div>
            </div>
        <?php endwhile;
        if (  $loop->max_num_pages > 1 ) : ?>
            <div id="nav-below" class="navigation">
                <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Previous', 'domain' ) ); ?></div>
                <div class="nav-next"><?php previous_posts_link( __( 'Next <span class="meta-nav">&rarr;</span>', 'domain' ) ); ?></div>
            </div>
        <?php endif;
    endif;
    wp_reset_postdata();
?>
