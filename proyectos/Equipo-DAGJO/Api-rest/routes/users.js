var express = require('express');
var router = express.Router();
var DbConnect = require('../DbConnect');

var table = "users";
var colums = "*";

/* Obtenemos y mostramos todos los usuarios */
router.get('/users', function(req, res) {
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
        id : null,
        username : req.body.username,
        email : req.body.email,
        password : req.body.password,
        created_at : null
    };
    DbConnect.create(userData, function(error, data) {
        if(data && data.insertId) 
            res.json({"msg": "ok"});
        else
            res.json(404,{"msg" : "notExist", "error": error});
    });
});

/* Actualizamos un usuario existente */
router.put('/', function(req, res) {
    var userData = {
        id:req.param('id'),
        username:req.param('username'),
        email:req.param('email')
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