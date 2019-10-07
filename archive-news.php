<?php get_header(); ?>
  
<?php if (have_posts()) : ?>
    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    <?php /* If this is a category archive */ if (is_category()) { ?>
        <h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
        <h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        <h2>Archive for <?php the_time('F jS, Y'); ?></h2>
    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h2>Archive for <?php the_time('F, Y'); ?></h2>
    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h2>Archive for <?php the_time('Y'); ?></h2>
    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
        <h2>Author Archive</h2>
    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h2>Blog Archives</h2>
    <?php } ?>
    <?php 
        global $wp_query;
        $big = 999999999; // need an unlikely integer
        $count = 0;
    ?>
            
 <section class="ct-blog ct-u-paddingTop40">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <?php while (have_posts()) : the_post(); ?>
                            
                <div class="ct-blogItem ct-blogItem--primary">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ct-blogThumbnail">
                                 <?php 
                                if ( has_post_thumbnail()){ 
                                     the_post_thumbnail('post-thumbnail', array('class'=>'grayscale grayscale-fade autoHeight') );
                                }else{ 
                            ?>
                                <img src="<?php bloginfo('template_directory') ?>/images/default.png" />
                            <?php } ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ct-blogDescription nesTemplate">
                                <h5 class="ct-blogTitle">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h5>
                                
                                <div class="ct-u-size16 text-justify">
                                    <?php the_content(); ?>
                                </div>
                                 
                                <?php 
                                    $showMore = get_field('news_show_more');
                                    if(isset($showMore) && $showMore!=''){
                                ?>
                                <div class="textForExtend  text-justify hide">
                                    <?php echo $showMore; ?>
                                </div>
                                <a class="toggleContent">Show More →</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endwhile; ?>
                <!-- pagination here -->
<!--                <div class="wp-paginate">
                    <div class="inner-block">
                        <?php
                            echo paginate_links( array(
                                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                    'format' => '?paged=%#%',
                                    'current' => max( 1, get_query_var('paged') ),
                                    'total' => $wp_query->max_num_pages
                            ) );
                        ?>
                    </div>
                </div>-->
                <?php else : ?>
                <h2>Nothing found</h2>                      
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>