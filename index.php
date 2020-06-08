<?php require_once ("./database/conexao.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecoleta</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/home.css">
    <link rel="stylesheet" href="./style/modal.css">
    <link rel="stylesheet" href="./style/resposive.css">
</head>
<body>
    <div id="page-home">
        <div class="content">
            <header>
                <img src="./assets/logo.svg" alt="Logomarca">

                <!-- Hyperlink - Elemento Inline -->
                <a href="./create-point.php">
                    <span></span>
                    Cadastre um ponto de coleta</a>
            </header>

            <main>
                <h1>Seu marketplace de coleta de resíduos</h1>
            
                <p>Ajudamos pessoas a encontrarem pontos de coleta de forma eficiente.</p>
            
                <a href="#"><span></span><strong>Pesquisar pontos de coleta</strong></a>
            </main>
        </div>
    </div>
    
    <div id="modal" class="hide">
        <div class="content">
            <div class="header">
                <h1>Pontos de Coleta</h1>
                <a href="#">Fechar</a>
            </div>

            <form action="./search-results.php">
                <label for="search">Cidade</label>
                <div class="search field">
                    <input type="text" name=search placeholder="Pesquise por Cidade">
                    <button>
                        <img src="./assets/search.svg" alt="Buscar">
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="./scripts/index.js"></script>
</body>
</html>