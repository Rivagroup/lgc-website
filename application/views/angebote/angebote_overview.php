<div class="container">
    <section>
        <h4>Angebote</h4>
        <div class="card-deck mb-3">

            <div class="card">
                <img class="card-img-top" src="<?= base_url('assets/header/kindergeburtstag.png'); ?>" alt="Kindergeburtstag" />
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-birthday-cake"></i> Kindergeburtstag</h5>
                    <div class="card-text">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-info text-center"><a class="btn btn-sm btn-block btn-info" href="<?= base_url('kindergeburtstag/basic'); ?>"><i class="fas fa-birthday-cake"></i> <b>Basic</b> ab 100 €</a></li>
                            <li class="list-group-item list-group-item-warning text-center"><a class="btn btn-sm btn-block btn-warning" href="<?= base_url('kindergeburtstag/maxi'); ?>"><i class="fas fa-birthday-cake"></i> <b>Maxi</b> ab 125 €</a></li>
                            <li class="list-group-item list-group-item-success text-center"><a class="btn btn-sm btn-block btn-success" href="<?= base_url('kindergeburtstag/xxl'); ?>"><i class="fas fa-birthday-cake"></i> <b>XXL</b> ab 140 €</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-block btn-primary" href="<?= base_url('kindergeburtstag'); ?>">
                        <i class="fas fa-info"></i> weitere Informationen
                    </a>
                    <a class="btn btn-lg btn-block btn-primary" href="tel:+4937133423340"><i class="fas fa-phone"></i> telefonisch buchen</a>
                    <a href="https://spielcenter-chemnitz.de/kombi/#lasertag" target="_blank" class="btn btn-lg btn-block btn-danger" role="button"><i class="fas fa-plus-square"></i> Kombi Pakete</a>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="<?= base_url('assets/header/ayct.jpg'); ?>" alt="All You Can Tag" />
                <div class="card-body">
                    <h5 class="card-title">All You Can Tag</h5>
                    <div class="card-text">
                    <strong>Jeden verdammten Donnerstag könnt Ihr zum Flatpreis von 16:00 – 22:00 Uhr so oft spielen, wie Ihr
                wollt.</strong><br><br> PRO PERSON 29,00 €<br><br> Maximal können 40 Personen spielen. Hierbei würde
            eine Aufteilung in 2 Gruppen mit je 20 Personen erfolgen.<br> <small>Ihr würdet somit jeweils 1 Spiel
                (15min) im Wechsel mit der 2. Gruppe spielen.</small>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-block btn-primary" href="<?= base_url('angebote/allyoucantag'); ?>"><i class="fas fa-info"></i> weitere
                        Informationen</a>
                    <a class="btn btn-lg btn-block btn-primary" href="tel:+4937133423340"><i class="fas fa-phone"></i> telefonisch buchen</a>
                    <a class="btn btn-lg btn-block btn-primary disabled" href="<?= base_url('buchung/ayct'); ?>"><i class="far fa-calendar-plus"></i> online buchen</a>
                </div>
            </div>

        </div>

        <div class="card mb-3">
            <img class="card-img-top" src="<?= base_url('assets/header/partyraeume.jpg'); ?>" alt="Partyräume" />
            <div class="card-body">
                <h5 class="card-title">Partyräume</h5>
                <div class="card-text">
                    Für Firmenveranstaltungen, Familienfeiern, Geburtstage etc. haben wir die
                    passenden Räumlichkeiten. Zusammen mit der Dekoration, Speisen und Getränken machen wir Ihre
                    Feier zum unvergesslichen Ereignis.
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-block btn-primary" href="<?= base_url('angebote/partyraeume'); ?>"><i class="fas fa-info"></i> weitere
                    Informationen</a>
            </div>
        </div>
    </section>
</div>