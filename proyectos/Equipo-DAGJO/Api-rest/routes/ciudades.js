var express = require('express');
var router = express.Router();
var DbConnect = require('../DbConnect');

var table = "ciudad";
var colums = "*";

/* Obtenemos y mostramos todos los usuarios */
router.get('/all', function (req, res) {
    DbConnect.read(table, colums, null, function (error, data) {
        if (typeof data !== 'undefined' && data.length > 0)
            res.json(data);
        else
            res.json(404, { "msg": "notExist", "error": error });
    });
});

//por id 
router.get('/:id', function (req, res) {
    var id = req.params.id;
    if (id != null) {
        var where = " id=" + id;
        DbConnect.read(table, colums, where, function (error, data) {
            if (typeof data !== 'undefined' && data.length > 0)
                res.json(data);
            else
                res.json(404, { "msg": "notExist", "error": error });
        });
    }
    else
        res.json(500, { "msg": "The id must be numeric" });
});

module.exports = router;