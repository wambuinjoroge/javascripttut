//operators are functions

function salimia(){
	console.log('Hello Tony');
}
salimia();

function greet(name){
	console.log('Hello' + name);
}
greet('Kris');

function greet(name){
	console.log('Hello' + name);
}
greet('Kris');


function greet(name){
	name = name || "<Your name here>"
	console.log('Hello' + name);
}
greet();






// var ab = 3 < 4; //outputs true
// console.log(ab);

// // operators precedence and associativity
//  var re = 2+4*8;
//  console.log(re);

//  var aq = 2, bq = 3, cq = 4;
//  aq=bq=cq;
// //left to right associativity in =
//  console.log(aq);
//  console.log(bq);
//  console.log(cq);

// //coercion
// var co = 'Hello' + 'World';
// console.log(co);

// var ba = '3' + '4'; 
// console.log(ba);

// var ba = 3 + '4'; 
// console.log(ba);

// // Comparison operators

// console.log(3<2<1);
// console.log(1<2<2);

// var a = 0;
// var b = false;
//  if (a !== b) {
//  	console.log('Yes they are equal');
//  }else{
//  	console.log('No they are not equal');
//  }





// var a = 0;

// if (a || a === 0) {
// 	console.log("fd");
// }












// var age = 10;
// var age;

// console.log(age);

// var rim = (5/'7'+3);
// console.log(rim);

// var rime = ('a' * 5);
// console.log(rime);

// var rim = (5*'7'+3);
// console.log(rim);

// function b(){
// 	console.log('Called bee!');
// }
// b();

// console.log(a);

// var a = "Hello World!";
// console.log(a);
// var a = null;
// // a = undefined;


// if (a === undefined) {
// 	console.log('a is undefined')
// }else
// {
// 	console.log('a is defined')
// }


// So you need to understand that we have two types of environments in JS, the global execution content
// (outer environment) and the execution content,how does it work, anytime you run some line of
// code, we have the global part being ran through and then the execution contents 
// depending on which has been invoked first.

// function aa(){
// 	function b(){
// 		var myVar = 2;
// 	console.log(myVar);
// }
	// var myVar = 2;
// 	b();
// }

// var myVar = 1;
// aa();
