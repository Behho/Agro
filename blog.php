<section class="blog mt-3">
		<div class="contaner h-100">
			<div class="row m-0 h-100 blog-list justify-content-between">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<!-- post -->
				<a href="#" class="col-4 row h-md-100 blog-list-item align-items-end  ">
					<div class="blog-list-item__date"><?php the_date('d.m'); ?></div>
					<div class="col-12 blog-list-item__title d-flex ">
					<span><?php the_title(); ?></span>
					<span class="bold-txt"><?php the_content(); ?></span>
					</div>
				</a>
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>
			</div>
		</div>
	</section>