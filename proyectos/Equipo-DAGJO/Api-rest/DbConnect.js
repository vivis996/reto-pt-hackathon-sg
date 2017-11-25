var mysql = require('mysql'),
connection = mysql.createConnection({ 
        host: 'localhost', 
        user: 'root',  
        password: '', 
        database: 'mydb'
    }
);
 
var crud = {};
 
crud.read = function(table, columns, where, callback) {
    if (!connection) return;
    var sql = 'SELECT ' + columns + ' FROM ' + table;
    if (where != null && where != "")
        sql += ' WHERE ' + where;
        console.log(sql);
    connection.query(sql, function(error, rows) {
        if(error) throw error;
        callback(null, rows);
    });
}
 
crud.create = function(table, columns, data, callback) {
    if (!connection) return;
    var sql = 'INSERT INTO ' + table + '(' + columns + ') VALUES (' + data + ')';
    connection.query(sql, data, function(error, result) {
        if(error) throw error;
        callback(null,{"insertId" : result.insertId});
    });
}
 
crud.update = function(table, values, where, callback) {
    if (!connection) return;
    var sql = 'UPDATE ' + table + ' SET ' + values + " WHERE " + where;
    console.log(sql);
    connection.query(sql, function(error, result) {
        if(error) throw error;
        callback(null,{"msg":"success"});
    });
}

module.exports = crud;