//Importar a dependência do SQLite3
const sqlite3 = require("sqlite3").verbose();

//Criar o objeto do BD
const db = new sqlite3.Database("./src/database/database.db");

module.exports = db;

// db.serialize(() => {
//     //Criar uma tabela
//     // `` => Template String
//     db.run(` 
//         CREATE TABLE if not exists places (
//             id INTEGER PRIMARY KEY AUTOINCREMENT,
//             image TEXT NOT NULL,
//             name TEXT NOT NULL,
//             address TEXT NOT NULL,
//             address2 TEXT NOT NULL,
//             state TEXT NOT NULL,
//             city TEXT NOT NULL,
//             items TEXT NOT NULL
//         );
//     `);

//     //Inserir
//     const query = `
//         INSERT INTO places (
//             image,
//             name,
//             address,
//             address2,
//             state,
//             city,
//             items
//         ) VALUES ( ?,?,?,?,?,?,? );
//         `;

//     const values = [
//         "https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1474&q=80",
//         "Coletoria",
//         "Guilherme Gemballa, Jardim América",
//         "Número 260",
//         "Santa Catarina",
//         "Rio do Sul",
//         "Resíduos Eletrônicos, Lâmpadas"
//     ];

//     function afterInsertData(err) {
//         try {
//             console.log("Cadastrado com Sucesso!");
//             console.log(this);
//         } catch (err) {
//             return console.log(err);
//         }     
//     }

//     db.run(query, values, afterInsertData);

//     //Consultar
//     db.all(`SELECT * FROM places`, function(err, rows){
//         try {
//             console.log("Registros: ");
//             console.log(rows);
//         } catch (err) {
//             return console.log(err);
//         }
//     });

//     //Deletar 
//     db.run(`DELETE FROM places WHERE id = ?`, [1], function(err){
//         try {
//             console.log("Deletado com Sucesso!");
//         } catch (err) {
//             return console.log(err);
//         }
//     });
// });