$(document).ready(function() {
     
alert("Hurra");

//Adds favorite to the profile
function add_favorite(input){
	
	
	
};

//Removes favorite from the profile
function remove_favorite(input){
	input.remove();
};

$(fa-heart).click(add_favorite($(this)));

$(fa-minus-circle).click(remove_favorite($(this)));


});