// conditionally show checkboxes
let intDiv = document.getElementById('international');
let countryDiv = document.getElementById('getCountry');

document.getElementById('studentYes')
	.onchange = function () {
		
		intDiv.style.display = this.checked ? 'inline-block' : 'none';
		
}
document.getElementById('studentNo')
	.onchange = function () {

		intDiv.style.display = this.checked ? 'none' : 'inline-block';
		
}

document.getElementById('intYes')
	.onchange = function () {
		
		countryDiv.style.display = this.checked ? 'block' : 'none';
		
}
document.getElementById('intNo')
	.onchange = function () {

		countryDiv.style.display = this.checked ? 'none' : 'block';
		
}