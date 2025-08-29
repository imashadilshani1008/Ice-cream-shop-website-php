<?php 
include 'db.php'; 
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $username = $_POST['username']; 
    $email = $_POST['email']; 
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)"); 
    $stmt->execute([$username, $email, $password]); 
    echo "Registration successful!";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice cream-sign up</title>
    <style>
        
        *{
    padding: 0 0;
    margin: 0 0;
    box-sizing: border-box;
}


.body{
    /* background-color: white; */
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
 
.container{
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
} 

.form{
    width: 350px;
}

.login-form{
    display: flex;
    flex-direction: column;  
    border: 2px solid black; 
    background: white;
    padding: 50px 50px;
    border-radius: 5px;
    
} 

.text-center{
    text-align: center;
}

.margin-low {
    margin-top: 20px;
}
.margin-high{
    margin-top: 35px;
}

input{
    padding: 6px 8px;
    outline: none;
    font-size: .8rem;
    border: 2px solid black;
    border-radius: 5px;
} 
 
h1{
    text-decoration:none;
    color: purple;
}

.login-btn{
    background:purple;
    padding: 3px 10px;
    border: 2px solid black;
    font-size: 1rem;
    color: white;
    letter-spacing: 1px;
    transition: all .5s ease-in-out;
    border-radius: 5px;
    width:250px;
}

.login-btn:hover{
    background: blue;
    color: white;

}
.cancel-btn{
    padding: 3px 10px;
    border: 2px solid black;
    font-size: 1rem;
    color: rgb(135, 8, 84);
    letter-spacing: 1px;
    transition: all .5s ease-in-out;
    border-radius: 5px;
}

.cancel-btn:hover{
    background: purple;
    color: #ffffff;

} 

a:hover{
    color:blue;
}
@media screen and (max-width:700px){
    #body{
        width: 65%;
        padding: 40px;
    }
}
    
    </style>
</head>
<body>


<div class="container">
        <form name="f1" action="" method="POST" class="form" target="">
            <div class="login-form">
                <h1 class="text-center">Sign Up</h1>
                <input class="margin-high" type="text" name="email" placeholder="E-mail">
                <input class="margin-low" type="text" name="username" placeholder="User Name">
                <input class="margin-low" type="password" name="password" placeholder="Password">
                
                <div class="text-center">
                   <button class="margin-high login-btn" type="submit" name="login" color="blue">Sign Up</button>     
                </div>
                <div class="text-center">
                <a href="index.php"><button class="margin-high cancel-btn" type="button" name="reset" >Cancel</button></a>
                </div>
                <br>
                <p>Already have an account? <a href="login.php">Login</a></p>
                
            </div>
        </form>
    </div>


    <br><br>

</body>
</html>