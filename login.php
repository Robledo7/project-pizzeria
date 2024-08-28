<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>

<body>



  <?php

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once("config_login.php");
    //https://www.php.net/manual/es/pdo.connections.php
    try {
      // Conexion a la Base de Datos
      $conn = new PDO("mysql:host=" . SERVER_NAME . ";dbname=" . DATABASE_NAME, USER_NAME, PASSWORD);
      //echo "Conexion Exitosa";
      $usr = $_POST['username'];
      $pass = $_POST['password'];
      $hashed_pass = hash('sha256', $pass);

      //"select * from users where (username=$usr or email=$usr) and (active='SI') and (password= $hashed_pass)";

      $sql = "select * from users where (username=:usr or email=:usr) and (active='SI') and (password=:hashed_pass)";
      $stmt = $conn->prepare($sql);
      $stmt->bindValue(':usr', $usr);
      $stmt->bindValue(':hashed_pass', $hashed_pass);
      //https://www.php.net/manual/en/pdostatement.execute.php
      $stmt->execute();
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      if ($row == 0) {
        //echo "Login Incorrecto";
  ?>
        <div class="alert alert-danger">
          <a href="login.html" class="close" data-dismiss="alert">×</a>
          <div class="text-center">
            <h5><strong>¡Error!</strong> Login Invalido.</h5>
          </div>
        </div>

  <?php

      } else {
        //echo "Login Correcto";
        session_start();
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $_SESSION['time'] = date('H:i:s');
        $_SESSION['username']= $usr;
        $_SESSION['logueado'] = true;
        header("location:welcome.php");
  }
    } catch (PDOException $e) {
      echo "¡Error! ";
      die();
    }
  } else {
    exit("Error");
  }



  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>