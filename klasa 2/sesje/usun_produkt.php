<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['usun']) && is_array($_POST['usun'])) {
        $usun = $_POST['usun'];

        foreach ($usun as $do_usun) {
            if (in_array($do_usun, $_SESSION['kosz'])) {
                $index = array_search($do_usun, $_SESSION['kosz']);
                unset($_SESSION['kosz'][$index]);
            }
        }
    }

    header('Location: koszyk.php');
    exit;
}
?>
