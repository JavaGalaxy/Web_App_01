<?php

// Called in navigation.inc.php

function showUsers() {
 
   global $db;
   
   switch($data) {
      case "all":
         $stmt = $db->prepare("SELECT * FROM `movie_goers` ORDER BY `firstname`");
         $tag = "li";
         break;
      
      case "current":
         $stmt = $db->prepare("SELECT `firstname` FROM `movie_goers` WHERE `user_id` = ?");
         $stmt->bind_param('i', $userID);
         $tag = "h2";
         break;
      
       case "others":
         $stmt = $db->prepare("SELECT * FROM `movie_goers` WHERE `user_id` != ? ORDER BY `firstname`");
         $stmt->bind_param('i', $userID);
         $tag = "li";
         break;         
   }
   
    
    $stmt->bind_result($id, $firstname, $lastname);
    $stmt->execute();
 
    
       $output = "<ul class='users_menu'>";
       while ($stmt->fetch()) {
            $firstname = htmlentities($firstname, ENT_QUOTES, "UTF-8");
            $lastname = htmlentities($lastname, ENT_QUOTES, "UTF-8");
            $output.= "<li><a href='index.php?user_id=$id'>$firstname $lastname</a></li>"; 
       }
       $output.= "</ul>";
       
       $stmt->close();
       
       return($output);
}

?>