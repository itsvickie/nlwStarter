<?php require_once("./database/conexao.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Pesquisa - ECOLETA</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/search-results.css">
    <link rel="stylesheet" href="./style/resposive.css">
</head>
<body>
    <div id="page-search-results">
        <header>
            <img src="./assets/logo.svg" alt="Logomarca">

            <!-- Hyperlink - Elemento Inline -->
            <a href="./index.php">
                <span></span>
                Voltar para a página inicial</a>
        </header>

        <main>
            <h4>
                <strong>2 pontos</strong> encontrados
            </h4>

            <div class="cards">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1474&q=80" alt="Coletoria">
                    <h1>Colectoria</h1>
                    <h3>Resíduos Eletrônicos, Lâmpadas</h3>
                    <p>
                        Rio do Sul, Santa Catarina <br/>
                        Guilherme Gemballa, Jardim América <br/>
                        Nº 260
                    </p>
                </div>

                <div class="card">
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1474&q=80" alt="Papersider">
                    <h1>Papersider</h1>
                    <h3>Papéis e Papelão</h3>
                    <p>
                        Rio do Sul, Santa Catarina <br/>
                        Guilherme Gemballa, Jardim América <br/>
                        Nº 260
                    </p>
                </div>
            </div>
        </main>       
    </div>
</body>
</html>