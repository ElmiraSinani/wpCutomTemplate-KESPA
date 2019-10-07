<?php
/*
Template Name: Blog Page
*/
?>

<?php get_header(); ?>



<header class="ct-pageHeader">
    <section class="ct-backgroundContent ct-u-displayTableVertical" data-type="pattern" data-height="283" data-bg-image="<?php bloginfo('template_directory'); ?>/assets/images/content/header1.jpg" data-bg-image-mobile="./assets/images/content/header1.jpg">
        <div class="inner ct-u-displayTableCell ct-pageHeader--bottomRight">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="ct-pageHeader-title">
                            <a href="<?php home_url( '/' )?>/support">
                                <span class="ct-js-typingAnimation" data-type="typingAnimation" data-animation-speed="2">
                                    Support KESPA
                                    <i class="fa fa-angle-double-right"></i>
                                </span>
                            </a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h5 class="ct-titleBox text-uppercase ct-u-paddingTop40">
                In The News
            </h5>
        </div>
        <div class="col-md-6">
            <div class="archive-search ralative">
                <?php //get_search_form(); ?>
            </div>
        </div>
    </div>
</div>
<section class="ct-blog ct-u-paddingTop40">
    
    <div class="container">
        
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                         <?php
                            $query_args = array ( 'post_type' => 'news', 'posts_per_page' => '3' );            
                            $the_query = new WP_Query( $query_args );
                            if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                        ?>
                        <div class="ct-blogItem ct-blogItem--primary">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="ct-blogThumbnail">
                                        <?php if(has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('post-thumbnail', array('class'=>'grayscale grayscale-fade autoHeight') ); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="ct-blogDescription">
                                        <h3 class="ct-blogTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="ct-blogMeta">
                                            <span class="ct-blogMeta-personNick">By <a href="#">Jess45</a></span>
                                            <span class="ct-blogMeta-tagName">in <a href="#">Early 2015</a> on </span>
                                            <span class="ct-blogMeta-date">January 4, 2015</span>
                                            <span class="ct-blogMeta-comments">- <a href="#"> 12 Comments</a></span>
                                        </div>
                                        <p class="ct-u-size16 text-justify-xs">
                                            <?php the_excerpt(); ?>
                                        </p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg">READ ARTICLE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <?php endwhile; ?>
                        <!-- pagination here -->
                        <div class="wp-paginate">
                            <div class="inner-block">
                                <?php        
                                    $big = 999999999; // need an unlikely integer
                                    echo paginate_links( array(
                                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                            'format' => '?paged=%#%',
                                            'current' => max( 1, get_query_var('paged') ),
                                            'total' => $the_query->max_num_pages
                                    ) );
                                ?>
                            </div>
                        </div>
                        <?php       
                            wp_reset_postdata();                        
                            else:
                                _e('Sorry, no posts matched your criteria.'); 
                            endif; 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="ct-divider-Lighter ct-u-marginBoth40">
   
<?php get_footer(); ?>