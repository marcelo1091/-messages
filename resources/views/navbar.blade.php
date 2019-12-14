<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Wide Messages</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <?php if(isset($_SESSION['user'])):?>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
        </li>

        </ul>
    </div>
    <?php endif?> 
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <?php if(isset($_SESSION['user'])):?>
                <li class="nav-item">
                    <a class="nav-link" href="/app/auth/logout.php">Wyloguj</a>
                </li>
            <?php else:?>
                <li class="nav-item">
                    <a class="nav-link" href="/resources/views/login.blade.php">Logowanie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/resources/views/register.blade.php">Rejstracja</a>
                </li>
            <?php endif?>  
        </ul>
    </div>
</nav>