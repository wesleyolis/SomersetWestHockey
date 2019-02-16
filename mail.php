<?php
		
		$to = 'ken@foresightpublications.co.za';
		$subject = 'Website-Form: '.$_POST['subject'];
		$from = $_POST['from'];
		$redir = $_POST['redir'];
		$form = $_POST['form'];
	
		if (isset($from) && isset($redir) && isset($form))
		{
			$headers = "From: $from  \n";
			$headers .= "Reply-To: $from \n";

			//Creat message body with all form fields
			$message ="";
			$message .=("Reply-To: ".$from."\n-----------------\n");
			foreach($_POST as $key => $value)
			if($key != 'subject' & $key != 'from' & $key != 'redir' & $key != 'form' & strtolower($value)!='submit')
			$message .= $key.': '.$value."\n\n";
			
			if (empty($from)){
			$errormsg='Error! Please complete all the fields to continue';
			header("Location: $form");
			}else{
				if (isset($from)){
					$sent = mail($to,$subject,$message,$headers);
					if($sent)
					{header("Location: $redir");}
					else
					{	$errormsg =  "Could not send message,please try again!";	
						header("Location: $form");
					}			 
			
				}
			}
		}
		else{
		
		?>Error missing basic form information.<br/>
		Namely the hidden Fileds: redir or form<br/>
		and from filed for clients email address.
		<?php
		
		}
?>

