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

app.get("/api/runner/:id/results", (req, res) => {
  con.query(`SELECT * FROM Results WHERE person_id=${req.params.id}`, function (
    err,
    result,
    fields
  ) {
    if (err) throw err;
    res.json(result);
  });
});

app.get("/api/events", (req, res) => {
  con.query("SELECT * FROM Events", function (err, result, fields) {
    if (err) throw err;
    res.json(result);
  });
});

app.get("/api/event/:id", (req, res) => {
  con.query(`SELECT * FROM Events WHERE event_id=${req.params.id}`, function (
    err,
    result,
    fields
  ) {
    if (err) throw err;
    res.json(result);
  });
});

app.get("/api/results", (req, res) => {
  con.query("SELECT * FROM Results", function (err, result, fields) {
    if (err) throw err;
    res.json(result);
  });
});

app.get("/api/tables", (req, res) => {
  con.query("SELECT * FROM information_schema.tables", function (
    err,
    result,
    fields
  ) {
    if (err) throw err;
    res.json(result.map((table) => table.TABLE_NAME));
  });
});

app.listen(port, () => {
  console.log(`App listening at http://localhost:${port}`);
});
