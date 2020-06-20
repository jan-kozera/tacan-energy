<?php get_header(); ?>
<section id="slides">
	<div id="slider" class="carousel" data-simple-slider>
		<div class="item" style="background: url('<?php echo THEME_URL; ?>img/slide1.jpg') no-repeat center center;">
			<div class="caption container">
				<h3>Tacan Energy</h3>
				<p>Stworzymy Twoją <br>elektrownię słoneczną. <br>To opłacalne rozwiązanie <br>z korzyścią dla środowiska.</p>
			</div>
		</div>
		<div class="item" style="background: url('<?php echo THEME_URL; ?>img/slide2.jpg') no-repeat center center;">
			<div class="caption container">
				<h3>Bezpieczeństwo</h3>
				<p>Bezpieczna instalacja <br>dopasowana do Twoich potrzeb <br>to nasz priorytet. Współpracujemy <br>jedynie z najlepszymi dostawcami.</p>
				<a href="tel:660681642">Zadzwoń po więcej szczegółów</a>
			</div>
		</div>
		<div class="item" style="background: url('<?php echo THEME_URL; ?>img/slide3.jpg') no-repeat center center;">
			<div class="caption container">
				<h3>Doświadczenie</h3>
				<p>Zaufało nam już ponad <br>200 inwestorów. <br>Razem oszczędzamy <br>rocznie 1 680 000 zł</p>
				<a href="tel:660681642">Zadzwoń po bezpłatną wycenę</a>
			</div>
		</div>
	</div>
</section>
<section id="top" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="title">Tacan Energy - <span class="yellow">Prąd ze słońca</span></h2>
				<h3 class="subtitle">Fotowoltaika to nasza specjalność</h3>
			</div>
			<div class="col-lg-3 col-md-6 page-box slidedown animated">
				<div class="border">
					<img src="<?php echo THEME_URL; ?>img/pagebox1.jpg" alt="" class="img-fluid">
					<h3>Instalacje <br>dla domu</h3>
					<p>Fotowoltaika to najlepszy sposób na darmowy prąd w Twoim domu.</p>
					<a href="<?php echo esc_url(home_url('/dotacje-i-finansowanie/fotowoltaika-dla-domu/')); ?>">Czytaj więcej</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 page-box slidedown animated">
				<div class="border">
					<img src="<?php echo THEME_URL; ?>img/pagebox2.jpg" alt="" class="img-fluid">
					<h3>Instalacje dla biznesu <br>i rolników</h3>
					<p>Zainwestuj w swoją własną elektrownie. Przestaniesz martwić się o rachunki za prąd i będziesz mógł skupić się na swoim biznesie.</p>
					<a href="<?php echo esc_url(home_url('/dotacje-i-finansowanie/fotowoltaika-dla-rolnika/')); ?>">Czytaj więcej</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 page-box slidedown animated">
				<div class="border">
					<img src="<?php echo THEME_URL; ?>img/pagebox3.jpg" alt="" class="img-fluid">
					<h3>Farmy <br>fotowoltaiczne</h3>
					<p>Farmy PV to bezpieczny i pewny zysk na lata.</p>
					<a href="<?php echo esc_url(home_url('/dotacje-i-finansowanie/fotowoltaika-dla-firm/')); ?>">Czytaj więcej</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 page-box slidedown animated">
				<div class="border">
					<img src="<?php echo THEME_URL; ?>img/pagebox4.jpg" alt="" class="img-fluid">
					<h3>Car porty</h3>
					<p>Nowoczesna i elologiczna przestrzeń parkingowa.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="calculator" class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 slide-left animated">
				<h2 class="title">Kalkulator <span class="yellow">fotowoltaiczny</span></h2>
				<h3 class="subtitle">Skorzystaj z naszego kalkulatora i oblicz ile możesz oszczędzić!</h3>
				<h4 class="ask">Ile płacisz za prąd?</h4>
				<div class="buttons">
					<input id="value" type="text" class="shadow" value="150" min="150" max="500" disabled>
					<span class="zl">zł</span>
					<span class="minus">-</span>
					<span class="plus">+</span>
				</div>
				<a id="localSafe" class="yel-btn" href="<?php echo esc_url(home_url('/kalkulator')); ?>">Oblicz</a>
			</div>
			<div class="col-lg-5 animated slide-right align-self-center">
				<img src="<?php echo THEME_URL; ?>img/kalkulator.jpg" alt="" class="img-fluid img-border">
			</div> 
		</div>
	</div>
