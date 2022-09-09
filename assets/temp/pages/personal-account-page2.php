<main>
    <div class="main-content">
        <?php include("assets/temp/components/headline.php") ?>
        <div class="personal-account-nav">
            <div class="personal-account-nav-list">
                <a href="personal-account1.php">Изменить информацию в профиле</a>
                <span>Сменить пароль</span>
                <a <?php if ($_SESSION["admin-lvl"]=="2"): ?>href="admin-panel.php"<?php endif; ?>>Панель администратора</a>
            </div>
        </div>
        <div class="personal-account1-container">
            <div class="personal-account-column1">
                <h4>Изменение пароля</h4>
                <form>
                    <input type="text" placeholder="Имя" name="first-name"><br>
                    <input type="text" placeholder="Фамилия" name="second-name"><br>
                    <input type="text" placeholder="Отчество" name="mid-name"><br>
                    <input type="submit" name="submit3" value="Сохранить">
                </form>
            </div>
        </div>
    </div>
</main>