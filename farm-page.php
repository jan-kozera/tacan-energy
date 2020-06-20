<?php /* Template name: Dla rolnika */ ?>
<?php get_header(); ?>

<section id="farm" class="section">
	<div class="container">
		<div class="row">
	    	<div class="col-md-12 text-center animated slide-left">
				<h2 class="title white">Dotacja <span class="yellow">dla rolnika</span></h2>
				<h3 class="subtitle white"><strong>Inwestuj w swoje gospodarstwo,</strong> nie w rachunki za prąd!</h3>
			</div>
			<div class="col-md-12 bottom text-center align-self-end animated slide-left">
				<img src="<?php echo THEME_URL; ?>img/logo-farm.png" class="img-fluid" alt="">
				<h3 class="subtitle"><strong>Instalacja fotowoltaiczna dla rolnika 25% tańsza!</strong></h3>
				<p class="sub-p maven">Rozliczasz się z podatku rolnego? Zgodnie z prawem możesz odliczyć <br>25% wartości inwestycji w Twoją instalację!</p>
			</div>
		</div>
	</div>
</section>
<section id="foto" class="section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 text-center">
				<h2 class="title">Fotowoltaika - <span class="yellow">Najlepszy prąd pod słońcem</span></h2>
			</div>
			<div class="col-md-9">
				<div class="row relative">
					<div class="dashed"></div>
					<div class="col-md-4 hicon animated slide-left">
						<img src="<?php echo THEME_URL; ?>img/h1.png" class="img-fluid" alt="">
						<h3>Współpracując z nami <br><strong>zwrot w 6 lat</strong></h3>
					</div>
					<div class="col-md-4 hicon animated slidedown">
						<img src="<?php echo THEME_URL; ?>img/h2.png" class="img-fluid" alt="">
						<h3>Działanie paneli <br><strong>min. 25 lat</strong></h3>
					</div>
					<div class="col-md-4 hicon animated slide-right">
						<img src="<?php echo THEME_URL; ?>img/h3.png" class="img-fluid" alt="">
						<h3><strong>19 lat</strong><br>prądu za darmo</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="finance" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center animated slidedown">
				<h2 class="title">Finansowanie</h2>
				<p class="sub-p maven">Możesz skorzystać także z pomocy naszego doradcy finansowego. <br>Porówna dla Ciebie oferty kredytu i przedstawi najlepszą ofertę.</p>
				<img src="<?php echo THEME_URL; ?>img/bank.png" alt="" class="img-fluid bank">
			</div>
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
			<div class="col-md-5 form animated slide-left">
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
					<div class="form-group text-center">
						<button class="yel-btn" type="submit" id="submit" name="submit">Wyślij</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>