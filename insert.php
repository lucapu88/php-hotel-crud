<?php
//pagina dei dettagli di creazione nuova stanza

include 'functions.php';
if( //se i dati passati in post non sono vuoti e se la funzione di controllo restituisce true
    !empty($_POST) && controlla_dati_stanza($_POST['numero_stanza'], $_POST['piano'], intval($_POST['letti']))
) {
    // recuperare i dati della stanza da salvare
    $numero_stanza = intval($_POST['numero_stanza']);
    $piano = intval($_POST['piano']);
    $letti = intval($_POST['letti']);
    // salvare la stanza nel db
    $sql = "INSERT INTO stanze (room_number, floor, beds, created_at, updated_at) VALUES ($numero_stanza, $piano, $letti, NOW(), NOW())"; //query di inserimento nuova stanza con i relativi dettagli
    $result = esegui_query($sql); //esegue la query e la salva in result
} else {
    $result = false;
}
// apertura tag html, head e body + inclusione navbar
include 'layout/head.php';
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Creazione stanza</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a id="torna-in-home" class="btn btn-success" href="rooms.php">
                    Torna in stanze
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <?php

                if ($result) {
                    ?>
                    <h2>Stanza creata con successo!</h2>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Dettagli stanza</h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>Numero stanza: <?php echo $numero_stanza; ?></li>
                                <li>Piano: <?php echo
                                $piano; ?></li>
                                <li>Numero letti: <?php echo $letti; ?></li>
                            </ul>
                        </div>
                    </div>
                    <?php
                } else {
                    ?>
                    <p>Si è verificato un errore</p>
                    <?php
                }
                ?>
            </div>
        </div>
