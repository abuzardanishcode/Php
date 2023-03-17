<!-- We can use custom database class.
Code : -->

<?php 
Class Database
{
    private $user;
    private $host;
    private $pass;
    private $db;

    public function __construct()
    {
        $this->user = "root";
        $this->host = "localhost";
        $this->pass = "Hrhk@9090";
        $this->db = "login_page";
    }
    public function connect()
    {
        $link = mysqli_connect($this->user, $this->host, $this->pass, $this->db);
        if($link){
            
        }
        return $link;
    }
}

$conn =new Database();

echo $conn->connect();

?>