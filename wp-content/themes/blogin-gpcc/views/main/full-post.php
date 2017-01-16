<h3 class="widget-title"><?php _e('Latest Posts', 'blogim');?></h3>
<div class="wrap">
<?php
$blogim_i=1;

    $wp_query = new WP_Query();
    $wp_query->query('showposts=8&post_type=match-report'.'&paged='.$paged);

if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
    $blogim_thumb = get_post_thumbnail_id();
    $blogim_img_url = esc_url( wp_get_attachment_url( $blogim_thumb,'full') ); //get img URL
    $blogim_img = aq_resize( $blogim_img_url, 1140, 666, true,true,true ); //resize & crop img
    $blogim_img = ($blogim_img == '') ? esc_url( get_template_directory_uri() ) .'/assets/img/fallback-1140x666.jpg' : $blogim_img;
    $blogim_class_format = 'content full-post';
?>
    <div <?php post_class($blogim_class_format); ?>>
        <?php if($blogim_img != ''):?>
            <figure><a href="<?php esc_url(the_permalink());?>"><img src="<?php echo $blogim_img;?>" alt="<?php the_title_attribute();?>"></a></figure>
        <?php endif;?>
        <div class="caption">
            <div class="meta">
                <h2 class="title"><a href="<?php esc_url(the_permalink());?>"><?php the_title();?></a></h2>
                <strong class="cat s-10"><?php the_category(' , ');?></strong>
                <span class="date s-11"><?php the_time('M d, Y') ?></span>
                <span class="date s-11"><a href="<?php esc_url(the_permalink());?>#comments"><?php comments_number(__('No Comments','blogim'),__('1 Comment','blogim'),__('% Comments','blogim')); ?></a></span>
            </div>
            <div class="format-text">
               <p><?php the_excerpt(); ?></p>
            </div><!-- end of format text -->
            <a href="<?php esc_url(the_permalink());?>" class="button"><?php _e('Read More','blogim');?></a>
        </div><!-- end of caption -->
    </div><!-- end of content -->
<?php endwhile; ?>
<?php else : ?>
    <div class="no-post-found">
        <div class="format-text the-content">
            <p><?php _e('Sorry, no posts matched your criteria. Try something else. ', 'blogim')?></p>
        </div>
    </div>
<?php endif; ?>
</div><!-- end of wrap -->
<?php get_template_part('views/part/pagination'); ?>
