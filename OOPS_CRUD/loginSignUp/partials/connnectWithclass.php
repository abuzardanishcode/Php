<?php
// session_start();


define("Db_server", "localhost");
define("Db_user", "root");
define("Db_password", "Hrhk@9090");
define("Db_database", "Bootstrap");
class Database
{

    public $conn;
 

    public function connect()
    {
        try {
            $conn = mysqli_connect(Db_server, Db_user, Db_password, Db_database);
            //var_dump($conn);
            if (!$conn) {
                throw new Exception("Error Processing Request".mysqli_connect_error());

            }
            return $conn;

        } catch (Exception $e) {
            //$e->getMessage();
            die($e->getMessage());
        }
    }
}


/* $myobj=new Database();

echo $myobj->connect();
 */
?>