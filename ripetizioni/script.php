<!DOCTYPE html>
<html>
<body align = 'center'>
<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['argomenti'])) {
    $argomento = $_POST['argomenti'];
    switch ($argomento) {
        case 'array':
            header("Location: array.html");
            exit;
        case 'elenco':
            header("Location: elenco.html");
            exit;
        case 'foreach':
            header("Location: foreach.html");
            exit;
        case 'funzioni':
            header("Location: funzioni.html");
            exit;
        case 'basi':
            header("Location: basi.html");
            exit;
        default:
            // Optionally redirect or display an error for unexpected input
            echo "Invalid selection.";
            break;

        }
    }


?>
</body>
</html>