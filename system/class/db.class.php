<?php

class ExampleDB extends mysqli {

    private static $instance = null;

    private $user = $config["db1"]["username"];
    private $pass = $config["db1"]["password"];
    private $dbName = $config["db1"]["dbname"];
    private $dbHost = $config["db1"]["host"];

    public static function getInstance() {
        if (!self::$instance instanceof self) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function __clone() {
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }

    public function __wakeup() {
        trigger_error('Deserializing is not allowed.', E_USER_ERROR);
    }

    private function __construct() {
        parent::__construct($this->dbHost, $this->user, $this->pass, $this->dbName);
        if (mysqli_connect_error()) {
            exit('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
        parent::set_charset('utf-8');
    }


    public function method_name($var) {
        $var = $this->real_escape_string($var);
        return $this->query("SELECT * FROM `db` WHERE `col`=".$var);
    }    


}

?>