<main>
    <div class="main-content">
        <?php include("assets/temp/components/headline.php") ?>
        <div class="admin-panel-container">
            <h2>Запросы к базе данных:</h2><br><br>
            <p></p>
            <a href="admin-panel_requests.php?type=1">Получить список начальников отдела</a><br><br>
            <p></p>
            <a href="admin-panel_requests.php?type=3">Получить перечень работников в бригаде 1</a><br><br>
            <p></p>
            <a href="admin-panel_requests.php?type=5">Получить перечень пилотов, прошедших медосмотр</a><br><br>
            <p></p>
            <a href="admin-panel_requests.php?type=6">Получить перечень самолётов, приписанных к аэропорту, отсортированные по времени поступления в аэропорт</a><br><br>
            <p></p>
            <a href="admin-panel_requests.php?type=7">Получить перечень рейсов по длительности перелёта</a><br><br>
            <p></p>
            <a href="admin-panel_requests.php?type=8">Получить перечень отменённых рейсов</a><br><br>
            <p></p>
            <a href="admin-panel_requests.php?type=9">Получить перечень рейсов, по которым летают самолёты указанного типа</a><br><br>
            <p></p>
            <a href="admin-panel_requests.php?type=10">Получить перечень авиарейсов внутри страны</a><br><br>
            <p></p>
            <a></a><br><br>
            <form action="admin-panel_requests.php" method="GET">
                <input type="hidden" name="type" value="4">
                <h2>Информация о сотрудниках по возрасту</h2>
                <label><br><br>
                    Введите возраст:
                    <input type="text" placeholder="Введите число" name="age" required>
                </label>
                <label for="">
                    Показать сотрудников
                <select name="option" >
                    <option value="equals">этого возраста</option>
                    <option value="more">старше этого возраста</option>
                    <option value="less">младше этого возраста</option>
                </select>
                </label>
               <button type="summit">Показать</button>
            </form>

<!-- Select с динамическими данными для другой формы -->
                <?php //if($departments): ?>
                    <!-- <select name="department"> -->
                    <?php //foreach ($departments as $department): ?>
                        <!-- <option value="<?=$department["id"]?>"><?=$department["name"]?></option> -->
                    <?php //endforeach; ?>
                    <!-- </select> -->
                <?php //endif; ?>

            <!-- Шаблон формы -->
            <!-- <form action="admin-panel_requests.php" method="GET">
                <input type="hidden" name="type" value="номер">

                <input type="text" name="свойство1" required>
                name отвечает за ключ этого свойства в $_GET, то есть 
                если в admin-panel_requests.php внутри case используется 
                $data->свойство1 = $_GET["pizdets"];  то тут name = "pizdets"

                под каждое свойство в $_GET, указанное в case, должно быть создано или поле input, или select, или что--то ещё,
                 но оно короче обязательно должно тут заполняться и иметь name, соответствующий ключу из $_GET

                 Динамический select
                <?php //if($переменная): ?> $переменная берется из Airport\admin-panel.php
                    <select name="свойство2">  name отвечает за ключ этого свойства в $_GET
                    <?php //foreach ($переменная as $элемент): ?>
                        <option value="<?=$элемент["поле, в котором хранится значение, будет вместо маркера в запросе"]?>">
                            <?=$элемент["поле, в котором хранится наименование - будет выводиться пользователю как название элемента списка"]?>
                        </option>
                    <?php //endforeach; ?>
                    </select>
                <?php //endif; ?>

                 <select иногда может быть статическим - например для гендера - ты вряд ли добавишь новый пол в таблицу
                    <select name="gender">  name отвечает за ключ этого свойства в $_GET
                        <option value="man">мужской</option> 
                         value подставится в запрос 
                        <option value="woman">женский</option>
                    </select>

               <button type="summit">Показать</button>
            </form> -->
               
        </div>
    </div>
</main>