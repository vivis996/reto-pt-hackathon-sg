var express = require('express');
var router = express.Router();
var DbConnect = require('../DbConnect');

var primary ="`Id`";
var table = "favoritos";
var colums = "`IdUsuario`,`IdEventos`";

/* Obtenemos y mostramos todos los usuarios */
router.get('/', function(req, res) {
    DbConnect.read(table, primary + ',' + colums, null, function(error, data) {
        if (typeof data !== 'undefined' && data.length > 0)
            res.json(data);
        else
            res.json(404,{"msg" : "notExist", "error": error});
    });
});

router.delete('/:id', function(req, res) {
    var id = req.params.id;
    if (id != null) {
    var where = " id=" + id;
    DbConnect.delete(table, id , function(error, data) {
            res.json(data);
    });
    }
    else
        res.json(500,{"msg":"The id must be numeric"});
});

/* Actualizamos un usuario existente */
router.post('/', function(req, res) {
    var userData = {
        IdUsuario : req.query.IdUsuario,
        IdEventos : req.query.IdEventos,
    };
    var set= "'"+userData.IdUsuario+"',"+
             "'"+userData.IdEventos+"'";
        
    DbConnect.create(table, colums,set,function(error, data) {
        if(data && data.insertId) 
            res.json({id : data.insertId, status : "ok"});
        else
            res.json(404,{"msg" : "notExist", "error": error});
    });
});

module.exports = router;