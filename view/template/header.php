
<!-- Generate a navbar using bootstrap css framework -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Home</a>
        </div>
        <ul class="nav navbar nav-pills">
            <!-- if session is empty show login option else show signout option -->
            <li><a href="/index.php?view=login">Iniciar Sesión</a></li>
            <li><a href="/index.php?view=signout">Cerrar Sesión</a></li>

        </ul>
    </div>
</nav>
<!-- End of navbar -->