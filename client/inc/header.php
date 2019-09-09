<header>
        <nav id="myNav" class="navbar navbar-expand-lg navbar-light border-bottom border-dark">
            <a class="navbar-brand" href="index.php">BBall Rec</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item <?php echo $home ?>">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item <?php echo $teams ?>">
                        <a class="nav-link" href="teams.php">Teams</a>
                    </li>
                    <li class="nav-item <?php echo $register ?>">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>