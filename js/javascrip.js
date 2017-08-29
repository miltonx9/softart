// JavaScript Document
$(document).ready(function(e) {
	 
$('#conteudo5').hide();	
$('#lado5').hide();	

 $('#ver2').hide();

$('#enviar').click(function(){
	 $('#ver2').show();
	$('#some').hide();	
	
	
	})	
$('#volta').click(function(){
	$('#ver2').hide();
	$('#some').show();	
	
	
	})	


$('#proximo').click(function(){
	 $('#lado4').slideUp();
	 $('#lado5').show();	
	
	
	})	
$('#voltar').click(function(){
	 $('#lado4').show();
	 $('#lado5').hide();	
	
	
	})
	

	
       $('.carosel').jCarouselLite({
		 btnNext:".next",
		 btnPrev:".prev",
		 auto:5000,
		 speed:5000,
		 visible:1,
		 
		 
		 
		 
		 })



});