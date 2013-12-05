var str_erreur = '';
var int_countErreurEmpty = 0;
	
function verifFormContact(){
	str_erreur = '';
	int_countErreurEmpty = 0;

	$('.required').each(function(){
		if( $(this).hasClass('required')){
			var str_idInput = $(this).attr('id');
			verifEmpty(str_idInput);
						
			if( $(this).hasClass('email')){
				verifEmail(str_idInput);
			}
		}
	});
	if(str_erreur != ''){
		alert('Erreur dans le formulaire. Veuillez vérifier avoir inscris tous les champs.');
		$('#erreur-container').html(str_erreur).show();
		return false;
	}
	else{
		alert('Merci de votre fidélité.Votre message à été correctement envoyé');
	}	
}


function verifEmail(str_idInput){
	var str_valueInput = trim($('#'+str_idInput).val());
	var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
	
	if ( !regex.test(str_valueInput) ){
		str_erreur += '<p>Adresse Email Invalide </p>';
		$('#'+str_idInput).addClass('warning_red');
	}
	else {
		$('#'+str_idInput).removeClass('warning_red');
		//do nothing
	}
}	

function verifEmpty(str_idInput){
		var str_valueInput = trim($('#'+str_idInput).val());
		
	if (str_valueInput == '' || str_valueInput.length < 3){
		if(int_countErreurEmpty == 0){
			str_erreur += '<p>Un ou plusieurs champs sont vide! </p>';
		}
		$('#'+str_idInput).addClass('warning_red');
		int_countErreurEmpty++;
	}
	else {
		$('#'+str_idInput).removeClass('warning_red');
	}
}

function trim(str_temp){
	return str_temp.replace(/^\s+/g,'').replace(/\s+$/g,'')
}
