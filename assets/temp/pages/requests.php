<main>
    <div class="main-content">
        <?php include("assets/temp/components/headline.php") ?>
        <div class="admin-panel-container">
            <?php if($result && $type == 1): ?>
            <ul>
                <?php foreach ($result as $worker): ?>
                <li> Имя: <?= $worker["Имя"]?> </li>
                <li> Код сотрудника: <?=$worker["Код сотрудника"]?> </li>
                <li> Телефон: <?=$worker["Телефон"]?> </li>
                <li> Код должности: <?=$worker["Код должности"]?> </li>
                <li> Должность: <?=$worker["Должность"]?> </li>
                <li> Дата приема на работу: <?=$worker["Дата приема на работу"]?> </li>
                <li> Дата рождения: <?=$worker["Дата рождения"]?> </li>
                <li> Количество детей: <?=$worker["Количество детей"]?> </li>
                <li> Зарплата: <?=$worker["Зарплата"]?> </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>

            <?php if($result && $type == 2): ?>
            <ul>
                <?php foreach ($result as $department): ?>
                <li> Имя: <?= $department["id_employee"]?> </li>
                <li> Код сотрудника: <?=$derpartment["full_name"]?> </li>
                <li> Телефон: <?=$derpartment["phone"]?> </li>
                <li> Код должности: <?=$derpartment["id_department"]?> </li>
                <li> Должность: <?=$derpartment["id_brigade"]?> </li>
                <li> Дата приема на работу: <?=$derpartment["salary"]?> </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            
            <?php if($result && $type == 3): ?>
            <ul>
                <?php foreach ($result as $brigade): ?>
                <li> Код сотрудника: <?= $brigade["id_employee"]?> </li>
                <li> Паспорт: <?=$brigade["passport"]?> </li>
                <li> Телефон: <?=$brigade["phone"]?> </li>
                <li> Заработная плата: <?=$brigade["salary"]?> </li>
                <li> Код должности: <?=$brigade["id_position"]?> </li>
                <li> Код бригады: <?=$brigade["id_brigade"]?> </li>
                <li> Код отдела: <?=$brigade["id_department"]?> </li>
                <li> Дата рождения: <?=$brigade["date_of_birth"]?> </li>
                <li> Кол-во детей:  <?=$brigade["children_count"]?> </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>

            <?php if($result && $type == 4): ?>
            <ul>
                <?php foreach ($result as $employee): ?>
                <li> Имя: <?= $employee["id_employee"]?> </li>
                <!-- То, как мы обращаемся к полю - например тут "id_employee" зависит от того, что было определено в api слева (например, если там
                "pizdez" => $table["id_employee"], то тепеть в верстке мы обращаемся $employee["pizdez"]) -->
                <li> Код сотрудника: <?=$employee["full_name"]?> </li>
                <li> Телефон: <?=$employee["phone"]?> </li>
                <li> Дата приема на работу: <?=$employee["salary"]?> </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>

            <?php if($result && $type == 5): ?>
            <ul>
                <?php foreach ($result as $med_exam): ?>
                <li> Код сотрудника: <?= $med_exam["id_employee"]?> </li>
                <li> Имя сотрудника: <?= $med_exam["full_name"]?> </li>
                <li> Пол сотрудника: <?= $med_exam["gender"]?> </li>
                <li> Паспорт: <?=$med_exam["passport"]?> </li>
                <li> Телефон: <?=$med_exam["phone"]?> </li>
                <li> Заработная плата: <?=$med_exam["salary"]?> </li>
                <li> Код должности: <?=$med_exam["id_position"]?> </li>
                <li> Дата рождения: <?=$med_exam["date_of_birth"]?> </li>
                <li> Мед книжка: <?=$med_exam["medical_book"]?> </li>
                <li> Реультат медосмотра: <?=$med_exam["result"]?> </li>
                <li> Дата медосмотра: <?=$med_exam["date"]?> </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>

            <?php if($result && $type == 6): ?>
            <ul>
                <?php foreach ($result as $airplanes): ?>
                <li> Код самолёта: <?= $airplanes["id_airplane"]?> </li>
                <li> Дата покупки: <?= $airplanes["purchase_date"]?> </li>
                <li> Высота полёта: <?= $airplanes["flight_altitude"]?> </li>
                <li> Скорость полёта: <?=$airplanes["flight_speed"]?> </li>
                <li> Вместимость: <?=$airplanes["number_of_seats"]?> </li>
                <li> Код модели самолёта: <?=$airplanes["id_airplane_model"]?> </li>
                <li> Код типа самолёта: <?=$airplanes["id_airplane_type"]?> </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>

            <?php if($result && $type == 7): ?>
            <ul>
                <?php foreach ($result as $flights): ?>
                <li> Код рейса: <?= $flights["id_flight"]?> </li>
                <li> Дата вылета: <?= $flights["departure_date"]?> </li>
                <li> Время перелёта: <?= $flights["travel_time"]?> </li>
                <li> Код категории рейса: <?=$flights["id_flight_category"]?> </li>
                <li> Код самолёта: <?=$flights["id_airplane"]?> </li>
                <li> Код маршрута: <?=$flights["id_route"]?> </li>
                <li> Код задержки рейса: <?=$flights["id_flight_delay"]?> </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>

            <?php if($result && $type == 8): ?>
            <ul>
                <?php foreach ($result as $cancelled_flights): ?>
                <li> Код отмены рейса: <?= $cancelled_flights["id_flight_cancellation"]?> </li>
                <li> Статус: <?= $cancelled_flights["status"]?> </li>
                <li> Код рейса: <?= $cancelled_flights["id_flight"]?> </li>
                <li> Код самолёта: <?=$cancelled_flights["id_airplane"]?> </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>

            <?php if($result && $type == 9): ?>
            <ul>
                <?php foreach ($result as $flights_by_type_of_plane): ?>
                <li> Код рейса: <?= $flights_by_type_of_plane["id_flight"]?> </li>
                <li> Время перелёта: <?= $flights_by_type_of_plane["travel_time"]?> </li>
                <li> Время вылета: <?= $flights_by_type_of_plane["departure_time"]?> </li>
                <li> Код категории рейса: <?=$flights_by_type_of_plane["id_flight_category"]?> </li>
                <li> Код самолёта: <?=$flights_by_type_of_plane["id_airplane"]?> </li>
                <li> Код маршрута: <?=$flights_by_type_of_plane["id_route"]?> </li>
                <li> Код типа самолёта: <?=$flights_by_type_of_plane["id_airplane_type"]?> </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>

            <?php if($result && $type == 10): ?>
            <ul>
                <?php foreach ($result as $domestic_flights): ?>
                <li> Код рейса: <?= $domestic_flights["id_flight"]?> </li>
                <li> Время перелёта: <?= $domestic_flights["travel_time"]?> </li>
                <li> Время вылета: <?= $domestic_flights["departure_time"]?> </li>
                <li> Код категории рейса: <?=$domestic_flights["id_flight_category"]?> </li>
                <li> Код самолёта: <?=$domestic_flights["id_airplane"]?> </li>
                <li> Код маршрута: <?=$domestic_flights["id_route"]?> </li>
                <li> Код типа самолёта: <?=$domestic_flights["id_airplane_type"]?> </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>

            <?php if($result == false): ?>
                <p>Ничего не найдено</p>
            <?php endif; ?>
        </div>
    </div>
</main>