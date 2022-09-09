<main>
    <div class="main-content">
        <?php include("assets/temp/components/headline.php") ?>
        <div class="news-container">
            <?php foreach($per3["items"] as $per4):?>
                <?php include("assets/temp/components/card2.php")?>
            <?php endforeach;?>
        </div>
    </div>
</main>