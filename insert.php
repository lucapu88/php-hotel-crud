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
    if ($result) { //se la query va a buon fine
      header('Location: created.php?stanza='. $numero_stanza . '&piano=' . $piano . '&letti=' . $letti); //redirect ad un'altra pagina passandogli i parametri in get
    }
} else { //altrimenti result è = false e quindi non esegue niente
    $result = false;
}
?>
