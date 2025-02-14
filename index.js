// ESLint Issues: Unused variable, semicolon missing, var usage instead of let/const, and console.log usage
var myVar = "Hello, World!" // Missing semicolon, using var instead of let/const

function sayHello() {
  console.log(myVar) // Missing semicolon
}

sayHello()
