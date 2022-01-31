<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Simulador de dados</title>
    <meta name="description" content="Simulador de dados">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>

<body>

    <section class="topo">
        <img src="assets/img/dados.svg" alt="logo dados">
        <form method="post" id="formulario">
            <fieldset>
                <legend>Quantos Dados?</legend>
                <input type="number" name="dados" id="dados" value="1" min="1">
            </fieldset>

            <fieldset>
                <legend>Número de lados</legend>
                <select name="lados-dados" id="lados-dados">
                    <option value="D4">D4</option>
                    <option value="D6">D6</option>
                    <option value="D8">D8</option>
                    <option value="D10">D10</option>
                    <option value="D12">D12</option>
                    <option value="D16">D16</option>
                    <option value="D20">D20</option>
                    <option value="D100">D100</option>
                </select>
            </fieldset>

        </form>
    </section>
    <div class="divisao">
        <button class="btn" type="submit" form="formulario">Rolar o dado</button>
    </div>

    <section class="baixo">


        <?php
        require_once "rand.php";

        $qtd_dados = '';
        $qtd_lados = '';
        if (isset($_POST['dados'])  and isset($_POST['lados-dados'])) {
            $qtd_dados = $_POST['dados'];
            $qtd_lados = $_POST['lados-dados'];
        }

        $dados = dadosAleatorios($qtd_dados, $qtd_lados);
        ?>


        <span class="valores-escolhidos"><?= $qtd_dados, ' ', $qtd_lados ?></span>

        <p> <?php foreach ($dados[0] as $dado) {
                echo $dado, ' ';
            } ?>
        </p>

        <?php
        $total = $dados[1];

        if ($total > 0) {
            echo "<div class='resultado'>$total</div>";
        }
        ?>

    </section>

    <script src="assets/js/app.js" async defer></script>
</body>

</html>