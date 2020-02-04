<?php
include 'functions.php';
$sql = "DELETE FROM `stanze` WHERE `stanze`.`id` = " . $_GET['id_stanza'];
$result = esegui_query($sql);
include 'layout/head.php';
 ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <?php

                if ($result) {
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
