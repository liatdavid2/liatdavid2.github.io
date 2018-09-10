<?php
    header('Content-Type: text/html; charset=utf-8');
    if($_POST['subject']){
        if($_POST['Name']!='' && $_POST['Email']!=''){
            include_once 'sendEmail.php';
            $to = $_POST['to'];
            $title = $_POST['Name'].'מעניין ב: '.$_POST['subject'].date("H:i:s d-m-Y");
            $contant .= '<b>שם:</b> '.$_POST['Name'].'<br />';
            $contant .= '<b>טלפון:</b> '.$_POST['Phone'].'<br />';
            $contant .= '<b>מייל:</b> '.$_POST['Email'].'<br />';
            $send = new sendEmail($to,$from,$title,$contant);
            $send->sendEmail();
            echo '<script>alert(\'פנייתך התקבלה בהצלחה נשוב בהקדם\'); window.location=\''.$_POST['next'].'\';</script>';
        }
        else{
            echo '<script>alert(\'חובה למלא שם ומספר טלפון\'); window.location=\''.$_POST['next'].'\';</script>';
        }
    }
?>