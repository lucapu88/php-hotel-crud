<?php
  //pagina di avvenuta creazione

  include 'functions.php';
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
                <a id="torna-in-home" class="btn btn-success" href="create.php">
                    Crea un'altra stanza
                </a>
            </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <h2>Stanza creata con successo!</h2>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Dettagli stanza</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Numero stanza: <?php echo $_GET['stanza']; ?></li>
                        <li>Piano: <?php echo $_GET['piano']; ?></li>
                        <li>Numero letti: <?php echo $_GET['letti']; ?></li>
                    </ul>
                </div>
            </div>
          </div>
        </div>
<?php
// footer + chiusura body e html
include 'layout/footer.php'
 ?>
