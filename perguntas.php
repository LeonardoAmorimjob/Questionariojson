
<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <script type='text/javascript'src="valida.js"></script>
    
   
</head>
<body>



<form>
<?php
$json=file_get_contents('questoes.json');
$quest=json_decode($json);
$cont=1;
$contAlt=1;
$contResp=0;
$login=$_GET["usuario"];
$senha=$_GET["pass"];
$logado=true;
if($login==""||$senha==""){
    header('Location:index.php');
}
echo"<center><h1>Boa Prova $login</h1></center>";
foreach($quest as $q){
    echo"<b id='quest".$cont."'>".$cont++."</b>) $q->enunciado"."<p>";  
   
    $contLetra=0;
    
    foreach($q->alternativas as $alt){
        $contLetra++;
        switch ($contLetra) {
            case 1:
                $letra='a';
                break;
            case 2:
                $letra='b';
                break;
            case 3:
                $letra='c';
                break;
            case 4:
                $letra='d';
                break;
            case 5:
                $letra='e';
                break;
        }
        echo"<table><tr id='linha'><td>";
        echo $letra.") <input type='radio'value='".$contAlt."' name='alternativas$cont'id='alt".$contAlt."'>$alt";
        echo"</td></tr></table>";
           
        $contAlt++;
    }
    echo"<img class='imagemquest'src='./img/quest".($cont-1).".jpg'></img><br>";
    
}

    

echo"<center><input type='button'value='Enviar'onclick='principal()'></center>";

?>

</form>

</body>
</html>
