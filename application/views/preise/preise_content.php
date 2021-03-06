<div class="card-group">
    <div class="card shadow-sm text-white bg-info mb-3" style="width: auto;">
        <h4 class="card-header text-uppercase"><i class="fas fa-users"></i> All you can tag</h4>
        <div class="card-body">
            <p class="card-text text-justify">
                <strong>Jeden verdammten Donnerstag könnt Ihr zum Flatpreis von 16:00 – 22:00 Uhr so oft spielen, wie
                    Ihr wollt.</strong><br><br>
                PRO PERSON 29,00 €<br><br>
                Maximal können 40 Personen spielen. Hierbei würde eine Aufteilung in 2 Gruppen mit je 20 Personen
                erfolgen.<br>
                <small>Ihr würdet somit jeweils 1 Spiel (15min) im Wechsel mit der 2. Gruppe spielen.</small>
            </p>
        </div>
        <div class="card-footer d-flex flex-column">
        <a class="btn btn-lg btn-block btn-primary" href="tel:+4937133423340"><i class="fas fa-phone"></i> telefonisch buchen</a>
        <a class="btn btn-lg btn-block btn-primary disabled" href="<?= base_url('buchung/allyoucantag'); ?>"><i class="far fa-calendar-plus"></i> online buchen</a>
        </div>
    </div>
    <div class="card shadow-sm text-white bg-success mb-3" style="width: auto;">
        <h4 class="card-header text-uppercase"><i class="fas fa-user"></i> Einzelspieler</h4>
        <div class="card-body">
            <div class="card-text text-justify d-flex flex-column">
                <table class="table table-sm text-white">
                    <tbody>
                    </tbody>
                    <thead>
                        <tr>
                            <th><i class="fas fa-ticket-alt"></i> Einzelspiel</th>
                            <th><i class="fas fa-coins"></i> Preis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>STANDARD</td>
                            <td>9,00 €</td>
                        </tr>
                        <tr>
                            <td>ERMÄßIGT*</td>
                            <td>8,00 €</td>
                        </tr>
                        <tr>
                            <td>KIDSCARD**</td>
                            <td>7,00 €</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th><i class="fas fa-ticket-alt"></i> 5er Ticket</th>
                            <th><i class="fas fa-coins"></i> Preis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>STANDARD</td>
                            <td>38,00 €</td>
                        </tr>
                        <tr>
                            <td>ERMÄßIGT*</td>
                            <td>34,00 €</td>
                        </tr>
                        <tr>
                            <td>KIDSCARD**</td>
                            <td>30,00 €</td>
                        </tr>
                    </tbody>
                </table>
                <small class="badge badge-success shadow-sm mt-auto">5er Ticket Preise gelten pro Person</small>
            </div>
        </div>
        <div class="card-footer d-flex flex-column">
        <a class="btn btn-lg btn-block btn-primary" href="tel:+4937133423340"><i class="fas fa-phone"></i> telefonisch buchen</a>
        <a class="btn btn-lg btn-block btn-primary" href="<?= base_url('buchung'); ?>"><i class="far fa-calendar-plus"></i> online buchen</a>
        </div>
    </div>
    <div class="card shadow-sm text-white bg-danger mb-3" style="width: auto;">
        <h4 class="card-header text-uppercase"><i class="fas fa-user-friends"></i> Gruppen</h4>
        <div class="card-body">
            <div class="card-text text-justify d-flex flex-column">
                <table class="table table-sm text-white">
                    <tbody>
                    </tbody>
                    <thead>
                        <tr>
                            <th><i class="fas fa-ticket-alt"></i> Einzelspiel</th>
                            <th><i class="fas fa-coins"></i> Preis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>STANDARD</td>
                            <td>8,50 €</td>
                        </tr>
                        <tr>
                            <td>ERMÄßIGT*</td>
                            <td>7,50 €</td>
                        </tr>
                        <tr>
                            <td>KIDSCARD**</td>
                            <td>6,50 €</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th><i class="fas fa-ticket-alt"></i> 5er Ticket</th>
                            <th><i class="fas fa-coins"></i> Preis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>STANDARD</td>
                            <td>36,00 €</td>
                        </tr>
                        <tr>
                            <td>ERMÄßIGT*</td>
                            <td>32,00 €</td>
                        </tr>
                        <tr>
                            <td>KIDSCARD**</td>
                            <td>28,00 €</td>
                        </tr>
                    </tbody>
                </table>
                <small class="badge badge-danger shadow-sm mt-auto">5er Ticket Preise gelten pro Person</small>
            </div>
        </div>
        <div class="card-footer d-flex flex-column">
        <a class="btn btn-lg btn-block btn-primary" href="tel:+4937133423340"><i class="fas fa-phone"></i> telefonisch buchen</a>
        <a class="btn btn-lg btn-block btn-primary" href="<?= base_url('buchung'); ?>"><i class="far fa-calendar-plus"></i> online buchen</a>
        </div>
    </div>
</div>
<div class="text-muted">
<small>* Ermäßigt sind Schüler, Studenten, AZUBIs, Schwerbehinderte und Rentner.</small><br>
<small>** Kidscard ist bis zum vollendeten 15. Lebensjahr gültig.</small>
</div>