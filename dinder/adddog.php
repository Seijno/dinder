<?php include "header.php";
if(isset($_POST["submit"])){
    $doguser = $_POST["name"];
    $email = $_SESSION["email"];
    $age = $_POST["age"];
    $breed = $_POST["breed"];
    $image = file_get_contents($_FILES["dogimg"]["tmp_name"]);
    $userArray = array(":name" => $doguser, ":email" => $email, ":age" => $age, ":brd" => $breed, ":img" => $image);
  
    $sql = "INSERT INTO `dogs` (`name`, `owner`, `breed`,`age`,`image`)
            VALUES (:name, :email, :brd, :age, :img)";
  
    $stmt = $pdo->prepare($sql);
    $stmt->execute($userArray);
    header("location: dogs.php");
  }?>
<div class="py-5"></div>
<h3>welkom <?php getUsername(); ?>!</h3>
<session id="dogadd">
    <div class="container" id="gegevens">
        <div class="row justify-content-center">
            <div class="col-4 text-center">
                <form enctype="multipart/form-data" method="POST" action=""><br>
                    <h1 class="h3 mb-3 fw-normal">voeg hond toe</h1>

                    <div class="form-floating">
                        <input type="text" name="name" action="name" class="form-control" id="floatingInput"
                            placeholder="bolt">
                        <label for="floatingInput">name</label>
                    </div>
                    <div class="form-floating">
                        <input type="number" name="age" action="email" class="form-control" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Age</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="breed" action="breed" class="form-control" id="floatingInput"
                            placeholder="bolt">
                        <label for="floatingInput">ras</label>
                    </div>
                    <div class="py-1"></div>
                    <div class="form-floating">
                        <input type="file" name="dogimg" action="">
                    </div>
                    <div class="py-3"></div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit" action="submit">voeg toe</button>
                </form>
                <div class="py-3"></div>
            </div>
        </div>
    </div>
</session>
<div class="py-5"></div>
<?php include "footer.php";?>