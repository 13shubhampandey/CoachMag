<?php

function CheckSpam($message){

	$MessageArray = explode(" ", $message);
            //Get SPAM words from file and store them in an array
            $SpamWords = file_get_contents('spamwords.txt');
            $SpamArray = explode("\n", $SpamWords);
            //Cycle through all the words in the message
            foreach($MessageArray as $word){
                //Check the word for SPAM words, if it is don't send the email
                if(in_array($word, $SpamArray)){
                    return false;
                }
            }

	return true;
}
