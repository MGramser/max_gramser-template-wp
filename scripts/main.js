jQuery(document).ready(function(){
	
})

window.onscroll = function(){
	jQuery('#top').css('top', jQuery(document).scrollTop() * -1 / 2 -20)
}