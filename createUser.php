<?php
    session_start();
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title> S'inscrire</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<!-- Inscritpion des nouveaux utilisateurs -->

<div class="d-flex">
  <div class="col-8">
    <h1 class="text-center mt-4">S'inscrire</h1>

    <form action="actionCreateUser.php" method="post">

        <div class="col-2 offset-5 mt-5">
            <?php 
            if(isset($_SESSION['keep_name'])) 
            { 
            ?>
                <input type="text" class="form-control border-dark text-center" value="<?php echo $_SESSION['keep_name'] ?>" name="name">
            <?php 
                unset($_SESSION['keep_name']);
            } 
            else 
            {
            ?>
                <input type="text" class="form-control border-dark text-center" placeholder="Prénom" name="name">
            <?php
            }
            
                if(isset($_SESSION['name']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['name'] ?></div>
            <?php
                    unset($_SESSION['name']);
                }

                if(isset($_SESSION['no_name']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['no_name'] ?></div>
            <?php
                    unset($_SESSION['no_name']);
                }
            ?>
        </div>

        <div class="col-2 offset-5 mt-3">
            <?php 
            if(isset($_SESSION['keep_lastname'])) 
            { 
            ?>
                <input type="text" class="form-control border-dark text-center" value="<?php echo $_SESSION['keep_lastname'] ?>" name="lastname">
            <?php 
                unset($_SESSION['keep_lastname']);
            } 
            else 
            {
            ?>
                <input type="text" class="form-control border-dark text-center" placeholder="Nom" name="lastname">
            <?php
            }
            
                if(isset($_SESSION['lastname']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['lastname'] ?></div>
            <?php
                    unset($_SESSION['lastname']);
                }

                if(isset($_SESSION['no_lastname']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['no_lastname'] ?></div>
            <?php
                    unset($_SESSION['no_lastname']);
                }
            ?>
        </div>

        <div class="col-2 offset-5 mt-3">
            <?php 
            if(isset($_SESSION['email'])) 
            { 
            ?>
                <input type="text" class="form-control border-dark text-center" value="<?php echo $_SESSION['email'] ?>" name="email">
            <?php 
                unset($_SESSION['email']);
            } 
            else 
            {
            ?>
                <input type="text" class="form-control border-dark text-center" placeholder="Email" name="email">
            <?php
            }
            
                if(isset($_SESSION['email']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['email'] ?></div>
            <?php
                    unset($_SESSION['email']);
                }

                if(isset($_SESSION['no_email']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['no_email'] ?></div>
            <?php
                    unset($_SESSION['no_email']);
                }
            ?>
        </div>

        <div class="col-2 offset-5 mt-3">
            <?php 
            if(isset($_SESSION['password'])) 
            { 
            ?>
                <input type="text" class="form-control border-dark text-center" value="<?php echo $_SESSION['password'] ?>" name="password">
            <?php 
                unset($_SESSION['password']);
            } 
            else 
            {
            ?>
                <input type="text" class="form-control border-dark text-center" placeholder="Mot de passe" name="password">
            <?php
            }
            
                if(isset($_SESSION['password']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['password'] ?></div>
            <?php
                    unset($_SESSION['password']);
                }

                if(isset($_SESSION['no_password']))
                {
            ?>
                    <div class="alert alert-danger" role="alert"><?php echo $_SESSION['no_password'] ?></div>
            <?php
                    unset($_SESSION['no_password']);
                }
            ?>
        </div>

    <div class="col-2 offset-5 mt-3">
            <button type="submit" class="form-control btn btn-primary border-dark text-center">valider</button>
        </div>

    </form>
    </div>
</div>
</body>
</html>

<?php
    session_unset();
?>