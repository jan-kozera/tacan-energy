<?php /* Template name: Dla domu */ ?>
<?php get_header(); ?>

<section id="house" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="title">Dotacje <span class="yellow">dla domu</span></h2>
			</div>
			<div class="col-md-6 hless shadow text-center align-items-center btl bbl animated slide-left">
				<h3>5000 zł <br><span class="yellow">dopłaty do fotowoltaiki</span></h3>
				<p class="maven">Możesz otrzymać dofinansowanie z programu "Mój prąd" przyznawanego przez NFOŚiGW. Wystarczy że Twoja instalacja będzie miałą moc od 2 kW do 10 kW. <strong>Uzyskasz zwrot do 50% kosztów kwalifikowanych instalacji fotowoltaicznej, max 5000 zł.</strong> Nie ma znaczenia czy twoja min i-elektrownia będzie zamontowana na dachu czy gruncie. Pamiętaj że pula środków jest ograniczona i liczy się kolejność złożonych wniosków. Nasz doradca pomoże w złożeniu wniosku.</p>
			</div>
			<div class="col-md-6 hmore shadow btr bbr animated slide-right">
				<img src="<?php echo THEME_URL; ?>img/h1.jpg" alt="" class="img-fluid btr bbr">
			</div>
			<div class="col-md-6 hmore shadow btl bbl animated slide-left hidden-small">
				<img src="<?php echo THEME_URL; ?>img/h2.jpg" alt="" class="img-fluid btl bbl">
			</div>
			<div class="col-md-6 hless shadow text-center align-items-center btr bbr animated slide-right">
				<h3>Ulga <br><span class="yellow">Termomodernizacyjna</span></h3>
				<p class="maven">Podatnikowi, który jest właścicielem lub współwłaścicielem domu jednorodzinnego przysługuje możliwość skorzystania z ulgi termomodernizacyjnej. <strong>Kwota odliczenia nie może przekroczyć 53 tys. zł.</strong> Odliczenia możesz dokonać przez kolejne lata, nie dłużej jednak niż przez 6 lat. Z ulgi termomodernizacyjnej mogą skorzystać także osoby, które wcześniej wzięły na instalacje fotowoltaiczną dopłatę z programu "Mój prąd".</p>
			</div>
			<div class="col-md-6 hmore shadow btl bbl animated slide-left hidden-big">
				<img src="<?php echo THEME_URL; ?>img/h2.jpg" alt="" class="img-fluid btl bbl">
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
			<div class="col-lg-9">
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