let vehiculo = [{"color": "rojo","marca": "bmw","capacidad": 11},{"color": "azul","marca": "fiat","capacidad": 2},{"color": "negro","marca": "hyundai","capacidad": 6},{"color": "amarillo","marca": "jeep","capacidad": 15},{"color": "azul","marca": "citroen","capacidad": 20},{"color": "azul","marca": "renault","capacidad": 12},{"color": "rojo","marca": "ford","capacidad": 4},{"color": "gris","marca": "toyota","capacidad": 8}];

let result =  vehiculo.filter(vehiculo => ((vehiculo.capacidad > 10) && (vehiculo.color == "azul")));

console.log(result);