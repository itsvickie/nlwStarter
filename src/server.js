const express = require("express");
const server = express();

//pegar o banco de dados
const database = require("./database/db.js");

//Config pasta pública
server.use(express.static("public"));

//Habilitar o uso do req.body
server.use(express.urlencoded({ extended: true }));

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
        } catch (error) {
            return console.log(error);
        }
    });
});

server.post("/savepoint", (req, res) => {
    // console.log(req.body);

    // Inserir dados
    const query = `
        INSERT INTO places (
            image,
            name,
            address,
            address2,
            state,
            city,
            items
        ) VALUES ( ?,?,?,?,?,?,? );
        `;

    const values = [
        req.body.image,
        req.body.name,
        req.body.address,
        req.body.address2,
        req.body.state,
        req.body.city,
        req.body.items
    ];

    function afterInsertData(error) {
        try {
            console.log("Cadastrado com Sucesso!");
            console.log(this);
            return res.render("create-point.html", { saved: true });
        } catch (error) {
            return console.log(error);
        }
    }

    database.run(query, values, afterInsertData);
});

//Startar o Servidor
server.listen(3000);