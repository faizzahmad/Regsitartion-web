<?php
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Testseries</title>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon//favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon//favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <?php  include 'links/links.php'?>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&family=Lato:wght@100&family=Patrick+Hand&family=Roboto:wght@100;300;400;500;700;900&family=Titillium+Web:wght@300;400;600;700;900&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: white;
             
        }
        body{
   background-image: url("image4.jpg");
   background-position: center;
   background-size: cover;
   background-repeat: no-repeat;
   height: 100%;
   width: auto;
   
 }
        .facebook{
            color: white;
            font-weight: 600;
            border: 2px solid rgb(4, 4, 143);
            background-color: rgb(4, 4, 143);
            padding: 10px 55px;
            border-radius: 4px;
            transition: all 0.3s ease-in-out;
        }
        .facebook:hover{
            background-color: transparent;
        }
        .google{
            color: white;
            font-weight: 600;
            border: 2px solid rgb(197, 65, 4);
            background-color: rgb(197, 65, 4);
            padding: 10px 60px;
            border-radius: 4px;
            transition: all 0.3s ease-in-out;
        }
        .google:hover{
            background-color: transparent;
        }
        .sub{
            color: white;
            font-weight: 600;
            border: 2px solid white;
            background-color: rgba(0, 179, 80, 0.74);
            padding: 10px 55px;
            border-radius: 4px;
            transition: all 0.3s ease-in-out;
            border : 2px solid rgba(0, 179, 80, 0.74); 
            
        }
        .sub:hover{
            background-color: transparent;
           
            
        }
        input[type="text"],
        input[type="password"],
        input[type="number"],
        input[type="email"]
        {
            background-color: transparent;
            border: none;
            border-bottom: 2px solid white;
            border-radius: 0px;
            color: white;
            /* animation-name: inputani;
            animation-duration: 1s;
            animation-delay: 0.5s;
            animation-iteration-count: 1;
            animation-timing-function: ease-in-out;
            animation-fill-mode:forwards; */
        }
        /* @keyframes inputani {
            from{
               width: 0px;
               border-bottom: 2px solid white;
            }
            to{
                width: 250px;
                border-bottom: 2px solid white;
            }
        } */
        /* label{
            animation-name: lables;
            animation-duration: 1s;
            animation-delay: 2s;
            animation-iteration-count: 1;
            animation-timing-function: ease-in-out;
            animation-fill-mode:forwards;
        }
        @keyframes lables {
            from{
               
               left: 0px;
               text-align: left;
            }
            to{
               
                right: 150px;
                text-align: center;
            }
        } */
         
        input[type="email"]:focus{
            background-color: transparent;
            box-shadow: none;
            order: none;
            border-bottom: 2px solid;
            border-radius: 0px;
            color: white;
        }
        input[type="text"]:focus{
            background-color: transparent;
            box-shadow: none;
            order: none;
            border-bottom: 2px solid;
            border-radius: 0px;
            color: white;
        }
        input[type="number"]:focus{
            background-color: transparent;
            box-shadow: none;
            order: none;
            border-bottom: 2px solid;
            border-radius: 0px;
            color: white;
        }
        input[type="password"]:focus{
            background-color: transparent;
            box-shadow: none;
            order: none;
            border-bottom: 2px solid;
            border-radius: 0px;
            color: white;
        }
        h6{
            text-align: center;
        }
        .strokeh{
text-transform: uppercase;
font-size: 60px;
-webkit-text-fill-color: transparent;
-webkit-text-stroke: 1px;
-webkit-text-stroke-color: rgb(140, 146, 132);
font-weight: bold;
font-family: 'Caveat', cursive;

}
.eye{
    position: absolute;
}
#nothide{
    display: none;
}
#password2{
    width: 100%;
    margin-top: 10px;
}
#password2:focus{
    outline: none;
}
    </style>
</head>
<body>

<?php
include 'dbcon.php';
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from registration where Email = '$email' ";
    $query = mysqli_query($con, $email_search);
    $emailcount = mysqli_num_rows($query);
    if($emailcount){
        $email_pass = mysqli_fetch_array($query);
        $db_pass = $email_pass['password'];
        $_SESSION['username'] = $email_pass['name'];
        $pass_decode = password_verify($password, $db_pass);
        if($pass_decode){
            ?>
        <script>
            alert("login succesfully");
            location.replace("home.php");
        </script>
        <?php
        }else{
            ?>
        <script>
            alert("you hav enterd a wrong password");
        </script>
        <?php
        }

    }else{
        ?>
        <script>
            alert("Email not registerd");
        </script>
        <?php
    }

}

?>

<div class="container-fluid"></div>
    <div class="container">
        <div class="row align-items-center mt-5">
            <div class="col-md-6 mt-5">
            <h1 class="mt-md-5 strokeh mt-5">the more you expect the more <br> u get hurt.....<i class="fa-solid fa-heart-crack"></i></h1>
            </div>
            <div class="col-md-6 ms-md-0 mt-md-5">
                
             <h3 class="mt-md-5">Login to your account <i class="fa-solid fa-user"></i></h3>
             <p class="">Get start with your free account.</p>
               <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" class="row ms-5 ms-md-0"  method="POST">
                 <!-- <div class="col-12 col-md-6">
                <label for="name" class="form-label">Your full name <i class="fa-solid fa-user"></i></label>
                <input type="text" class="form-control" name="fname" id="name" required> 
                 </div> -->
                 <div class="col-12 col-md-6 mb-3">
                <label for="email" class="form-label">Enter email <i class="fa-solid fa-envelope"></i></label>
                <input type="email" class="form-control" name="email" id="email" required> 
                 </div>
                
                 <div class="col-12 col-md-6 mb-3">
                <label for="password" class="form-label">Enter password <i class="fa-solid fa-key"></i></label>
                <input type="password" class="" name="password" id="password2" required>
                <span class="eye" onclick="showdata()"> <i id="nothide" class="fa-solid fa-eye"></i>
                <i id="hide" class="fa-solid fa-eye-slash">
                </i></span>   
                 </div>
                 
                     <hr>
                     <div class="col-12 col-md-6 mb-3>
                <a href=""><button class="facebook " >Log-in via facebook<i class="fa-brands fa-facebook"></i></button></a><br>
                </div>
                <div class="col-12 col-md-6 mb-3">
               <a href=""><button class="google">Log-in via google <i class="fa-brands fa-google"></i></button></a>
               </div>
            <button type="submit" class="sub" name="login">Login</button>
            </form>
            <h6 class="mt-3">Not have an account <i class="fa-solid fa-user"></i> ? <a href="registration.php">Register</a> </h6>
               
               </div>

            
        </div>
    </div>
    </div>
</body>
<script>
      let d = document.getElementById('password2');
        let h = document.getElementById('hide');
        let n = document.getElementById('nothide');
                        const showdata = () => {
                        if(d.type == 'password'){
                            d.type = 'text';
                            n.style.display = 'inline';
                            h.style.display = 'none';
                        }else{
                            d.type = 'password';
                            n.style.display = 'none';
                            h.style.display = 'inline';
                        }
                            
                        }
</script>
</html>



