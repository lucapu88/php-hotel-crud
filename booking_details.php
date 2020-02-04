<?php
// Pagina dettaglio stanza
include 'functions.php';

$sql = "SELECT * FROM `prenotazioni` WHERE stanza_id = " . $_GET['id_stanza']; //seleziona tutte le prenotazioni prendendo l'id della stanza in get
// $sql2 = "SELECT * FROM `db_hotel`.`stanze` WHERE `id`" = . $_GET['id_stanza'];
// $result2 = esegui_query($sql2);
$result = esegui_query($sql);
// visualizzo i dettagli della stanza
include 'layout/head.php';
?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Dettaglio prenotazioni</h1>
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
                    if ($result && $result->num_rows > 0) {
                        // output data of each row
                      while($row = $result->fetch_assoc()) { ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data prenotazione stanza</h3>
                            </div>
                            <div class="panel-body">
                                <ul>
                                    <li>Prenotata dal: <?php echo $row['created_at']; ?></li>
                                    <li>Fino al: <?php echo $row['updated_at']; ?></li>
                                </ul>
                            </div>
                        </div>
                    <?php
                      }
                    } elseif ($result) { ?>
                        <p>Non ci sono prenotazioni per questa stanza</p>
                        <?php
                    } else {
                        ?>
                        <p>Si è verificato un errore</p>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
<?php
include 'layout/footer.php'
?>
