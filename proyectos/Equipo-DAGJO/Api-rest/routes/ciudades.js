var express = require('express');
var router = express.Router();
var DbConnect = require('../DbConnect');

var table = "ciudad";
var colums = "*";

/* Obtenemos y mostramos todos los usuarios */
router.get('/', function(req, res) {
    DbConnect.read(table, colums, null, function(error, data) {
        if (typeof data !== 'undefined' && data.length > 0)
            res.json(data);
        else
            res.json(404,{"msg" : "notExist", "error": error});
    });
});

/* Creamos un nuevo usuario */
router.post("/", function(req,res) {
    var userData = {
        Id : null,
        Nombre: req.body.Nombre,
        created_at : null
    };
    DbConnect.create(table,userData, function(error, data) {
        if(data && data.insertId) 
            res.json({"msg": "ok"});
        else
            res.json(404,{"msg" : "notExist", "error": error});
    });
});

/* Actualizamos un usuario existente */
router.put('/', function(req, res) {
    var userData = {
        Id:req.param('Id'),
        Nombre:req.param('Nombre'),
    };
    DbConnect.update(userData,function(error, data) {
        if(data && data.msg) 
            res.json({"msg": "ok"});
        else
            res.json(404,{"msg" : "notExist", "error": error});
    });
});

router.get('/:id', function(req, res) {
    var id = req.params.id;
    if (id != null) {
    var where = " id=" + id;
    DbConnect.read(table, colums, where, function(error, data) {
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