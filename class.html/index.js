//var ,let, const
//type of scope
//global scope
//local scope
var a=90
console.log(a)
//terminalcmd: node index.js
//redeclaration
//reassignment
//hoisting
//var declaration
//type of scope
var globalVar='I am global'
console.log(globalVar)
function localVar(){
    var localVar1='I, local with var'
    console.log(localVar1)
    console.log(globalVar)
}
//console.log(localVar1)
localVar()

//redeclaration in var

function reDec(){
    var t=232
    var t=23;
    console.log(t)  //redeclaration is possible with var declaration
}
reDec()



//const declaration

const globalLet1='I am global Let'
console.log(globalLet1)
function globalLetFun1(){
    const localLet1='im local let'
    console.log(localLet1)
}
globalLetFun1()

//let redeclaration

function j(){
    let h=3
    //let h=343;
    console.log(h) //redeclaration is not possible
}
j()


let number=23
let name='test'
let isActive=true
let user=null
let age;
let person={
    name1:'test',
    age:32
}
let num=[2,2,3]
console.log('data type', typeof(number))

//operators
let a=34
let b=40

//arithamatic operator


let num1=4;
let num2=10;
console.log('addition',num1+num2)
console.log('subtraction',num1-num2)
console.log('multiplication',num1*num2)
console.log('division',num1/num2)
console.log('modulus',num1%num2)
console.log('increment',num1++)
console.log('decrement',num1--)
console.log('exponential',num1**2)

//comparison operator
console.log('is num1> num2',num1>num2)
console.log('is num1< num2',num1<num2)
console.log('is num1== num2',num1==num2)

//show details

function show(){
    alert(user.displayInfo())
} 

const square =x=>x*x;

const greet=()=>{

}