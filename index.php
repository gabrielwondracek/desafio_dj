<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once("conecta.php");
        if(isset($_GET["id"])==true){
            echo "<script>coloreArea(".$_GET['id']."); </script>";
        }
    ?>
    <main id="patio">
        <div id="area1" class="areas" onclick="exibirArea('1')">ÁREA 1</div>
        <div id="area2" class="areas" onclick="exibirArea('2')">ÁREA 2</div>
        <div id="area3" class="areas" onclick="exibirArea('3')">ÁREA 3</div>
        <div id="area4" class="areas" onclick="exibirArea('4')">ÁREA 4</div>
        <div id="area5" class="areas" onclick="exibirArea('5')">ÁREA 5</div>
        <div id="area6" class="areas" onclick="exibirArea('6')">ÁREA 6</div>
        <div id="area7" class="areas" onclick="exibirArea('7')">ÁREA 7</div>
        <div id="area8" class="areas" onclick="exibirArea('8')">ÁREA 8</div>
        <div id="area9" class="areas" onclick="exibirArea('9')">ÁREA 9</div>
        <div id="area10" class="areas" onclick="exibirArea('10')">ÁREA 10</div>
        <div id="area11" class="areas" onclick="exibirArea('11')">ÁREA 11</div>
</body>
</html>