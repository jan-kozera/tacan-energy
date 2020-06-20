<?php /*Template name: Kontakt */ ?>
<?php get_header(); ?>

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
			<div class="col-md-7 map animated slide-right">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d609.6872494665782!2d21.09676497971482!3d52.320556998037894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecf1ab5922063%3A0x5c9025fa6d7e41ac!2sKo%C5%9Bciuszki%2023C%2C%2005-260%20Marki!5e0!3m2!1sen!2spl!4v1590420158394!5m2!1sen!2spl" width="100%" height="370" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>