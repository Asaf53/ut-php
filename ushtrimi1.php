<?php
$emri = $_POST['emri'];
$mbiemri = $_POST['mbiemri'];
$mesatarja = $_POST['mesatarja'];
$piket = $_POST['piket'];
$drejtimi = $_POST['drejtimi'];

$mesazhi = "";
$statusi = "";

if($emri == "" || $mbiemri == "")
    $mesazhi = "Gabim: Emri dhe Mbiemri duhet te plotesohen!";

if ($mesatarja == "")
    $mesazhi = "Gabim: Mesatarja duhet te plotesohet!";
if ($piket == "")
    $mesazhi = "Gabim: Piket ne provim duhet te plotesohen!";
if ($mesatarja < 2 || $mesatarja > 5)
    $mesazhi = "Gabim: Mesatarja duhet te jete midis 2 dhe 5!";
if ($piket < 0 || $piket > 100)
    $mesazhi = "Gabim: Piket ne provim duhet te jene midis 0 dhe 100!";


if ($piket >= 50 || $mesatarja >= 3.5){
    $statusi = "PRANOHET";
    $mesazhi = "Studenti $emri $mbiemri eshte pranuar";
} elseif ($piket >= 40 || $mesatarja >= 4.5){
    $statusi = "LIST PRITJE";
    $mesazhi = "Studenti $emri $mbiemri eshte ne listen e pritjes";
} else {
    $statusi = "NUK PRANOHET";
    $mesazhi = "Studenti $emri $mbiemri nuk eshte pranuar";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</head>
<body class="container col-5">
    <h3 class="text-center mt-5">Rezultati i Pranimit</h3>
    <label for="emri" class="form-label">Emri:</label>
    <input type="text" id="emri" name="emri" class="form-control" value="<?= $emri ?>" readonly>

    <label for="mbiemri" class="form-label">Mbiemri:</label>
    <input type="text" id="mbiemri" name="mbiemri" class="form-control" value="<?= $mbiemri ?>" readonly>

    <label for="mesatarja" class="form-label">Mesatarja:</label>
    <input type="number" min="2" max="5" step="0.01" id="mesatarja" name="mesatarja" class="form-control" value="<?= $mesatarja ?>" readonly>
    
    <label for="piket" class="form-label">Piket ne Provim:</label>
    <input type="number" id="piket" name="piket" class="form-control" value="<?= $piket ?>" readonly>
    
    <label for="drejtimi" class="form-label">Drejtimi:</label>
    <input id="drejtimi" name="drejtimi" class="form-control" value="<?= $drejtimi ?>" readonly>

    <h4 class="mt-5"><?= $mesazhi ?> <span class="badge theme-primary"><?= $statusi ?></span></h4>

</body>
</html>