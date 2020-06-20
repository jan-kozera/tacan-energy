<?php /* Template name: Kalkulator */ ?>
<?php get_header(); ?>

<div id="fullpage" class="calculator">
	<form method="post" action="<?php echo THEME_URL; ?>js/calculator-form.php" name="calculatorform" id="calculatorform">
		<div class="section krok1">
			<div class="d-center align-items-center">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center align-self-center">
							<h2 class="title">Kalkulator <span class="yellow">fotowoltaiczny</span></h2>
							<h3 class="subtitle">Skorzystaj z naszego kalkulatora i oblicz ile możesz oszczędzić!</h3>
							<h4 class="ask">Ile płacisz za prąd?</h4>
							<div class="buttons">
								<input id="value" type="text" class="shadow" value="150" min="150" max="500" disabled>
								<span class="zl">zł</span>
								<span class="minus">-</span>
								<span class="plus">+</span>
							</div>
							<a class="yel-btn next" href="javascript:void(0)">Oblicz</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section krok2" style="display: none;">
			<div class="d-center align-items-center">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-12 text-center">
							<h2 class="title">Kalkulator <span class="yellow">fotowoltaiczny</span></h2>
						</div>
						<div class="col-lg-4 col-md-6 page-box text-center">
							<div class="border">
								<img src="<?php echo THEME_URL; ?>img/c1.png" alt="" class="img-fluid">
								<h3 class="maven">Twoja instalacja będzie miała moc:</h3>
								<input type="text" name="power" id="power" disabled value="3.74 kW">
							</div>
						</div>
						<div class="col-lg-4 col-md-6 page-box text-center">
							<div class="border">
								<img src="<?php echo THEME_URL; ?>img/c2.png" alt="" class="img-fluid">
								<h3 class="maven">Pozwoli Ci to na roczną produkcję energii elektrycznej o wartości około:</h3>
								<input type="text" id="energy" name="energy" disabled value="2 241 zł">
							</div>
						</div>
						<div class="col-lg-4 col-md-6 page-box text-center">
							<div class="border">
								<img src="<?php echo THEME_URL; ?>img/c3.png" alt="" class="img-fluid">
								<h3 class="maven">Podczas 25 letniego okresu gwarancji uzysku z paneli <b>zaoszczędzisz co najmniej:</b></h3>
								<input type="text" id="money" name="money" disabled value="42 586 zł">
								<div class="question">
									<span>?</span>
									<div class="more shadow">
										<p class="maven">Przyjmując 5% rocznego wzrostu cen prądu Twoje oszczędności po 25 latach wyniosą: </p>
										<input type="text" id="per" name="per" disabled value="91 728 zł">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 text-center">
							<a class="yel-btn next" href="javascript:void(0)">Dalej</a>
						</div>
						<div class="col-md-12 text-center">
							<a href="javascript:void(0);" class="prev maven">Wstecz</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section krok3" style="display: none;">
			<div class="d-center align-items-center">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2 class="title">Kalkulator <span class="yellow">fotowoltaiczny</span></h2>
							<p class="sub-p maven">Przy współpracy z nami średni zwrot z inwestycji wynosi <b>6 lat.</b></p>
							<p class="sub-p maven">W pakiecie otrzymujesz:</p>
						</div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-2 cali">
							<img class="img-fluid" src="<?php echo THEME_URL; ?>img/c4.png" alt="">
							<h3>Konsultacja i projekt</h3>
							<div class="question">
								<span>?</span>
								<div class="more shadow">
									<p class="maven"><strong>Konsultacja i Projekt</strong> - Podczas konsultacji nasz doradca energetyczny oceni wszystkie aspekty techniczne Twojej nieruchomosci. Majac komplet danych bedzimy mogli przygotowac oferte idealnie dopasowana do Twoich potrzeb.</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-2 cali">
							<img class="img-fluid" src="<?php echo THEME_URL; ?>img/c5.png" alt="">
							<h3>Montaż</h3>
							<div class="question">
								<span>?</span>
								<div class="more shadow">
									<p class="maven"><strong>Montaż -</strong> Nasi wykwalifikowani instalatorzy dokonaja montazu Twojej instalacji w dogodnym dla Ciebie terminie. Zrobia to szybko I solidnie, zachowujac szczelnosc dachu</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-2 cali">
							<img class="img-fluid" src="<?php echo THEME_URL; ?>img/c6.png" alt="">
							<h3>Gwarancja</h3>
							<div class="question">
								<span>?</span>
								<div class="more shadow">
									<p class="maven"><strong>Gwarancja -</strong> Współpracujemy z najlepszymi światowymi producentami. Montujemy podzespoły jedynie najwyższej jakości. Zarówno na sprzęt jak i montaż otrzymasz pisemne gwarancje. Dzięki nam Twoja inwestycja będzie bezpieczna i opłacalna.</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-2 cali">
							<img class="img-fluid" src="<?php echo THEME_URL; ?>img/c7.png" alt="">
							<h3>Monitoring</h3>
							<div class="question">
								<span>?</span>
								<div class="more shadow">
									<p class="maven"><strong>Monitorowanie -</strong> w każdej chwili będziesz mógł sprawdzić pracę swojej elektrowni.</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-2 cali">
							<img class="img-fluid" src="<?php echo THEME_URL; ?>img/c8.png" alt="">
							<h3>Ulgi i<br>dofinansowania</h3>
							<div class="question">
								<span>?</span>
								<div class="more shadow">
									<p class="maven"><strong>Ulgi i dofinansowania -</strong> nasz doradca energetyczny wskaże możliwości otrzymania dofinansowań oraz skorzystania z ulg aby zwrot z inwestycji był jeszcze szybszy.</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-2 cali">
							<img class="img-fluid" src="<?php echo THEME_URL; ?>img/c4.png" alt="">
							<h3>Finansowanie</h3>
							<div class="question">
								<span>?</span>
								<div class="more shadow">
									<p class="maven"><strong>Kredyty / Leasing -</strong> współpracujemy z instytucjami finansującymi. Pomożemy w otrzymaniu kredytu czy leasingu.</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 text-center">
							<a class="yel-btn next" href="javascript:void(0)">Dalej</a>
						</div>
						<div class="col-md-12 text-center">
							<a href="javascript:void(0);" class="prev maven">Wstecz</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section krok4" style="display: none;">
			<div class="d-center align-items-center">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-12 text-center">
							<h2 class="title">Kalkulator <span class="yellow">fotowoltaiczny</span></h2>
							<p class="sub-p maven">Wypełnij poniższy formularz aby uzyskać idealnie dopasowaną ofertę <br>oraz oszczędzić <span id="hajs">42 586 zł 
								<div class="question">
									<span>?</span>
									<div class="more shadow">
										<p class="maven">Przyjmując 5% rocznego wzrostu cen prądu Twoje oszczędności po 25 latach wyniosą: </p>
										<span id="per1">91 728 zł</span>
									</div>
								</div>
								</span></p>
						</div>
						<div class="col-lg-5 form">
							<div id="message"></div>
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
							<div class="col-md-12 text-center">
								<a href="javascript:void(0);" class="prev maven">Wstecz</a>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<div id="fp-nav" class="right" style="margin-top: -251px;">
	<ul>
		<li><a data-ref="krok1" href="javascript:void(0);" class="active"><span></span></a></li>
		<li><a data-ref="krok2" href="javascript:void(0);"><span></span></a></li>
		<li><a data-ref="krok3" href="javascript:void(0);"><span></span></a></li>
		<li><a data-ref="krok4" href="javascript:void(0);"><span></span></a></li>
		<li><a data-ref="" href="javascript:void(0);"><span></span></a></li>
	</ul>
</div>
<?php get_footer(); ?>