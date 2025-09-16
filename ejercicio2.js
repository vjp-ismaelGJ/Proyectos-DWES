// function calcularPrecio(unidades, precio) {
//     console.log("Precio Final: " + (unidades*precio))
// }

// calcularPrecio(5,3);

// let funcionSumarUnoMas = function(valor){
//     return valor++;
// }

// console.log(funcionSumarUnoMas(4));

// //PRUEBA 6
// let funcionLambda = (arg1, arg2) => {return arg1 + arg2}

// console.log(funcionLambda(3, 2));

// let funcionProcesadoraPar = function (arg1, arg2, funcionProcesadora) {
//     return funcionProcesadora(arg1, arg2);
// }

// console.log("Esta vez procesamos una función (de 3 y 2): " + 
//     funcionProcesadoraPar(3, 2, (n1,n2) => {return n1+n2})
// )

// console.log("Esta vez procesamos una función (de 3 y 2): " + 
//     funcionProcesadoraPar(3, 2, (n1,n2) => n1*n2)
// )

//PRUEBA 6.2
let procesaTres = function (arg1, arg2, arg3, funcionProcesadora) {
    return funcionProcesadora(arg1,arg2,arg3);
}

console.log("Suma (2,5,4): " + procesaTres(2,5,4, (n1,n2,n3) => {return n1+n2+n3}));
console.log("Mayor: " + procesaTres(2,5,4, ));

console.log("Suma y Division ((1º + 3º)/2º): " + procesaTres(2,5,4, (n1,n2,n3) => {return (n1+n3)/n2}));