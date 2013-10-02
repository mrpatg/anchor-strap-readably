<?php theme_include('header'); ?>
<div class="content">
	<div class="container">
		<div>
			<div class="row">
				<div class="col-md-12">
					<h2>Blog</h2>
					<?php if(has_posts()) : while(posts()) : ?>
						<div>
						    <article>
						        <header>
						            <h4>
						                <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
						            </h4>
						            <h5><?php echo article_date(); ?></h5>
						        </header>
						        <p><?php echo article_description(); ?></p>
						    </article>
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php if(has_pagination()) : ?>
    <nav class="pagination">
        <?php echo posts_prev(); ?>
        <?php echo posts_next(); ?>
    </nav>
<?php endif; ?>
<?php theme_include('footer'); ?>