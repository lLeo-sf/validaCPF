<html>  
    <title>VALIDADOR DE CPF</title>
    <style type="text/css">
    body {
    background-color: #181818;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    }
    h1{
        color:#f1f1f1;
    }
    label{
        color:#f1f1f1;
    }
    </style> 
    <body>
        <h1>Testar CPF</h1>
        <form action="validaCPF.php" method="POST">
            <input type="hidden" name="action" value="validaCPF">
            <label> CPF: </label><input type="text" name="cpf" placeholder="somente número">
            <button>Verificar</button>
        </form>
    </body>
</html>
