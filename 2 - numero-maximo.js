//encontrar el numero mayor de una lista array

//definir una variable + nombre + contenedor
let numeros = [5, 10, 15, 60, 8]
let numeroMax = 0
//definir una variable + nombre tamano + longitud de la variable numeros
let tamano = numeros.length

//ciclo for + definir una variable con una inicializacion de la posicion 0 + dar tantas interasiones (tamano) tenga nuestro arrary desde la posicion 0 i<tamano + i++ una vez hagas una interasion avanzas una posicion i
for(let i=0; i<tamano; i++) {
    //si numero maximo es menor que numero actual
    if(numeroMax < numeros[i]) {
        numeroMax = numeros[i]
    }
}

console.log(numeroMax)

//formar corta
let maximo = Math.max(5, 10, 15, 60, 8)
console.log(maximo)