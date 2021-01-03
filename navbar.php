<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav id="header-navbar" class="navbar navbar-expand-lg py-4">
        <div class="container">
            <div class="anim">
                <a href="/">
                    <img class="rounded-circle mr-4 border border-danger p-1" width="50" height="50" src="img/logo.png"
                        alt=""></a>
            </div>
            <a class="navbar-brand d-flex align-items-center text-white font-weight-bolder mb-0 h3"
                href="/">TRAVEL.com</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header"
                aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
                <span class="lnr lnr-menu"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-nav-header">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="activities.php">Activites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="thingstodo.php">Thigs to do</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="accomodation.php">Accomodations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <?php
                            if(isset($_SESSION['username'])){
                                echo '<a type="button" class="btn btn-danger text-light"><i class="fa fa-user-circle" aria-hidden="true"></i> Welcome ' .$_SESSION["name"]. '</a>
                                <a href="logout.php" type="button" class="btn log-btn btn-sm btn-danger"><i class="fa fa-power-off" aria-hidden="true"></i></a>';
                               
                            
                        
                         }
                        else{
                            echo'<a href="login.php" type="button" class="btn log-btn  btn-danger">Login</a>
                            <a href="register.php" type="button" class="btn log-btn  btn-danger">Signup</a>';

                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>