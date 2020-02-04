<?php
//pagina di tutte le funzioni utilizzate

function connessione_db() { //login
    include 'db-config.php';
    $conn = new mysqli($servername, $username, $password, $dbname);
    return $conn;
}

function esegui_query($query) {
    // Connessione al database
    $conn = connessione_db();
    // Check connection
    if ($conn && $conn->connect_error) { //se non c'è connessione e se ci sono errori nella connessione
        return null;
    } else { //altrimenti, c'è connessione e quindi esegui la query
        $result = $conn->query($query);
        $conn->close(); //chiudi la connessione
        return $result; //restituisci la query immagazzinata in result
    }
}

function controlla_dati_stanza($numero_stanza, $piano, $letti) { //controlla i dati passati:
    if(
        !empty($numero_stanza) && // che non siano vuoti
        !empty($piano) &&
        !empty($letti) &&
        is_numeric($numero_stanza) && //che siano numeri
        is_numeric($piano) &&
        is_numeric($letti) &&
        intval($numero_stanza) > 0 && //restituisce il valore intero di una variabile
        intval($piano) > 0 &&
        intval($letti) > 0
    ) {
        return true;
    } else {
        return false;
    }
}

?>
