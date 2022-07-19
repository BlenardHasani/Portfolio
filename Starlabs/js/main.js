var element=document.querySelector('.navbar .menu');
var element2=document.querySelector('.menu-btn');

function menuToggle() {
	element.classList.toggle('active');
	element2.classList.toggle('active');
}


var modalBtn=document.querySelector('.login-btn');
var modalBg=document.querySelector('.login-modal');
var modalClose=document.querySelector('.modal-close');

modalBtn.addEventListener('click',function(){

	modalBg.classList.add('modal-active');
	
});

modalClose.addEventListener('click',function(){
	modalBg.classList.remove('modal-active');
})