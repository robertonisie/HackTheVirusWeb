 <?php
include ("/var/db/dbconfig.php");
include('errors.php');
session_start();

$poza_id = '';

$errors = array(); 

if (isset($_POST['reg_user'])) 
{
  $nume = mysqli_real_escape_string($db, $_POST['nume']);
  $prenume = mysqli_real_escape_string($db, $_POST['prenume']);

  $email = mysqli_real_escape_string($db, $_POST['email']);
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);

  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  $judet = mysqli_real_escape_string($db, $_POST['judet']);
  $oras = mysqli_real_escape_string($db, $_POST['oras']);

  $adresa = mysqli_real_escape_string($db, $_POST['adresa']);
  $nume_afacere = mysqli_real_escape_string($db, $_POST['nume_afacere']);


  if (empty($nume)) { array_push($errors, "Name is required"); }
  if (empty($prenume)) { array_push($errors, "Vorname is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($password_2)) { array_push($errors, "Confirm Password is required"); }
  if (empty($judet)) { array_push($errors, "County is required"); }
  if (empty($oras)) { array_push($errors, "City is required"); }
  if (empty($adresa)) { array_push($errors, "Address is required"); }
  if (empty($nume_afacere)) { array_push($errors, "Business Name is required"); }


  if ($password_1 != $password_2)
    array_push($errors, "The passwords do not match");

  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user)
    if ($user['email'] === $email)
        array_push($errors, "Email already exists");
  if (count($errors) == 0) 
  {
    $password_h = password_hash($password_1, PASSWORD_DEFAULT);
    $query = "INSERT INTO users(email, password, nume, prenume, judet, oras, adresa, nume_afacere) VALUES('$email', '$password_h', '$nume', '$prenume', '$judet', '$oras', '$adresa', '$nume_afacere')";
    mysqli_query($db, $query);
    $_SESSION['nume_sesiune'] = $email;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
  }
}

if (isset($_POST['login_user'])) 
{
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);

  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) { array_push($errors, "Username is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }

  if (count($errors) == 0) 
  {
    $password_h = password_hash($password, PASSWORD_DEFAULT);

    if (password_verify($password, $password_h)) 
    {
      $query = "SELECT * FROM users WHERE email ='$email'";
      $results = mysqli_query($db, $query);

      if (mysqli_num_rows($results) == 1) 
      {
        $_SESSION['nume_sesiune'] = $email;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
      }
    }

    else 
      array_push($errors, "Wrong email/password combination");
  }
}

if (isset($_POST['adauga_anunt'])) 
{
  $nume_produs = mysqli_real_escape_string($db, $_POST['nume_produs']);
  $pret = mysqli_real_escape_string($db, $_POST['pret']);
  $descriere = mysqli_real_escape_string($db, $_POST['descriere']);
  $cantitate = mysqli_real_escape_string($db, $_POST['cantitate']);

  if (empty($nume_produs)) { array_push($errors, "Specificati numele produsului"); }
  if (empty($pret)) { array_push($errors, "Specificati pretul"); }
  if (empty($descriere)) { array_push($errors, "Descrieti anuntul"); }
  if (empty($cantitate)) { array_push($errors, "Specificati cantitatea"); }

  $poza = $_FILES['image']['name'];

    $target = "uploads/".basename($poza);

    $sql = "INSERT INTO image_upload(image) VALUES ('$poza')";
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
    {
      $msg = "Image uploaded successfully";
      $sql = "SELECT * FROM image_upload WHERE image='$poza'";
      $result = mysqli_query($db, $sql);
      $row = mysqli_fetch_assoc($result);
      $poza_id = $row['id'];
    }

    else
      array_push($errors, "Eroare poza");


  if (count($errors) == 0) 
  {
    //$email =  mysqli_real_escape_string($db, $_SESSION['nume_sesiune']);
    $user_check_query = "SELECT * FROM users WHERE email='".$_SESSION['nume_sesiune']."'";
    $result = mysqli_query($db, $user_check_query);
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['id'];
  

    $query = "INSERT INTO anunturi(nume_produs, pret, descriere, cantitate, poza, user_id) VALUES('$nume_produs', '$pret', '$descriere', '$cantitate', '$poza_id', '$user_id')";
    mysqli_query($db, $query);

    echo "<script type='text/javascript'>
          alert('Anunt adaugat cu succes.');
          window.location = 'index.php';
          </script>";
  }
}



if (isset($_POST['addtocart']))
{
      $pid = $_POST['prod_id'];
            $query = "SELECT * FROM anunturi WHERE id='$pid'";
            $result=mysqli_query($db, $query);
            $row = mysqli_fetch_assoc($result);

            $ppoza_id = $row["poza"];
            $sql = "SELECT * FROM image_upload WHERE id='$ppoza_id'";
            $result2 = mysqli_query($db, $sql);
            $row2 = mysqli_fetch_assoc($result2);

            $puser = $row["user_id"];
            $sql = "SELECT * FROM users WHERE id='$puser'";
            $result3 = mysqli_query($db, $sql);
            $row3 = mysqli_fetch_assoc($result3);

            $puser_id = $row3['id'];
            $pnume_afacere = $row3['nume_afacere'];
            $ppoza = $row2['image'];
            $pid = $row["id"];
            $pnume_produs = $row["nume_produs"];
            $ppret = $row["pret"];
            $pdescriere = $row['descriere'];

    $pcantitate_aleasa = $_POST['quantity'];

    $puser = $_SESSION["nume_sesiune"];
    $sql = "SELECT * FROM users WHERE email='$puser'";
    $result3 = mysqli_query($db, $sql);
    $row3 = mysqli_fetch_assoc($result3);
    $puser_id = $row3['id'];

    $query = "INSERT INTO produse_cart(nume_produs, pret, descriere, cantitate, poza, user_id) VALUES('$pnume_produs', '$ppret', '$pdescriere', '$pcantitate_aleasa', '$ppoza_id', '$puser_id')";
    mysqli_query($db, $query);

                    
    header("Location: ../shop/cart.php");
    die("Already logged in"); 
}

?>