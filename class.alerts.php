<?php

class Alerts {

    // Construct Method: Simply initiate a session.
    public function __construct() {
        session_start();
    }

    // Register a new alert in the queue.
    public static function add($msg, $type = "warning") {
        $_SESSION['alerts'][] = (object) array(
                    "type" => $type,
                    "msg" => $msg
        );
    }

    // Show all alerts registered in the queue.
    public static function show() {
        $root_uri = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
        
        include __DIR__ . "/alert.php";

        if (empty($_SESSION['alerts']))
            unset($_SESSION['alerts']);
    }

}

?>