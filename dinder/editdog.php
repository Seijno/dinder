<?php session_start();
include "header.php";
if(empty($_SESSION)){
    header("location: login.php");
}
$query = $pdo->prepare("SELECT * FROM dogs WHERE ID = :id");
$query->bindParam(":id", $_POST["id"]);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

if(isset($_POST["submitname"])){
    $dogname = $_POST["namechange"];

    $userArray = array(":name" => $dogname, ":id" => $_POST['id']);

    $sql = "UPDATE `dogs` SET name = :name WHERE ID = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($userArray);
    
}
if(isset($_POST["submitage"])){
    $age = $_POST["agechange"];

    $userArray = array(":age" => $age, ":id" => $_POST['id']);

    $sql = "UPDATE `dogs` SET age = :age WHERE ID = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($userArray);
}

if(isset($_POST["submitimg"])){
    $image = file_get_contents($_FILES["image"]["tmp_name"]);

    $userArray = array(":img" => $image, ":id" => $_POST['id']);

    $sql = "UPDATE `dogs` SET image = :img WHERE ID = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($userArray);
}

if(isset($_POST["submitbreed"])){
    $dogbreed = $_POST["breedchange"]; 

    $userArray = array(":brd" => $dogbreed, ":id" => $_POST['id']);

    $sql = "UPDATE `dogs` SET breed = :brd WHERE ID = :id";
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
                <p><?php getDogname(); ?></p>
                <form enctype="multipart/form-data" method="POST">
                    <input type="text" name="namechange"></input>
                    <div class="p-1"></div>
                    <input type="hidden" name="id" value="<?php echo $_POST["id"]; ?>">
                    <input type="submit" class="btn btn-warning" name="submitname"></input>
                </form>

                <h4>profielfoto:</h4>
                <?php profileDogPic(); ?><div class="py-1"></div>
                <form method="POST" enctype="multipart/form-data">
                    <input type="file" name="image" id="image"></input>
                    <div class="p-1"></div>
                    <input type="hidden" name="id" value="<?php echo $_POST["id"]; ?>">
                    <input type="submit" class="btn btn-warning" name="submitimg"></input>
                </form>
                <div class="py-1"></div>
            </div>

            <div class="col-3 text-center">
                <h4>breed</h4>
                <p><?php getBreed(); ?></p>
                <form method="POST">
                    <input type="text" name="breedchange"></input>
                    <div class="p-1"></div>
                    <input type="hidden" name="id" value="<?php echo $_POST["id"]; ?>">
                    <input type="submit" class="btn btn-warning" name="submitbreed"></input>
                </form>
                <div class="py-2"></div>
            </div>

            <div class="col-3 text-center">
                <h4>Leeftijd:</h4>
                <p><?php getDogAge();?></p>
                <form method="POST">
                    <input type="number" name="agechange"></input>
                    <div class="p-1"></div>
                    <input type="hidden" name="id" value="<?php echo $_POST["id"]; ?>">
                    <input type="submit" class="btn btn-warning" name="submitage"></input>
                </form>
            </div>
        </div>
    </div>
</session>
<div class="py-2"></div>
<session id="uitloggen">
    <div class="container">
        <div class="row justify-content-end">
            <div class="text-center col-4">
                <a href="dogs.php"><button type="button" class="btn btn-warning">Honden</button></a>
                <a href="logout.php"><button type="button" class="btn btn-warning">log uit</button></a></div>
        </div>
    </div>
</session>
<div class="py-2"></div>
<?php include "footer.php"; ?>