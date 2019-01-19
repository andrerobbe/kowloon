/*
 *
 * formValidator
 *
 */

function validateEmail(email) {
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}

function validator(){
	var email 		= document.getElementById('email-field');
	var emailError 	= document.getElementById('email-error');
	var msg 		= document.getElementById('msg-field');
	var msgError	= document.getElementById('msg-error');

	var isValid = validateEmail(email.value);
	var isTxt	= msg.value;

	//Email error msg
	if ( !isValid ){
		emailError.innerHTML = '* Fill in a correct e-mail address.'
	} else {
		emailError.innerHTML = '';
	}

	//Textarea error msg
	if (msg.value == ''){
		msgError.innerHTML = '* Write a message.'
	}
	else{
		msgError.innerHTML = '';
	}

	//if valid, browse to homepage
	if ( isValid && msg.value != ''){
		window.location.replace("/");
	}
}


function eventHandlerFormValidator(){
	var sendBtn = document.getElementById('send-btn');
	if(sendBtn){ sendBtn.addEventListener("click", validator);}
}

eventHandlerFormValidator();