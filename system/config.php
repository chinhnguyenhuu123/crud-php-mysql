<?php
class Config{
    protected $db=array();
    public function __construct(){
        $dsn = "mysql:host=localhost;dbname=product-pdo;charset=utf8mb4";
        $options = [
        PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
        ];
        try {
        $this->db = new PDO($dsn, "root", "", $options);
        } catch (Exception $e) {
        error_log($e->getMessage());
        exit('Something weird happened'); //something a user can understand
        }
            }
        }
?>