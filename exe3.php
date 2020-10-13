<?php
function check_palindrome($string) 
{
  if ($string == strrev($string))
      return ("true");
  
    else
	  return ("false");
}
echo check_palindrome('madam')."\n";
?>