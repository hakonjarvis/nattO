const express = require("express");
const path = require("path");
const mysql = require("mysql");
const { env } = require("./env");

const app = express();
const port = process.env.PORT || 3000;

app.use(express.static("public"));

const con = mysql.createConnection(env.connection);

con.connect(function (err) {
  if (err) throw err;
  console.log("Connected!");
});

app.get("/api/runners", (req, res) => {
  con.query("SELECT * FROM Runners", function (err, result, fields) {
    if (err) throw err;
    res.json(result);
  });
});

app.get("/api/runner/:id", (req, res) => {
  con.query(`SELECT * FROM Runners WHERE person_id=${req.params.id}`, function (
    err,
    result,
    fields
  ) {
    if (err) throw err;
    res.json(result);
  });
});

app.listen(port, () => {
  console.log(`App listening at http://localhost:${port}`);
});
