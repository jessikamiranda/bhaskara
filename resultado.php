<?php
include './model.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <div class="container">
        <form method="post" action="resultado.php">
            <h1>Resultado</h1>
            <div><?= $result ?></div>
            
            <input class="voltar" type="button" name="voltar" value="Voltar" onClick="history.go(-1)">
        </form>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        * {
        font-family: 'Poppins', sans-serif;
        }

        body {
        background: linear-gradient(45deg, #CABEFF, #B3A2FF);
        background-repeat: no-repeat;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        }

        .container {
        width: 300px;
        display: flex;
        flex-direction: column;
        margin: auto;
        box-shadow: initial;
        background: #FFF;
        padding: 20px 30px;
        justify-content: center;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .container button {
        width: 100px;
        margin-left: 10px;
        }

        h1 {
        color: #2A2A2A;
        }

        input.voltar {
        margin: 10px auto;
        width: 300px;
        text-align: center;
        height: 40px;
        background: linear-gradient(to right, #71A2CB , #4C80AB);
        border: 0;
        border-radius: 5px;
        color: #FFF;
        transition: all 500ms ease-in-out;
        }

        input.voltar:hover {
        background: linear-gradient(to right, #4C80AB, #71A2CB);
        cursor: pointer;
        }
    </style>
       
</body>
</html>