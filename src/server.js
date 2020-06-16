const express = require("express");
const server = express();

//pegar o banco de dados
const database = require("./database/db.js");

//Config pasta pública
server.use(express.static("public"));

//Template Engine - Nunjucks
const nunjucks = require("nunjucks");
nunjucks.configure("src/views", {
    express: server,
    noCache: true
});

//Configurar os Caminhos
//Homepage
//Req: Requisição (Pedido)
//Res: Resposta 
server.get("/", (req, res) => {
    res.render("index.html")
});

server.get("/create-point", (req, res) => {
    res.render("create-point.html")
});

server.get("/search-results", (req, res) => {
    database.all(`SELECT * FROM places`, function (error, rows) {
        try {
            const total = rows.length;
            res.render("search-results.html", { places: rows, total });
        } catch (err) {
            return console.log(error);
        }
    });
});

//Startar o Servidor
server.listen(3000);