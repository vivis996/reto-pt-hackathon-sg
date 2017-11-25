var express = require('express');
var router = express.Router();

//Obtener solo un evento (id)
router.get('/', function(req, res, next) {
    var id = req.query.id;
    var message = "OK";
    if (id == null)
      res.status(400).send('None shall pass');
    res.send(message);
});

//Obtener todos los eventos
router.get('/filter', function(req, res, next) {
  res.send('All events');
});

//Obtener todos los eventos
router.get('/contains', function(req, res, next) {
  res.send('All events');
});

//Ver favoritos de usuario (id)
router.get('/favorites', function(req, res, next) {
    var id = req.query.id;
    var message = "OK";
    if (id == null)
      res.status(400).send('None shall pass');
    res.send(message);
});

//Marcar/Desmarcar favorito (id, bool)
router.put('/setfavorite', function(req, res, next) {
    var id = req.query.id;
    var status = req.query.status;
    if (id == null || status == null)
      res.status(400).send('None shall pass');
    var message = {
        "id" : id,
        "status": status,
    };
    res.send(message);
});

module.exports = router;
