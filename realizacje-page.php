<?php /*Template name: Realizacje */ ?>
<?php get_header(); ?>

<section id="portfolio" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="title">Nasze <span class="yellow">realizacje</span></h2>
			</div>
			<?php 
				$slides_query = new WP_Query( array(
				'posts_per_page' => '-1',
				'orderby' => 'post_date',
				'order' => 'ASC',
				'post_type' => 'realizacje'

			) );

			if ( $slides_query->have_posts() ):
				$i = 0;
			?>
			<?php while($slides_query->have_posts()) : $slides_query->the_post(); ?>
				<div class="col-md-4 realizacja animated slidedown">
						<?php the_post_thumbnail('full', ['class' => 'img-border img-fluid']); ?>
						<span class="right"><?php the_content(); ?></span>
					</div>
			<?php endwhile; ?>
			<?php endif;?>
		</div>
	</div>
</section>
<section id="contact" class="section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 text-center">
				<h2 class="title">Kontakt</h2>
			</div>
			<div class="col-lg-8">
				<div class="row">
					<div class="col-md-4 cicons animated slidedown">
						<img src="<?php echo THEME_URL; ?>img/icon-5.png" alt="" class="img-fluid">
						<h3>Adres</h3>
						<p>Kościuszki 23c<br>
							05 - 270 Marki <br>
						Polska</p>
					</div>
					<div class="col-md-4 cicons animated slidedown">
						<img src="<?php echo THEME_URL; ?>img/icon-6.png" alt="" class="img-fluid">
						<h3>Nr telefonu</h3>
						<p><a href="tel:660681642">660 681 642</a></p>
					</div>
					<div class="col-md-4 cicons animated slidedown">
						<img src="<?php echo THEME_URL; ?>img/icon-7.png" alt="" class="img-fluid">
						<h3>Zapytania prosimy <br>kierować na adres:</h3>
						<p><a href="mailto:biuro@tacan-energy.pl">biuro@tacan-energy.pl</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>