const mysql = require('mysql');
const conection = mysql.createConnection({
    host: 'localhost',
    user:'root',
    password:'',
    database: 'examen'
});

conection.connect( (err) => {
    if(err) throw err
    console.log('La conexion funciona');
} );

const llenarDestinos = () => {
    x.forEach((p) => {
        const option = document.createElement("option");
        option.value = p.id;
        option.innerText = p.nombreProducto;
        selectDestino.appendChild(option);
    });
};
llenarDestinos()
let x = conection.query('SELECT * FROM destino', function(err, results, fields){
    if(err) throw err;
    results.forEach(results => {
        console.log(results);
    })
})
conection.end();