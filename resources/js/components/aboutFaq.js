/*
 *
 * About FAQ
 *
 */
 
function toggleQuesion(){
	var question = this;
	var arrow 	 = this.querySelector('div');

	question.classList.toggle('active');

	if ( arrow.classList.contains('arrow-right') ){
		arrow.className = "arrow-down";
	}
	else if ( arrow.classList.contains('arrow-down') ){
		arrow.className = "arrow-right";
	}
}

function eventHandlerAboutFaq(){
	var question = document.querySelectorAll(".about-faq .question");

	for ( var i = 0; i < question.length; i++ ){
		question[i].addEventListener("click", toggleQuesion);
	}
}

setInterval(eventHandlerAboutFaq, 1000); //every second check for new FAQ