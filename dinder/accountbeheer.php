<?php session_start();
include "header.php";
if(empty($_SESSION)){
    header("location: login.php");
}
$query = $pdo->prepare("SELECT * FROM user WHERE email = :email");
$query->bindParam(":email", $_SESSION["email"]);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

if(isset($_POST["submitname"])){
    $user = $_POST["namechange"];

    $userArray = array(":usr" => $user, ":email" => $_SESSION['email']);

    $sql = "UPDATE `user` SET username = :usr WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($userArray);
    
}
if(isset($_POST["submitage"])){
    $age = $_POST["agechange"];

    $userArray = array(":age" => $age, ":email" => $_SESSION['email']);

    $sql = "UPDATE `user` SET age = :age WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($userArray);
}
if(isset($_POST["submitimg"])){
    $image = file_get_contents($_FILES["image"]["tmp_name"]);

    $userArray = array(":img" => $image, ":email" => $_SESSION['email']);

    $sql = "UPDATE `user` SET image = :img WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($userArray);
}
if(isset($_POST["submitpwd"])){
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT ); 

    $userArray = array(":pwd" => $password, ":email" => $_SESSION['email']);

    $sql = "UPDATE `user` SET password = :pwd WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($userArray);

}

 ?>
<div class="py-5"></div>
<div class="py-3"></div>
<h3>welkom <?php getUsername(); ?>!</h3>
<session id="gegevens_eigenaar">
    <div class="container" id="gegevens">
        <div class="row justify-content-between px-2">
            <div class="col-3 text-center">
                <h4>naam:</h4>
                <p><?php getUsername(); ?></p>
                <form method="POST">
                    <input type="text" name="namechange"></input>
                    <div class="p-1"></div>
                    <input type="submit" class="btn btn-warning" name="submitname"></input>
                </form>
                <div class="py-2"></div>
                <h4>profielfoto:</h4>
                <?php profilepic(); ?><div class="py-1"></div>
                <form method="POST" enctype="multipart/form-data">
                    <input type="file" name="image" id="image"></input>
                    <div class="p-1"></div>
                    <input type="submit" class="btn btn-warning" name="submitimg"></input>
                </form>
                <div class="py-1"></div>
            </div>
            <div class="col-3 text-center">
                <h4>Leeftijd:</h4>
                <p><?php getAge();;?></p>
                <form method="POST">
                    <input type="number" name="agechange"></input>
                    <div class="p-1"></div>
                    <input type="submit" class="btn btn-warning" name="submitage"></input>
                </form>
                <div class="py-2"></div>
                <h4>Wachtwoord wijzigen</h4>
                <form method="POST">
                    <input type="password" name="password"></input>
                    <div class="p-1"></div>
                    <input type="submit" class="btn btn-warning" name="submitpwd"></input>
                </form>
            </div>
            <div class="col-3 text-center">
                <h4>email:</h4>
                <p><?php echo $result["email"]; ?></p>
                <div class="py-2"></div>
                <h4>geslacht:</h4>
                <p><?php echo $result["gender"]; ?></p>
            </div>
        </div>
    </div>
</session>
<div class="py-2"></div>
<session id="uitloggen">
    <div class="container">
        <div class="row justify-content-end">
            <div class="text-center col-3">
                <a href="dogs.php"><button type="button" class="btn btn-warning">Honden</button></a>
                <a href="logout.php"><button type="button" class="btn btn-warning">log uit</button></a></div>
        </div>
    </div>
</session>
<div class="py-2"></div>
<?php include "footer.php"; ?>