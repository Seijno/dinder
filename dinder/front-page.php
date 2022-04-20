<?php session_start();
include "header.php"; ?>
    <div class="py-5"></div>
    <session id="groet">
        <div class="container">
            <h3>welkom <?php getUsername(); ?>!</h3>
            <div class="row justify-content-between">
                <div class="col-4"><img class="img-fluid" src="./img/dinderfoto.jpg"></div>
                <div id="introductie" class="col-4 text-center"><h3>Hey 
                <?php getUsername(); ?>!</h3>
                <p>Dit is Dinder, wij werken bijna hetzelfde als tinder.<br>
                zodra je een account hier hebt krijg je volledige toegang tot het swipen en kunnen jullie elkaars baasje ontmoeten!<br><br>
                <h4>Succes met Dinderen!</h4>
                                                                                
                </p></div>
            </div>
        </div>
    </session>
    <div class="py-5"></div>
    <session>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10" id="instructie">
                    <h4 class="text-center">hoe werkt het?</h4>
                    <p>Dinder werkt net zoals een dating app zoals tinder. Zodra je bent ingelogd klik je op "Swipen" en ga je beginnen met swipen. heb je nog geen account?
                         Meld je dan <a href="aanmeld.php">hier</a> aan of klik op Aanmelden/Accountbeheer. zoek je nog andere informatie? kijk dan onderin van de pagina!
                    </p>
                </div>
            </div>
        </div>
    </session>
    <div class="py-5"></div>
    <session id="dashboard">
        <div class="container">
            <div class="row justify-content-evenly">
                <div id="dashboard" class="col-4 text-center"><h3>Aantal users</h3><h2><?php getUsers(); ?></h2></div>
                <div id="dashboard" class="col-4 text-center"><h3>Aantal matches</h3>...</div>
            </div>
        </div>
    </session>
    <div class="py-4"></div>
<?php include 'footer.php'; ?>