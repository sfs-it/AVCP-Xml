<?php
$anno = (int) $_GET['anno'];
$messOk = false;
// var_dump($bloccati);
if ($_SESSION['user'] == 'admin' && array_key_exists($anno, $bloccati)) {
    $querySblocco = "DELETE FROM bloccati WHERE anno = '" . $anno . "'";
    $resSblocco = $db->query($querySblocco);
    if ($db->affected_rows == 1) {
        $messOk = true;
        $message = '<strong>Tutto ok:</strong> Anno ' . $anno . ' sbloccato';
    }
} else {
    $message = '<strong>Errore:</strong> non posso sbloccare l\'anno ' . $anno . '!';
}
