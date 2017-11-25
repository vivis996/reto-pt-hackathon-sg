var express = require('express');
var router = express.Router();
var DbConnect = require('../DbConnect');

var table = "usuario";
var primary = "`Id`";
var colums = "`Nombre`,`Apellidos`,`Usuario`,`Password`,`Correo`";

/* Obtenemos y mostramos todos los usuarios */
router.get('/users', function(req, res) {
    DbConnect.read(table, primary + ',' + colums, null, function(error, data) {
        if (typeof data !== 'undefined' && data.length > 0)
            res.json(data);
        else
            res.json(404,{"status" : "notCreate", "error": error});
    });
});

/* Creamos un nuevo usuario */
router.post("/", function(req,res) {
    var userData = {
        id : null,
        Nombre : req.query.Nombre,
        Apellidos : req.query.Apellidos,
        Usuario : req.query.Usuario,
        Password : req.query.Password,
        Correo : req.query.Correo,
    };
    var data = "'" + userData.Nombre + "'," +
                "'" + userData.Apellidos + "'," +
                "'" + userData.Usuario + "'," +
                "'" + userData.Password + "'," +
                "'" + userData.Correo + "'";
    DbConnect.create(table, colums, data, function(error, data) {
        if(data && data.insertId) 
            res.json({id : data.insertId, status : "ok"});
        else
            res.json(404,{"status" : "notInsert", "error": error});
    });
});

/* Actualizamos un usuario existente */
router.put('/', function(req, res) {
    var userData = {
        Nombre : req.query.Nombre,
        Apellidos : req.query.Apellidos,
        Usuario : req.query.Usuario,
        Password : req.query.Password,
        Correo : req.query.Correo,
    };
    var set = "Nombre='" + userData.Nombre + "'," +
            "Apellidos='" + userData.Apellidos + "'," +
            "Usuario='" + userData.Usuario + "',"+
            "Password='" + userData.Password + "'," + 
            "Correo='" + userData.Correo + "'";
    var where = 'id=' + req.query.id;
    console.log(where);
    DbConnect.update(table, set, where,function(error, data) {
        if(data && data.msg) 
            res.json({"status": "ok"});
        else
            res.json(404,{"status" : "notExist", "error": error});
    });
});

router.get('/:id', function(req, res) {
    var id = req.params.id;
    if (id != null) {
    var where = " id=" + id;
    DbConnect.read(table,  primary + ',' + colums, where, function(error, data) {
        if (typeof data !== 'undefined' && data.length > 0)
            res.json(data);
        else
            res.json(404,{"msg" : "notExist", "error": error});
    });
    }
    else
        res.json(500,{"msg":"The id must be numeric"});
});

module.exports = router;