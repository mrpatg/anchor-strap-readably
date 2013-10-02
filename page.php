<?php theme_include('header'); ?>
<div class="content">
	<div class="container">
		<div>
			<div class="row">
				<div class="col-md-12">
					<article>
					    <header>
					        <h1><?php echo page_title(); ?></h1>
					    </header>
					    <?php echo page_content(); ?>
					</article>
				</div>
			</div>
		</div>
	</div>
</div>
<?php theme_include('footer'); ?>