</section>
<section id="about" class="section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 text-center  animated slidedown">
				<img src="<?php echo THEME_URL; ?>img/logo-short.png" class="img-fluid margin" alt="">
				<h2 class="title">Co nas <span class="yellow">wyróżnia?</span></h2>
			</div>
			<div class="col-lg-5 icons animated slide-left">
				<img src="<?php echo THEME_URL; ?>img/icon-1.png" alt="" class="img-fluid">
				<h3>Kompleksowa obsługa</h3>
				<p>Rozsiądź się wygodnie. Przeprowadzimy Cię przez cały proces stworzenia Twojej instalacji. W naszym standardzie są: projekt, montaz, gwarancja, zgłoszenie w zakładzie  energetycznym, pomoc w uzyskaniu dofinansowań, opieka posprzedażowa.</p>
			</div>
			<div class="col-lg-5 icons animated slide-right">
				<img src="<?php echo THEME_URL; ?>img/icon-2.png" alt="" class="img-fluid">
				<h3>Jakość</h3>
				<p>Pracujemy jedynie na najlepszych podzespołach renomowanych firm. Na wszystko otrzymasz stosowne gwarancje.  Współpracujemy m.in.. Huawei, LG, Sofar, Fronius, Qcells, Seraphim i wiele innych.</p>
			</div>
			<div class="col-lg-5 icons animated slide-left">
				<img src="<?php echo THEME_URL; ?>img/icon-3.png" alt="" class="img-fluid">
				<h3>Cena</h3>
				<p>Solidny sprzęt może iść w parze z niską ceną. Zależy nam aby Twoja inwestycja zwróciła się jak najszybciej. </p>
			</div>
			<div class="col-lg-5 icons animated slide-right">
				<img src="<?php echo THEME_URL; ?>img/icon-4.png" alt="" class="img-fluid">
				<h3>Doświadczenie</h3>
				<p>Ponad 200 zrealizowanych projektów w całej polsce. Doświadczony i wykwalifikowany zespół. Własne ekipy monterskie.</p>
			</div>
		</div>
	</div>
</section>
<section id="portfolio" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 animated slide-left">
				<h2 class="title">Przykładowe <span class="yellow">realizacje</span></h2>
			</div>
			<?php 
				$slides_query = new WP_Query( array(
				'posts_per_page' => '6',
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

			<div class="col-md-12 text-center">
				<a class="yel-btn" href="<?php echo esc_url(home_url('/realizacje')); ?>">Zobacz więcej</a>
			</div>
		</div>
	</div>
</section>
<section id="contact" class="section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 text-center animated slidedown">
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
			<div class="col-lg-5 form animated slide-left">
				<h4>Jeśli wolisz, zostaw nam swoje dane, <b>oddzwonimy!</b></h4>
				<div id="message"></div>
				<form method="post" action="<?php echo THEME_URL; ?>js/contact-form.php" name="contactform" id="contactform">
					<div class="form-group">
						<input name="name" id="name" type="text" value="" placeholder="imię" class="form-control" required>
					</div>
					<div class="form-group">
						<input name="ndname" id="ndname" type="text" value="" placeholder="nazwisko" class="form-control" required>
					</div>
					<div class="form-group">
						<input name="email" id="email" type="text" value="" placeholder="adres e-mail" class="form-control" required>
					</div>
					<div class="form-group">
						<input name="phone" id="phone" type="text" value="" placeholder="numer telefonu" class="form-control" required>
					</div>
					<div class="form-group no-margin">
						<label style="font-weight: normal; float:left;">
							<input id="rodo" type="checkbox" name="rodo" style="width: auto; float: left; margin-right: 5px; margin-bottom: 0; margin-top: 1px;" value="Zapoznałem się z informacją o administratorze i przetwarzaniu danych. Wyrażam zgodę na przetwarzanie danych osobowych zgodnie z ustawą o ochronie danych osobowych w związku z wysłaniem zapytania przez formularz kontaktowy. Podanie danych jest dobrowolne ale niezbędne do przetworzenia zapytania. Zostałem poinformowany, że przysługuje mi prawo dostępu do swoich danych, możliwości ich poprawiania, żądania zaprzestania ich przetwarzania. Administratorem danych osobowych jest Piotr Szczęsny, Kościuszki 23c 05-270 Marki. Dane wpisane w formularzu kontaktowym będą przetwarzane w celu przesłania informacji handlowych." required>
						</label>
						<div class="rodo maven">
							<p>Zapoznałem się z 
								<span>informacją o administratorze i przetwarzaniu danych.</span>
							</p>
							<div class="rodo-more shadow">
								<p>Wyrażam zgodę na przetwarzanie danych osobowych zgodnie z ustawą o ochronie danych osobowych w związku z wysłaniem zapytania przez formularz kontaktowy. Podanie danych jest dobrowolne ale niezbędne do przetworzenia zapytania. Zostałem poinformowany, że przysługuje mi prawo dostępu do swoich danych, możliwości ich poprawiania, żądania zaprzestania ich przetwarzania. </p>
								<p>Administratorem danych osobowych jest Piotr Szczęsny, Kościuszki 23c 05-270 Marki. Dane wpisane w formularzu kontaktowym będą przetwarzane w celu przesłania informacji handlowych.</p>
								<span class="x">x</span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<button class="yel-btn" type="submit" id="submit" name="submit">Wyślij</button>
					</div>
				</form>
			</div>
			<div class="col-lg-7 map animated slide-right">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d609.6872494665782!2d21.09676497971482!3d52.320556998037894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecf1ab5922063%3A0x5c9025fa6d7e41ac!2sKo%C5%9Bciuszki%2023C%2C%2005-260%20Marki!5e0!3m2!1sen!2spl!4v1590420158394!5m2!1sen!2spl" width="100%" height="370" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>