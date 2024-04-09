<?php
// add a class to connect with mysql and add methods
class mysqlConnection
{
    // add a method to connect with mysql
    public function connect()
    {
        // add a variable to store the connection
        $connection = new mysqli('localhost', 'root', 'Admin12345', 'SqlInjectionTestDB');
        // return the connection
        return $connection;
    }

    // method to close the connection
    public function close($connection)
    {
        // close the connection
        $connection->close();
    }
}
?>