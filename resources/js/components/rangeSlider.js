/*
 *
 * rangeSliders
 *
 */


function getVals(){
	// Get slider values
	var parent = this.parentNode;
	var sliders = parent.getElementsByTagName("input");
	var slide1 = parseFloat( sliders[0].value );
	var slide2 = parseFloat( sliders[1].value );

	// Neither slider will clip the other, so make sure we determine which is larger
	if( slide1 > slide2 ){ var tmp = slide2; slide2 = slide1; slide1 = tmp; }

	var displayValOne = parent.getElementsByClassName("rangeValue-1")[0];
	var displayValTwo = parent.getElementsByClassName("rangeValue-2")[0];
	displayValOne.innerHTML = '&euro; ' + slide1;
	displayValTwo.innerHTML = '&euro; ' + slide2;
}

window.onload = function(){
	var sliderSections = document.getElementsByClassName("range-slider");
	for( var i = 0; i < sliderSections.length; i++ ){

		var sliders = sliderSections[i].getElementsByTagName("input");

        for( var y = 0; y < sliders.length; y++ ){
			if( sliders[y].type ==="range" ){
				sliders[y].oninput = getVals;
				// Manually trigger event first time to display values
				sliders[y].oninput();
			}
		}
	}
}