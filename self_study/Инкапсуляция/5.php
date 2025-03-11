<?php
session_start();
class SessionManager {
    private $session_password;
    public $session_username;
    function __construct($session_username, $session_password) {
        $this->session_username = $session_username;
        $this->session_password = $session_password;
        $_SESSION['username'] = $session_username;
        $_SESSION['password'] = $session_password;
    }
    public function getname() {
        print($this->session_username);
    }
    private function get_session_password() { 
        print($this->session_password);
    }
}
$session = new SessionManager("nnn", 123);
$session->getname();
