<?php require_once("./database/conexao.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecoleta - Novo Ponto de Coleta</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/create-point.css">
    <link rel="stylesheet" href="./style/resposive.css">
</head>
<body>
    <div id="page-create-point">
        <header>
            <img src="./assets/logo.svg" alt="Logomarca">

            <!-- Hyperlink - Elemento Inline -->
            <a href="./index.php">
                <span></span>
                Voltar para a página inicial</a>
        </header>

        <form action="./database/create-point.php" method="post">
            <h1>Cadastro do Ponto de Coleta</h1>

            <fieldset>

                <legend>
                    <h2>Dados da Entidade</h2>
                </legend>

                <div class="field">
                    <label for="name">Nome da Entidade</label>
                    <input type="text" name="name" required>
                </div>

                <div class="field-group">
                    <div class="field">
                        <label for="address">Endereço</label>
                        <input type="text" name="address" required>
                    </div>

                    <div class="field">
                        <label for="address2">Número/Complemento</label>
                        <input type="text" name="address2" required>
                    </div>
                </div>

                <div class="field-group">
                    <div class="field">
                        <label for="state">Estado</label>
                        <select name="uf" required>
                            <option value="">Selecione o Estado</option>
                        </select>

                        <input type="hidden" name="state"></input>
                    </div>

                    <div class="field">
                        <label for="city">Cidade</label>
                        <select name="city" disabled required>
                            <option value="">Selecione a Cidade</option>
                        </select>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>
                    <h2>Itens de Coleta</h2>
                </legend>

                <div class="items-grid">
                   <li data-id="1">
                       <img src="./assets/lampadas.svg" alt="Lâmpadas">
                       <span>Lâmpadas</span>
                    </li>

                    <li data-id="2">
                        <img src="./assets/baterias.svg" alt="Pilhas e Baterias">
                        <span>Pilhas e Baterias</span>
                     </li>

                     <li data-id="3">
                        <img src="./assets/papeis-papelao.svg" alt="Papéis e Papelão">
                        <span>Papéis e Papelão</span>
                     </li>

                     <li data-id="4">
                        <img src="./assets/eletronicos.svg" alt="Resíduos Eletrônicos">
                        <span>Resíduos Eletrônicos</span>
                     </li>

                     <li data-id="5">
                        <img src="./assets/organicos.svg" alt="Resíduos Orgãnicos">
                        <span>Resíduos Orgãnicos</span>
                     </li>

                     <li data-id="6">
                        <img src="./assets/oleo.svg" alt="Óleo de Cozinha">
                        <span>Óleo de Cozinha</span>
                     </li>
                </div>

                <input type="hidden" name="items">

            </fieldset>
            <button type="submit">Cadastrar ponto de coleta</button>
        </form>
    </div>

    <script src="./scripts/create-point.js"></script>
</body>
</html>