<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="valida.js"></script>
</head>
<body>
    <div class="containerLogin">
    <form class="formlogin" action="perguntas.php"method="GET">
        <table class="tlogin">
            <tr>
                <td class="nome">
                Nome :
                </td>
                <td class="senha">
                <input type="text" name="usuario" id="usuario">
                </td>
            </tr>
            <tr>
                <td class="nome">
                    Senha:
                </td>
                <td class=senha>
                <input type="password" name="pass" id="senha">
                    
                </td>
            </tr>
        </table>
       
        
        <center><input type="submit"class="enviar"></center>


    </form>
    </div>
    
    
</body>
</html>