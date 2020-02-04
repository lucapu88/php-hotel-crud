<?php
//pagina conferma eliminazione
include 'functions.php';
$sql = "DELETE FROM `stanze` WHERE `stanze`.`id` = " . $_GET['id_stanza']; //query per l'eliminazione di una stanza con l'id passato in get
$result = esegui_query($sql); //esegui la query di sopra
include 'layout/head.php';
 ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <?php
                if ($result) { //se result è true, elimina la stanza
                    ?>
                    <h1>Eliminazione avvenuta con successo!</h1>
                    <a id="torna-in-home" class="btn btn-success" href="index.php">
                        Torna in homepage
                    </a>
                    <?php
                } else {
                    ?>
                    <p>Si è verificato un errore</p>
                    <?php
                }
                ?>
            </div>
        </div>
