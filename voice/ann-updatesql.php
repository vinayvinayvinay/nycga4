<?php

include("/var/www/nycga.net/web/wp-config.php");
//include("/var/www/nycga.net/web/wp-includes/post.php");


  $currentseq = @$_GET['currentseq'] ;
  $datetime = @$_GET['datetime'] ;
  $currentvm = @$_GET['currentvm'] ;
  $callername = @$_GET['callername'] ;
  $userid1 = @$_GET['userid'] ;
  $callerid = @$_GET['callerid'] ;
  
  if ($userid1 == "") {
  $userid1 = "7136";
  }

  if ($callername == "") {
  $callername = "Anonymous";
  }
  
  $titlepost = "Voice Message from $callername at $datetime";
  $wavlink = "<embed src='$currentvm' autostart=false loop=false><br><a href= $currentvm target='_blank'>Download Voice File</a><br><br><i>This post was generated by the NYCGA Voice Services Toll Free Service at 1-855-203-7763.  Add your mobile phone number to your account profile and call in for personalized services.</i>";
  $contentpost = "$wavlink";
  
  switch_to_blog(5);
  
// Create post object in wordpress
  $my_post = array(
     'post_title' => $titlepost,
     'post_content' => $contentpost,
     'post_status' => 'publish',
     'post_author' => $userid1,
     'post_category' => array(1049),
	 'tags_input' => 'voice'
  );

// Insert the post into the database
  wp_insert_post( $my_post );
  
  
//connect to your database ** EDIT REQUIRED HERE **
mysql_connect(constant("DB_HOST"),constant("DB_USER"),constant("DB_PASSWORD")); //(host, username, password)

//specify database ** EDIT REQUIRED HERE **
mysql_select_db(constant("DB_NAME")) or die("Unable to select database"); //select which database we're using

// Build SQL Query  
mysql_query("INSERT INTO voice_log (currentseq, datetime, currentvm, callername, userid, callerid)
VALUES ('$currentseq', '$datetime', '$currentvm', '$callername', '$userid1', '$callerid')");


?>