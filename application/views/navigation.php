
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <a class="navbar-brand" href="<?= base_url(); ?>" style="font-size:0.95em">
            <img src="<?= base_url('assets/logo.png'); ?>" width="34" height="34" class="d-inline-block align-bottom" alt="Lasergame / Lasertag Chemnitz">
            Lasergame Chemnitz
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('oeffnungszeiten'); ?>">Öffnungszeiten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('preise'); ?>">Preise</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle disabled" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Angebote</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= base_url('angebote'); ?>">Übersicht</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item disabled" href="<?= base_url('angebote/allyoucantag'); ?>">All You Can Tag</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('angebote/kindergeburtstag'); ?>">Kindergeburtstag</a>
                        <a class="dropdown-item disabled" href="<?= base_url('angebote/junggesellenabschied'); ?>">Junggesellenabschied</a>
                        <a class="dropdown-item" href="<?= base_url('angebote/partyraeume'); ?>">Partyräume</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Spielmodi</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= base_url('spielmodi'); ?>">Übersicht</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('spielmodi/solo'); ?>">Solo</a>
                        <a class="dropdown-item" href="<?= base_url('spielmodi/dark'); ?>">Dark</a>
                        <a class="dropdown-item" href="<?= base_url('spielmodi/team'); ?>">Team</a>
                        <a class="dropdown-item" href="<?= base_url('spielmodi/teamswitch'); ?>">Teamswitch</a>
                        <a class="dropdown-item" href="<?= base_url('spielmodi/zombie'); ?>">Zombie</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('spielmodi/lastmanstanding'); ?>">Last Man Standing</a> 
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle disabled" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Hausliga</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= base_url('hausliga'); ?>">Informationen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('hausliga/teams'); ?>">Teams</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disable" href="<?= base_url('buchung'); ?>">Jetzt buchen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://shop.spielcenter-chemnitz.de/index.php?id_category=12&controller=category" target="_blank">Gutscheine</a>
                </li>
            </ul>
        </div>
        <?= $x_promotion ?>
    </nav>