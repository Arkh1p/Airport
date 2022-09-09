<main>
    <div class="main-content">
        <?php include("assets/temp/components/headline.php") ?>
        <div class="personal-account-nav">
            <div class="personal-account-nav-list">
                <span>Изменить информацию в профиле</span>
                <a href="personal-account2.php">Сменить пароль</a>
                <a <?php if ($_SESSION["admin-lvl"]=="2"): ?>href="admin-panel.php"<?php endif; ?>>Панель администратора</a>
            </div>
        </div>
        <div class="personal-account1-container">
            <div class="personal-account-column1">
                <h4>Основная информация</h4>
                <form>
                    <input type="text" placeholder="Имя" name="first-name"><br>
                    <input type="text" placeholder="Фамилия" name="second-name"><br>
                    <input type="text" placeholder="Отчество" name="mid-name"><br>
                    <input type="date" placeholder="Дата рождения" name="birth-date"><br>
                    <input type="number" placeholder="Номер телефона" name="phone-num"><br>
                    <input type="email" placeholder="Email" name="email3"><br>
                    <input type="submit" name="submit3" value="Сохранить">
                </form>
            </div>
            <div class="personal-account-column2">
                <h4>Пол</h4>
                <div class="radio">
                    <input type="radio" name="radio1"><span> Мужской</span>
                </div>
                <div class="radio2"">
                    <input type="radio" name="radio2"><span> Женский</span>
                </div>
                <div class="theme-button" id="theme-button">Включить тёмную тему</div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="assets/temp/scripts/themes.js"></script>
</main>