<?php include "pdo.php"; 
if(isset($_POST["submit"])){
    $user = $_POST["username"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT ); 
  
    $userArray = array(":usr" => $user, ":eml" => $email, ":age" => $age, ":pwd" => $password, ":gnd" => $gender);
  
    $sql = "INSERT INTO `user` (`username`, `email`, `password`,`age`, `gender`)
            VALUES (:usr, :eml, :pwd, :age, :gnd);";
  
    $stmt = $pdo->prepare($sql);
    $stmt->execute($userArray);
    header("location: login.php");
  }
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/aanmeld.css">
    <link rel="shortcut icon" type="image/jpg" href="./img/favicon-16x16.png"/>
    <title>Dinder</title>
  </head>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center" cz-shortcut-listen="true">
    
<main class="form-signin">
  <form method="POST" action="">
    <img class="mb-4 img-fluid" src="./img/favicon.png" alt="">
    <h1 class="h3 mb-3 fw-normal">Meld aan</h1>

    <div class="form-floating">
      <input type="text" name="username" action="username" class="form-control" id="floatingInput" placeholder="Joop">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
        <input type="number" name="age" action="age" class="form-control" id="floatingInput"
            placeholder="18">
        <label for="floatingInput">Age</label>
    </div>
    <div class="form-floating">
      <input type="email" name="email" action="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email adres</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" action="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
    <span for="gender">kies uw geslacht:</span>
      <select name="gender">
        <option name="man">man</option>
        <option name="vrouw">vrouw</option>
      </select>
    </div>
      <p>!!kijk uit: email en gender kan NIET worden veranderd na de aanmelding!!</p>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit" action="submit">meld aan</button>
    <p class="mt-5 mb-3">al een account? log <a href="login.php">hier</a> in</p>
    <p class="mt-5 mb-3 text-muted">© 2020–2021</p>
  </form>
</main>


    
  

</body></html>