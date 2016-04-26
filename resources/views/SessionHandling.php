<?php

if(time() - $_SESSION['timestamp'] > 30) { //subtract new timestamp from the old one
    ?>
    <script>
        alert('15 Minutes over!');
        location.replace("/");
    </script>
<?php
    session_destroy();
    //header("Location: /"); //redirect to index.ph
    exit;
} else {
    $_SESSION['timestamp'] = time(); //set new timestamp
}
