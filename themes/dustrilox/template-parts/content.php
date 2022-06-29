<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dustrilox
 */

if ( is_single() ) : ?>
<article id="post-<?php the_ID();?>" <?php post_class( 'tp-blog format-image mb-50' );?>>
    <?php if ( has_post_thumbnail() ): ?>
        <div class="tp-blog__thumb m-img mb-35">
            <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
        </div>
    <?php endif;?>

   <!-- blog meta -->
    <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>
    
    <div class="postbox__text">
       <?php the_content();?>
        <?php
            wp_link_pages( [
                'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'dustrilox' ),
                'after'       => '</div>',
                'link_before' => '<span class="page-number">',
                'link_after'  => '</span>',
            ] );
        ?>
    </div>    
    <!-- post tag -->
    <div class="blog-details-tag">
        <?php print dustrilox_get_tag();?>
    </div>
 </article>
<?php else: ?>


<article id="post-<?php the_ID();?>" <?php post_class( 'tp-blog mb-60 format-standard' );?>>
    <?php if ( has_post_thumbnail() ): ?>
    <div class="tp-blog__thumb m-img mb-35">
       <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
        </a>
    </div>
    <?php endif; ?>
    <div class="tp-blog__content">
        <!-- blog meta -->
        <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>
       
       <h3 class="tp-blog__title mb-15">
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </h3>
       <?php the_excerpt();?>
       
       <!-- blog btn -->
       <?php get_template_part( 'template-parts/blog/blog-btn' ); ?>
    </div>
 </article>

<?php endif;?>