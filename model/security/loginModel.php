<?php
// Class to do the login of an user using the mysqlConnection file
class loginModel
{
    // Method to do the login of an user
    public function login($user, $password)
    {
        // include MysqlConnection class
        include_once '../../model/mysqlConnection.php';
        // Create a new instance of the mysqlConnection class
        $mysqlConnection = new mysqlConnection();
        // Connect with the database
        $connection = $mysqlConnection->connect();
        // Create a query to get the user with the given user and password
        $query = "SELECT * FROM tb_users WHERE username = '$user' AND userPassword = '$password'";
        // Execute the query
        $result = $connection->query($query);
        // Check if the query returned a row
        if ($result->num_rows > 0) {
            // Return the user if it exists
            return $result->fetch_assoc();
        } else {
            // Return false if the user does not exist
            return null;
        }
    }

    // method to do the login of an user using prepared statements
    public function loginPrepared($user, $password)
    {
        // include MysqlConnection class
        include_once '../../model/mysqlConnection.php';
        // Create a new instance of the mysqlConnection class
        $mysqlConnection = new mysqlConnection();
        // Connect with the database
        $connection = $mysqlConnection->connect();
        // Create a query to get the user with the given user and password
        $query = "SELECT * FROM tb_users WHERE username = ? AND userPassword = ?";
        // Prepare the query
        $stmt = $connection->prepare($query);
        // Bind the parameters
        $stmt->bind_param("ss", $user, $password);
        // Execute the query
        $stmt->execute();
        // Get the result
        $result = $stmt->get_result();
        // Check if the query returned a row
        if ($result->num_rows > 0) {
            // Return the user if it exists
            return $result->fetch_assoc();
        } else {
            // Return false if the user does not exist
            return null;
        }
    }
}