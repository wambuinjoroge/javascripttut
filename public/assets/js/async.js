
function clickHandler(){
	console.log('click event!');
}

function waitThreeSeconds(){
	var ms = 3000 + new Date().getTime();
	while (new Date() < ms){}
		console.log('finished function');
}

//listen for click event

document.addEventListener('click',clickHandler);

waitThreeSeconds();
console.log('finished execution');