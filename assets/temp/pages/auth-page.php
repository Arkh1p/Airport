<main>
    <div class="main-content">
        <?php include("assets/temp/components/headline.php") ?>
        <div class="auth-container">
            <div class="auth">
				<p>Авторизация</p>
				<form method="POST">
					<input type="hidden" name="hide" value="autharisation">
   					<input type="text" placeholder="Логин" name="login"><br>
   					<input type="password" placeholder="Пароль" name="password"><br>
   					<input type="submit" name="submit1" value="Войти">
  				</form>
			</div>
			<hr>
			<div class="registration">
				<p>Регистрация</p>
				<form method="POST">
					<input type="hidden" name="hide" value="regustration">
   					<input type="text" name="name" placeholder="ФИО"><br>
                    <input type="text" name="login" placeholder="Логин"><br>
   					<input type="email" name="email2" placeholder="Электронная почта"><br>
   					<input type="password" name="password2" placeholder="Пароль"><br>
   					<input type="password" name="repeat_password" placeholder="Повторить пароль"><br>
   					<input type="submit" name="submit2" value="Зарегистрироваться">
  				</form>
			</div>
        </div>
    </div>
</main>