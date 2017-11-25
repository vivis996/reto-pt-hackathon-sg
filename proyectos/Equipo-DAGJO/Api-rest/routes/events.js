var express = require('express');
var router = express.Router();



//Obtener todos los eventos
router.get('/filter', function(req, res, next) {
  res.send('All events');
});

//Obtener todos los eventos si contiene nombre 
router.get('/contains', function(req, res, next) {
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

//Ver favoritos de usuario (id)
router.get('/favorites', function(req, res, next) {
    var id = req.query.id;
    var message = "OK";
    if (id == null)
      res.status(400).send('None shall pass');
    res.send(message);
});

module.exports = router;

var express = require('express');
var router = express.Router();
var DbConnect = require('../DbConnect');

var primary ="'Id'";
var table = "eventos";
var colums = "'Nombre','Fecha','Descripcion','IdSitioWeb','IdTipoEvento',IdCiudad,'Ubicacion'";

/* Obtenemos y mostramos todos los usuarios */
router.get('/', function(req, res) {
    DbConnect.read(table, primary +','+ colums, null, function(error, data) {
        if (typeof data !== 'undefined' && data.length > 0)
            res.json(data);
        else
            res.json(404,{"msg" : "notExist", "error": error});
    });
});

/* Creamos un nuevo evento */
router.post("/", function(req,res) {
    var userData = {
        Id : null,
        Nombre : req.body.Nombre,
        Fecha : req.body.Fecha,
        Descripcion : req.body.Descripcion,
        IdSitioWeb : req.body.IdSitioWeb,
        IdTipoEvento : req.body.IdTipoEvento,
        IdCiudad : req.body.IdCiudad,        
        Ubicacion : req.body.Ubicacion,
        created_at : null
    };
     
        var data ="'" + userData.Nombre + "'," +
        "'" + userData.Fecha + "'," +
        "'" + userData.Descripcion + "'," +
        "'" + userData.IdSitioWeb + "'," +
        "'" + userData.IdTipoEvento + "'," +  
        "'" + userData.IdTipoEvento+ "'," +        
        "'" + userData.Ubicacion + "'";
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
        id:req.param('Id'),
        Nombre:req.param('Nombre'),
        Fecha:req.param('Fecha'),
        Nombre:req.param('Nombre'),
        Descripcion:req.param('Descripcion'),
        IdSitioWeb:req.param('IdSitioWeb'),
        IdTipoEventp:req.param('IdTipoEvento'),        
        IdCiudad:req.param('IdCiudad'),                
        Ubicacion:req.param('Ubicacion'),
    };
    DbConnect.update(table,userData,function(error, data) {
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