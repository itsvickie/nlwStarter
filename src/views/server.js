const express = require("express");
const server = express();

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
    res.render("index.html", { title: "Um título"})
});

server.get("/create-point", (req, res) => {
    res.render("create-point.html")
});

server.get("/search-results", (req, res) => {
    res.render("search-results.html")
});

//Startar o Servidor
server.listen(3000);