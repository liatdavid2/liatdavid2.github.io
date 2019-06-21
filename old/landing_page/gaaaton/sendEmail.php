<?php
class sendEmail {
    private $sendTo;
    private $sentFrom;
    private $sendTitle;
    private $sendContant;
    private $risult;
            
    function __construct($to,$from,$title,$contant) {
        $this->sendTo = $to;
        $this->setSentFrom($from);
        $this->sendTitle = $title;
        $this->sendContant = $contant;
    }
    
    function setSentFrom($sentFromEmail) {
        if(filter_var($sentFromEmail, FILTER_VALIDATE_EMAIL)) {
            $this->sentFrom = $sentFromEmail;
        }
        else {
            $this->risult .= ' no valid sender';
        }        
    }
    
    function sendEmail() {
		$subject = $this->sendTitle;
		$message = '
                    <html dir="rtl">
                    <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                    <title>'.$this->sendTitle.'</title>
                    </head>
                    <body>
                    <h2 style="text-align: right;">'.$this->sendTitle.'</h2>
                    '.$this->sendContant.'
                    </body>
                    </html>
		';
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

		$headers .= 'From: eran@atarix.co.il' . "\r\n";
		$headers .= 'Cc: '.$to.'' . "\r\n";
                $to = $this->sendTo;
		mail($to, $subject, $message, $headers); 
                $this->risult='success';
                return $this->risult;
    }
    
    function runSendMail(){
        if($this->risult!=''){
            return $this->risult;
        }
        else{
            $this->sendEmail();
            return $this->risult;
        }        
    }

}
?>
        