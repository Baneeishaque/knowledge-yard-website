<?php
function print_navigation($active_tab) {
    
    if ($active_tab == 'Registration') {
        echo '<li> <a href="login.php"><b>Login</b></a></li>';
    }
    
    else if ($active_tab == 'Login') {
        
        echo '<li> <a href="registration.php"><b>Registration</b></a></li>';
    }
    
    echo '<li> <a href="index.html"><b>Back</b></a></li>';
    
}
