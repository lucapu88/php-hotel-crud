<?php
//pagina di creazione nuova stanza
// apertura tag html, head e body + inclusione navbar
include 'layout/head.php';
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Crea una nuova stanza</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a id="torna-in-home" class="btn btn-success" href="index.php">
                    Torna in homepage
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form method="post" action="insert.php">
                  <div class="form-group">
                    <label for="numero_stanza">Numero stanza</label>
                    <input name="numero_stanza" type="text" class="form-control" id="numero_stanza" placeholder="Numero stanza" required>
                  </div>
                  <div class="form-group">
                    <label for="piano">Piano</label>
                    <input name="piano" type="text" class="form-control" id="piano" placeholder="Piano" required>
                  </div>
                  <div class="form-group">
                    <label for="letti">Numero letti</label>
                    <input name="letti" type="text" class="form-control" id="letti" placeholder="Letti" required>
                  </div>
                  <button type="submit" class="btn btn-success">Crea stanza</button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php
// footer + chiusura body e html
include 'layout/footer.php'
 ?>
