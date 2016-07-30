<?php

$testUsers = testUsers();

switch($testUsers) {
    
    case "no_id":
        $userList = showUsers('all');
        $heading = "Choose a movie-goer";
        break;
    
    case "invalid_id":
        $userList = showUsers('all');
        $heading = "Choose a movie-goer";
        break;
    
    case "id_set":
        $userList = showUsers('others');
        $heading = showUsers('current');
        break;
    
}
?>

<nav class="navigation">
    <div class="select_users">
        <?php echo $heading; ?>
    </div>
    
    <div class="profile logged_out"></div>
    <div class="admin_button"></div>
    
   
    <?php
        echo $usersList;
    ?>
    
    <ul class="admin_menu">
        <li><a href="admin.php?page=users">Manage users</a></li>
        <li><a href="admin.php?page=movies">Manage movies</a></li>
    </ul>
</nav>