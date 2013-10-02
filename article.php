<?php theme_include('header'); ?>
<div class="content">
	<div class="container">
		<div>
			<div class="row">
				<div class="col-md-12">
					<article>
					    <header>
					        <h1><?php echo article_title(); ?></h1>
					        <small><?php echo article_date(); ?></small>
					    </header>
					    <?php echo article_markdown(); ?>
					</article>
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