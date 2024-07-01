<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="Author" content="Gabriel Filipe"> <!--criei essa tag para referenciar a mim (Autor)-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--tag para responsividade do site-->
    <title>Currículo</title>
    <link rel="stylesheet" href="curriculo.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="apo.js"></script>
</head>

<body>
    <fieldset>
        <?php       //aqui eu declarei as variáveis que receberão os dados dos campos do html e junto mensagens de erro caso algum ocorra
        $nome = $_POST["nome"] ?? "Sem nome";
        $idade = $_POST["idade"] ?? "Sem idade";
        $endereco = $_POST["endereco"] ?? "Sem Endereço";
        $email = $_POST["email"] ?? "Sem E-mail";
        $telefone = $_POST["telefone"] ?? "Sem Telefone";
        $estadoCivil = $_POST["estadoCivil"] ?? "Sem Estado civil";
        $sexo = $_POST["sexo"] ?? "Sexo não selecionado";
        $objetivos = $_POST["objetivos"] ?? "Objetivos declarados incorretamente";
        $qualidade = $_POST["qualidades"] ?? "Qualidades declaradas incorretamente";
        $experiencias = $_POST["experiencias"] ?? "Experiências declaradas incorretamente";
        $novoCampo = $_POST["campo_Novo"];
        ?>
        <h1>
            <?php   //função para exibir mensagens de erro caso ocorra algum problema na validação dos campos (uma validação a mais além dos disponiveis pelo html)
            if (!isset($_POST) || empty($_POST)) {
                echo "Não foram encontradas às informações do formulário";
            }

            if (empty($_POST["estadoCivil"])) {
                echo "Não foi selecionado um estado civil";
            }
            ?>
        </h1>

        <h1>Dados Pessoais:</h1>
        <hr>

        <button id="btVoltar">Voltar</button><button id="btImpressao">Imprimir</button>

        <h2>
            <p>Nome: <?php echo $nome ?></p>
            <br>
            <p>Idade: <?php echo $idade ?></p>
            <br>
            <p>Endereço: <?php echo $endereco ?></p> <!--aqui eu ja usei as variáveis com os dados dos campos-->
            <br>
            <p>Email: <?php echo $email ?></p>
            <br>
            <p>Telefone: <?php echo $telefone ?></p>
            <br>
            <p>Estado civil: <?php echo $estadoCivil ?></p>
            <br>
            <p>Sexo: <?php echo $sexo ?></p>
        </h2>
        <br>
        <h1>Objetivos:</h1>
        <hr>
        <p class="fonte-maior"><?php echo $objetivos ?></p>
        <br>
        <h1>Qualidades:</h1>
        <hr>
        <p class="fonte-maior"><?php echo $qualidade ?></p>
        <br>
        <h1>Experiências:</h1>
        <hr>
        <p class="fonte-maior"><?php echo $experiencias ?></p>
        <br>
        <h1>Outros:</h1>
        <hr>
        <p class="fonte-maior"><?php echo $novoCampo ?></p>

    </fieldset>
</body>

</html>