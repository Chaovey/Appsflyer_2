<?php
    if (isset($_POST['appId'])) {
        $appId = $_POST['appId'];
        echo "Received appId: " . $appId;
    } else {
        echo "appId not set.";
    }
?>
