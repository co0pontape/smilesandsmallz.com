<?php

  /*
  
		This code has been developed by Els . Email : els11@yandex.ru
		
		When I was alone and had nothing I asked 4 a friend 2 help me bear the pain no one came except ... GOD 
		When I needed a breath 2 rise from my sleep no one could help me except .... GOD 
		When all I saw was sadness and I needed answers no one heard me except .... GOD 
		So when I am asked who I give my unconditional love 2 look for no other name except ..... GOD! 
		
		In God I trust .
		
  */

  define("SQL_IP", "68.178.142.117");
  define("SQL_USER", "elsphpwebquiz");
  define("SQL_PWD","Subarusti82#");
  define("SQL_DATABASE","elsphpwebquiz");

  define("DEBUG_SQL","no");

  function Imported_Users_Password_Hash($entered_password,$password_from_db)
  {
      return md5($entered_password);
  }

  @session_start();

  /*
  
		You can upgrade els PHP Web Quiz Free to els PHP Web Quiz Gold version .
		
		visit our web site to learn how to upgrade 
		
		http://www.aspnetpower.com/elsphpwebquiz/index.php?module=download
		http://www.aspnetpower.com/elsphpwebquiz/index.php?module=howto_freegold
  
  
  */
  
?>
