let nikElement = document.querySelector('#nik');
let nameElement = document.querySelector("#name");
let oldName;

function updateNameElementFromSelectedOption() {
	try {
		let optionElementClassname = parseOptionElementClassname(nikElement.value);

		let selectedOptionInnerText = getSelectedOptionInnerTextElementFromClassname(optionElementClassname);

		updateNameElementBySelectedOptionValue(selectedOptionInnerText); 
		nameElement.setAttribute('disabled', 'true');
	}
	catch(err) {
		nameElement.removeAttribute("disabled");
	} 
}

function parseOptionElementClassname(nikValue) {
	return "option-" + nikValue;
}

function getSelectedOptionInnerTextElementFromClassname(className) {
	let selectedOptionElement = document.querySelector(`.${className}`);

	if (selectedOptionElement == null) throw "class name doesn't exist";

	return selectedOptionElement.innerText;
}

function updateNameElementBySelectedOptionValue(selectedOptionInnerText) {
	nameElement.value = selectedOptionInnerText;
}

nikElement.addEventListener("change", function() {
	updateNameElementFromSelectedOption();
});

nikElement.addEventListener("keyup", function() {
	updateNameElementFromSelectedOption();
});