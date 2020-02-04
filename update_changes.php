<?php

include 'functions.php';

if(
    !empty($_POST) && !empty($_POST['id_stanza']) && controlla_dati_stanza($_POST['numero_stanza'], $_POST['piano'], intval($_POST['letti']))
) {
    // recuperare i dati della stanza da salvare
    $numero_stanza = intval($_POST['numero_stanza']);
    $piano = intval($_POST['piano']);
    $letti = intval($_POST['letti']);
    $id_stanza = intval($_POST['id_stanza']);

    // salvare la stanza nel db

    $sql = "UPDATE stanze SET room_number = $numero_stanza, floor = $piano, beds = $letti, updated_at = NOW() WHERE id = $id_stanza ";
    $result = esegui_query($sql);
    // svuoto la post così se l'utente ricarica la pagina non creo 2 volte la stessa stanza

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
                <h1>Modifica stanza</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a id="torna-in-home" class="btn btn-success" href="index.php">
                    Torna in homepage
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <?php

                if ($result) {
                    ?>
                    <h2>Modifiche avvenute con successo!</h2>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Nuovi dettagli stanza</h3>
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
