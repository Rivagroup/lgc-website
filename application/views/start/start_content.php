<a href ="https://spielcenter-chemnitz.de/silvester/" target="_blank"><img src="<?=base_url("assets/header/slider_silvester2020.png")?>" alt="Silvester 2020/21" class="img-fluid"></a>

<div class="card shadow-sm text-white bg-danger my-3" style="width: auto;">
    <img src="<?= base_url('assets/header/Corona.jpg'); ?>" class="card-img-top" alt="China-Virus">
    <div class="card-body">
    <h4 class="card-title text-uppercase"><i class="fas fa-viruses"></i> COVID-19 INFORMATIONEN</h4>
        <div class="card-text text-justify text-white">           
        <?php
            $url = 'https://spielcenter-chemnitz.de/corona.html';
            $content = file_get_contents($url);

            $doc = new DOMDocument();
            $doc->loadHtml($content);

            echo $content;
        ?>
        </div>
    </div>
    <div class="card-footer d-flex flex-column">
        <a href="<?=base_url("hygienekonzept")?>" class="btn btn-danger mt-auto"><i class="fas fa-shield-virus"></i> aktuelles Hygiene-Konzept</a>
    </div>
</div>

<div class="card shadow-sm text-white bg-info mb-3" style="width: auto;">
    <h4 class="card-header text-uppercase"><i class="fas fa-users"></i> All you can tag</h4>
    <div class="card-body">
        <p class="card-text text-justify">
            <strong>Jeden verdammten Donnerstag könnt Ihr zum Flatpreis von 16:00 – 22:00 Uhr so oft spielen, wie Ihr
                wollt.</strong><br><br> PRO PERSON 29,00 €<br><br> Maximal können 40 Personen spielen. Hierbei würde
            eine Aufteilung in 2 Gruppen mit je 20 Personen erfolgen.<br> <small>Ihr würdet somit jeweils 1 Spiel
                (15min) im Wechsel mit der 2. Gruppe spielen.</small>
        </p>
    </div>
    <div class="card-footer d-flex flex-column">
        <a href="<?=base_url("buchung/allyoucantag")?>" class="btn btn-info disabled mt-auto"><i class="fas fa-info-circle"></i> weitere Informationen</a>
        <a class="btn btn-lg btn-block btn-primary" href="tel:+4937133423340"><i class="fas fa-phone"></i> telefonisch buchen</a>
        <a class="btn btn-lg btn-block btn-primary disabled" href="<?= base_url('buchung/allyoucantag'); ?>"><i class="far fa-calendar-plus"></i> online buchen</a>
    </div>
</div>