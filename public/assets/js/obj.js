// // var libraryName = "lib1";

// //creating a new object
// var person = new Object();

// //giving properties to the object person
// person["firstname"] = "Sarah";//primitve string property
// person["lastname"] = "Peter";

// var firstNameProperty = "firstname";

// // console.log(person);
// // console.log(person[firstNameProperty]);

// console.log(person.firstname);//looking for property using the dot
// console.log(person.lastname);

// object address sitting inside object person
// person.address = new Object();//object property
// person.address.street = "Moi Avenue";
// person.address.city = "Nairobi";

// console.log(person.address.city);
// console.log(person.address.street);
// console.log(person["address"]["city"]);
// console.log(person["address"]["street"]);


// #2 way of calling an object
var city = new Object()

console.log(city);

city.name = "Nairobi"

console.log(city.name)
// #1 way of calling an object
var user = {};
console.log(user);

var user = {
	firstname:"Tony",
	lastname:"Alicia",
	address:{
		street:"RedHill Rd",
		town:"Gachie"
	}
};
// console.log(user);
function greet(person){
	console.log("Hi " + person.firstname);
}

greet(user);

greet({
	firstname:"Reid",
	lastname:"Losa"
});

