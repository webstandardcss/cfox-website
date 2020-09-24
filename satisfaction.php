<?php 
 $to = "fox@cfoxlawoffice.com" ; 
 $from = $_REQUEST['Email'] ; 
 $name1 = $_REQUEST['FName'];
 $name2 = $_REQUEST['LName'] ;
 $phone = $_REQUEST['Phone'] ;
 $headers = "From: $from"; 
 $subject = "Customer Satisfaction Survey"; 
 
 $fields = array(); 
 $fields{"comMethod"} = "Preferred Communication Media";
 $fields{"FName"} = "First Name";
 $fields{"LName"} = "Last Name"; 
 $fields{"Address"} = "Address";
 $fields{"City"} = "City";
 $fields{"State"} = "State";
 $fields{"Zip"} = "Zip Code";
 $fields{"Email"} = "Email"; 
 $fields{"Phone"} = "Phone";
 $fields{"Comments"} = "Comments";
 $fields{"q1"} = "Professionalism";
 $fields{"q2"} = "Responsiveness";
 $fields{"q3"} = "Understand my needs";
 $fields{"q4"} = "Rate for services";
 $fields{"q5"} = "Use us again";
 $fields{"q6"} = "Recommend us to others";
 $fields{"q7"} = "Overall satisfaction";
 
 $body = "We have received the following information:\n\n"; foreach($fields as $a => $b){ 	$body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
 
 $headers2 = "From: noreply@cfoxlawoffice.com"; 
 $subject2 = "Customer Satisfaction Survey"; 
 $autoreply = "Thank you for completing our Customer Satisfaction Survey. We appreciate your business and look forward to working with you in the future. If you have any questions, please call us or visit our website at http://www.cfoxlawoffice.com";
 
 if($from == '') {print "You have not entered an email, please go back and try again";} 
 else {
 }
 if($name1 == 1) {print "You have not entered a first name, please go back and try again";}
 else { 
 if($name1 == '') {print "You have not entered a first name, please go back and try again";} 
 else {
 if($name2 == '') {print "You have not entered a last name, please go back and try again";}
 else {
 if($phone == '') {print "You have not entered a name, please go back and try again";} 
 else {
 $send = mail($to, $subject, $body, $headers); 
 $send2 = mail($from, $subject2, $autoreply, $headers2); 
 if($send) 
 {header( "Location: http://www.cfoxlawoffice.com/index.html" );} 
 else 
 {print "We encountered an error sending your mail, please notify webmaster@cfoxlawoffice.com";}
     }
   }
  }
}
?>