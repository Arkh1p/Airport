<main>
    <div class="main-content">
        <div class="main-container1">
            <div class="main-buttons">
                <a class="arrive-button" href="timetable.php">
                    <img src="assets/temp/img/arrival.svg">
                </a>
                <a class="arrive-button" href="timetable2.php">
                    <img src="assets/temp/img/departure.svg">
                </a>
            </div>
        </div>
        <div class="main-container2">
            <a href="news.php">
                <h2>Новости</h2>
            </a>
            <div class="main-news">
                <?php foreach($per3["items"] as $per4):?>
                    <?php include("assets/temp/components/news-card.php")?>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</main>