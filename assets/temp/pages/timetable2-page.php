<main>
    <div class="main-content">
        <div class="headline">
            <div class="bg">
                <div class="bg-timetable">
                    <h2><?php echo $headline ?></h2>
                    <div class="timetable-switches">
                        <div class="timetable-switch3">
                        <a href="timetable.php">Вылет</a>
                        </div>
                        <div class="timetable-switch4">
                            <p>Прилёт</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="timetable-container">
            <div class="timetable-table">
                <div class="timetable-head">
                    <span class="timetable-head-title1">Время</span>
                    <span class="timetable-head-title2">№ Рейса</span>
                    <span class="timetable-head-title3">Авиакомания</span>
                    <span class="timetable-head-title4">Направление</span>
                    <span class="timetable-head-title5">Статус</span>
                </div>
                <div class="timetable-body">
                    <?php foreach($per3["items"] as $per4):?>
                        <?php include("assets/temp/components/timetable-body-row.php")?>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</main>