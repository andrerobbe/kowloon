/*
 *
 * Item
 *
 */

function showHover(){
	var itemHover = this.getElementsByClassName('item-hover');
	for ( var i = 0; i < itemHover.length; i++ ){
		itemHover[i].classList.add('active');
	}
}

function hideHover(){
	var itemHover = document.getElementsByClassName('item-hover');
	for ( var i = 0; i < itemHover.length; i++ ){
		itemHover[i].classList.remove('active');
	}
}

function eventHandlerItem(){
	hideHover();
	var itemSection = document.getElementsByClassName('item-section');
	var itemImg = document.getElementsByClassName('item-img');

	for ( var i = 0; i < itemSection.length; i++ ){
		itemImg[i].addEventListener("mouseover", hideHover);
		itemImg[i].addEventListener("mouseover", showHover);
	}
}

setInterval(hideHover, 2000); //remove hovers every 2 sec
eventHandlerItem();