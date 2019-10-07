<?php get_header(); ?>

<header class="ct-pageHeader">
    <section class="ct-backgroundContent ct-u-displayTableVertical innerPageBG" data-type="pattern" data-height="520" data-bg-image="<?php bloginfo('template_directory'); ?>/images/2.jpg" data-bg-image-mobile="<?php bloginfo('template_directory'); ?>/images/2.jpg">
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
<section class="ct-blog ct-u-paddingTop40 ct-u-paddingBottom80">
<div class="container">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="ct-blogPost ct-blogPost--primary text-justify-xs" id="post-<?php the_ID(); ?>">
			
                    <h2 class="ct-blogPost-title text-center-xs"><?php the_title(); ?></h2>
			
			<div class="entry">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>
			
			<?php edit_post_link('Edit this entry','',''); ?>
			
		</div>

	<?php //comments_template(); ?>

	<?php endwhile; endif; ?>
	
</div>
</section>

<?php get_footer(); ?>