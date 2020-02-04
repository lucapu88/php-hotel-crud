<?php
// apertura tag html, head e body + inclusione navbar
include 'layout/head.php';
include 'functions.php';
$sql = "SELECT * FROM stanze WHERE id = " . $_GET['id_stanza'];
$result = esegui_query($sql);
?>
<main>
    <div class="container">
        <div class="row">
          <?php
          if ($result && $result->num_rows > 0) { ?>
            <?php $row = $result->fetch_assoc(); ?>
            <div class="col-sm-6">
                <h1>Modifica stanza id: <?php echo $row['id']; ?></h1>
            </div>
            <div class="col-sm-6 text-right">
                <a id="torna-in-home" class="btn btn-success" href="index.php">
                    Torna in homepage
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form method="post" action="update_changes.php">
                  <input type="hidden" name="id_stanza" value="<?php echo $row['id']; ?>">
                  <div class="form-group">
                    <label for="numero_stanza">Numero stanza</label>
                    <input name="numero_stanza" type="text" class="form-control" id="numero_stanza" value="<?php echo $row['room_number']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="piano">Piano</label>
                    <input name="piano" type="text" class="form-control" id="piano" value="<?php echo $row['floor']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="letti">Numero letti</label>
                    <input name="letti" type="text" class="form-control" id="letti" value="<?php echo $row['beds']; ?>" required>
                  </div>
                  <button type="submit" class="btn btn-success">Salva Modifiche</button>
                </form>
                <?php
            } elseif ($result) { ?>
                <p>Stanza inesistente</p>
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
// footer + chiusura body e html
include 'layout/footer.php'

 ?>
