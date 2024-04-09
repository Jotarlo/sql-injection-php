<!-- create a login form with user and password fields -->
<form action="controller/security/loginController.php" method="post">
    <div class="form-group">
        <label for="user">Usuario:</label>
        <input type="text" class="form-control" id="user" name="user">
    </div>
    <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <?php
    // Check if the error parameter is set
    if (isset($_GET['error'])) {
        // Print an error message
        echo '<div class="alert alert-danger">Usuario o contraseña incorrectos</div>';
    }
    ?>
    <button type="submit" class="btn btn-default">Iniciar Sesión</button>
</form>