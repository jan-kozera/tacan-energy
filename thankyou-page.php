<?php /* Template name: Thank you page */ ?>
<?php get_header(); ?>

<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center top animated slidedown">
				<h3 class="yellow">Dziękujemy za wypełnienie formularza</h3>
				<p class="maven">Twój formularz został do nas przesłany. Skontaktujemy się z Państwem tak szybko jak to możliwe.</p>
				<a class="yel-btn" href="<?php echo esc_url(home_url('/')); ?>">Powrót do strony głównej</a>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>