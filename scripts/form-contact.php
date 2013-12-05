<?php
	//var_dump($_POST);

	$erreur = 0;

    $str_nom = htmlentities($_POST['form-contact-nom']);
    $erreur = verifEmpty($str_nom);

    $str_prenom = htmlentities($_POST['form-contact-prenom']);
    $erreur = verifEmpty($str_prenom);
    
    $str_civilite = htmlentities($_POST['form-contact-civilite']);
    $erreur = verifEmpty($str_civilite);
    
    
    $str_fonction = htmlentities($_POST['form-contact-fonction']);
    
    $str_email = htmlentities($_POST['form-contact-email']);
    $erreur = verifEmpty($str_email);
    $erreur = verifEmail($str_email);
    
    $str_telephone = htmlentities($_POST['form-contact-telephone']);
    
    $str_societe = htmlentities($_POST['form-contact-societe']);    

    
    
    
    $int_infos = htmlentities($_POST['form-contact-infos']);
    //echo $int_infos;
	if($int_infos != 'on'){
		$int_infos = 0;
		$str_info = 'Le client ne souhaite pas recevoir plus d\'informations.';	
	}
	else{
		$str_info = 'Le client souhaite recevoir plus d\'informations.';	
	}
	
	$int_demo = htmlentities($_POST['form-contact-demo']);
	if($int_demo != 'on'){
		$int_demo = 0;
		$str_demo = 'Le client ne souhaite pas avoir une démonstration.';	
	}
	else{
		$str_demo = 'Le client souhaite avoir une démonstration.';	
	}
	$int_autre = htmlentities($_POST['form-contact-autre']);
	if($int_autre != 'on'){
		$int_autre = 0;
		$str_autre = 'Le client ne souhaite pas d\'autres informations.';	
	}
	else{
		$str_autre = 'Le client souhaite d\'autres informations.';	
	}

       
    
    $str_message = addslashes($_POST['form-contact-message']);

    if($erreur == 0){
		require_once("phpmailer/class.phpmailer.php");
		$mail = new PHPmailer();
		//$mail->IsSMTP();
		$mail->IsHTML(true);
		//$mail->SMTPAuth = true;     // turn on SMTP authentication 
		//$mail->Host='mail.sd2i.net';
		//$mail->Username = "qduval@broadpeak.fr";
		//$mail->Password = "hahaha";
		$mail->From=$str_email;
		$mail->FromName = $str_nom.' '.$str_prenom;
		$mail->CharSet = 'utf-8';
		//$mail->SetLanguage('lang-fr');
		//$mail->AddAddress('qduval@broadpeak.fr');
		//$mail->AddAddress('syfer016@msn.com');
		//$mail->AddAddress('talorend@broadpeak.fr');
		$mail->AddAddress('contact@algoquest.com');
		 
		//$mail->AddAddress('dmontembault@broadpeak.fr');
		$mail->Subject='Contact';
		$mail->Body='<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head><body style="background-color:white;">
						<style>
							a { color:#1b3874; text-decoration:none; }
							#pink {color: #1b3874; }
							#pink a { color:#1b3874; text-decoration:none; }
						</style>
						<div style="background-color:white; width: 800px; margin-bottom: 20px; padding-left:20px; font-size: 12px; color:#828D9C; font-family:\'Arial\';">
							
							<div style="text-align: center; margin-bottom:25px; padding-bottom:15px; border-bottom:6px solid #1b3874;">	
								<img src="http://algoquest.broadpeak.pro/images/client-logo-new.jpg" alt="Algoquest Logo" style="margin-top: 25px;">
								<br/>
							</div>
							
							Bonjour,<br /><br/>
							Vous venez de recevoir une demande de contact sur le site algoquest.com.<br/>Voici les informations de la personne:<br/><br/>
                            
                            Civilité : <span id="pink">'.$str_civilite.'</span><br/>
                            Nom : <span id="pink">'.$str_nom.'</span><br/>
                            Prénom : <span id="pink">'.$str_prenom.'</span><br/><br/>
                            Email : <span id="pink">'.$str_email.'</span><br/>

                            Fonction : <span id="pink">'.$str_fonction.'</span><br/>
                            Societe : <span id="pink">'.$str_societe.'</span><br/><br/>
                            
                           	<span id="pink">'.$str_demo.'</span><br/>
                            <span id="pink">'.$str_info.'</span><br/>
                            <span id="pink">'.$str_autre.'</span><br/><br/><br/>
                            
                            Message : <br/><div style="color:#1b3874; text-indent:10px;">'.$str_message.'<br/></div> 
                            
							<br/><br/> 
							</div></br>';

		if(!$mail->Send()){
		  echo $mail->ErrorInfo; 
		}
		else{
		  //echo 'Mail envoyé avec succès';
		}
		$mail->SmtpClose();
		unset($mail);


        $page = $_SERVER["HTTP_REFERER"];
		//echo '<br/><br/><br/><br/>'.'PAGE : '.$page.'<br/><br/><br/><br/>';
        header('Location: '.$page);
    }
	





	function verifEmail($email) { 
		$preg='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#'; 
		if(preg_match($preg,$email)) 
			return 0; 
		else 
			return 1; 
	}
	
	function verifEmpty($value){  
		if(trim($value) != '' && strlen($value)>3) 
			return 0; 
		else 
			return 1; 
	}



?>
