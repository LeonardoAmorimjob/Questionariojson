<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
    <script type='text/javascript'src="valida.js"></script>

</head>
<body>
    <div class="container">

    <?php
    $json=file_get_contents('questoes.json');
    $quest=json_decode($json);
    $contResp=0;
    $i=0;
    $j=0;
    foreach($quest as $q){
       
        $altcerta[$i]=  $q->correct;  
    
    $resp[$i]=isset($_GET[("resp".($i+1))])?$_GET[("resp".($i+1))]:"";
    echo"alternativa certa <b class='certa'>".$altcerta[$i]."</b><br>alternativa escolhida <b class='escolhida'>".$resp[$i]."</b><br>";
    if($resp[$i]==$altcerta[$i]){
        $contResp++;
    }
    $i++;
}


 $p_acerto=(($contResp*100)/10);

if($p_acerto<70){
    echo"<div id='modal'class='modalcontainer'>
    <div class='modalrep'>".$p_acerto."% de Acerto
   

    </div>
    </div>";
}else{
    echo"<div id='modal'class='modalcontainer'>
    <div class='modalap'>".$p_acerto."% de Acerto
    </div>
    </div>";
}

?>


    </div>

    
</body>
</html>