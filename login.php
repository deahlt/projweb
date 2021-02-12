<?php 
    include 'header.php';
?>
<link rel="stylesheet" href="css/login.css">

<!--MAIN-->

<section class="mainSection">
	<div class="mainContainer">
		<div class="user signinBox">
			<!--IMAGE BOX-->
			<div class="imageBox">
				<img src="./img/signinImg.jpg" alt="Dog" />
			</div>
			<!--IMAGE BOX END-->
			<!--FORM BOX-->
			<div class="formBox">
				<!--SIGN IN-->
				<form id="form1" method="post">
					<h2>Kyçu</h2>
					<label style="color: rgb(242, 210, 141)"><b>Emri i përdoruesit:</b></label>
					<input id="username-si" type="text" name="Username" placeholder="Shkruani username tuaj" required />
					<p id="warning-name-error">Username është gabim.</p>
					<label style="color: rgb(242, 210, 141)"><b>Fjalëkalimi:</b></label>
					<input id="password-si" type="password" name="Password" placeholder="Shkruani fjalëkalimin tuaj"
						required />
					<p id="warning-error">Fjalëkalimi është gabim.</p>
					<input id="submit-si" type="button" name="Submit" value="Kyçu" />

					<p class="signupQuestion">
						Nuk keni llogari?
						<a href="#" onclick="toggleForm();">Regjistrohu!</a>
					</p>
				</form>
				<!--SIGN IN END-->
			</div>
			<!--FORM BOX END-->
		</div>

		<div class="user signupBox">
			<!--FORM BOX-->
			<div class="formBox">
				<!--SIGN UP-->
				<form id="form2">
					<h2>Regjistrohuni</h2>
					<label style="color: rgb(242, 210, 141)"><b>Emri i përdoruesit:</b></label>
					<input id="username-su" type="text" name="Username" placeholder="Krijoni një username" required />
					<p id="warning-name-short">
						Username është shumë i shkurtë.
					</p>
					<p id="warning-name-long">Username është shumë i gjatë.</p>
					<label style="color: rgb(242, 210, 141)"><b>Email:</b></label>
					<input id="email-su" type="email" name="Email" placeholder="Shkruani emailin tuaj" required />
					<p id="warning-email">Shkruani një email valid.</p>
					<label style="color: rgb(242, 210, 141)"><b>Fjalëkalimi:</b></label>
					<input id="password-su" type="password" name="Password" placeholder="Krijoni një fjalëkalim"
						required />
					<p id="warning-length">Fjalëkalimi është shumë i shkurtë.</p>
					<p id="warning-confirm">
						Fjalëkalimet nuk përputhen.
					</p>
					<label style="color: rgb(242, 210, 141)"><b>Konfirmo fjalëkalimin:</b></label>
					<input id="password2-su" type="password" name="Password" placeholder="Konfirmo fjalëkalimin"
						required />
					<input id="submit-su" type="button" name="register_user" value="Regjistrohu" />
					<p class="signupQuestion">
						Keni një llogari ekzistuese?
						<a href="#" onclick="toggleForm();">Kyçu!</a>
					</p>
				</form>
				<!--SIGN UP END-->
			</div>
			<!--FORM BOX END-->

			<!--IMAGE BOX-->
			<div class="imageBox">
				<img src="./img/signupImg.jpg" alt="Cat" />
			</div>
			<!--IMAGE BOX END-->
		</div>
	</div>
</section>
<script src="js/login.js"></script>

<?php 
    include 'footer.php';
?>