<?php

//Called in navigation.inc.php

function testUsers() {
    global $db, $userID;
    
    if (!isset($userID)) {
        return ("no_id");
    }
    
    $stmt = $db->prepare("SELECT * FROM `movie_goers` WHERE `user_id` = ?");
    $stmt->bind_param('i', $userID);
    $stmt->execute();
    $stmt->store_result();
    $numrows = $stmt->num_rows;
    $stmt->close();
    
    if ($numrows<1){
        return("invalid_id");
    } else {
        return("id_set");
    }
}

?>