<?php
//pagina di eliminazione
include 'functions.php';
$sql = "SELECT * FROM stanze WHERE id = " . $_GET['id_stanza']; //seleziona tutte le stanze prendendo l'id in get
$result = esegui_query($sql);
include 'layout/head.php';
?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Eliminazione stanza</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <?php
                    if ($result && $result->num_rows > 0) {
                        $row = $result->fetch_assoc(); ?>
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">
                                <h3 class="panel-title">Stanza id:  <?php echo $row['id']; ?></h3>
                            </div>
                            <div class="panel-body">
                              <p>Sicuro di voler eliminare questa stanza?</p>
                              <a class="btn btn-info" href="confirmed_delete.php?id_stanza=<?php echo $row['id'];?>">
                                  SI
                              </a>
                              <a class="btn btn-info" href="rooms.php">
                                  NO
                              </a>
                            </div>
                        </div>
                        <?php
                    } elseif ($result) { ?>
                        <p>Non ci sono risultati</p>
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
