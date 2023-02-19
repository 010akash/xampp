
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration form</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            padding: 0px;
            margin: 0px;
        }

        body {
            width: 100vw;
            height: 100vh;
            background: url(content/background.jpg) center center/cover no-repeat;
        }

        .navbar {
    display: flex;background: #00F260;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #0575E6, #00F260);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #0575E6, #00F260); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    position: sticky;

}

.nav-list {
    color: rgb(245, 241, 241);
    display: flex;
    align-items: center;
    width: 100%;
}

.nav-list img {
    border-radius: 62px;
    width: 80px;
    height: 80px;
}

.nav-list li {
    list-style: none;
    font-weight: bold;
    font-size: 20px;
    padding: 1px 22px;
    margin: 10px;

}
.nav-list li a{
    text-decoration: none;
    color:rgb(248, 243, 243)
}
/* .nav-list li a:hover{
    color: rgb(250, 250, 250);
} */
.nav-list li:hover {
  border: 1px solid yellow;
  border-radius: 12px;
}
#login-btn{
    margin: 14px 30px;
    padding: 4px 21px;background: none;
    border-radius: 15px;border: none;
}
#login-btn:hover{
    border: 1px solid yellow;
  }
#login-btn a{
    font-size: 17px;
    text-decoration: none;
    font-weight: bold;
    color: rgb(249, 248, 248);
}


        .wrapper {
            position: absolute;
            top: 55%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 70%;
            height: 80%;
            margin: 0 auto;
            background: #2fb7f7;
            padding: 20px 30px;
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: aliceblue;
        }

        .form-container {
            width: 100%;
            margin: 10px auto;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            height: 90%;
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(62, 228, 170, 0.9864320728291317) 0%, rgba(42, 223, 198, 1) 33%, rgba(34, 221, 208, 1) 49%, rgba(0, 212, 255, 1) 100%);
        
        }

        .flex {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: space-evenly;
            -ms-flex-pack: space-evenly;
            justify-content: space-evenly;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .flex-item {
            width: 40%;
            height: 100%;
        }

        label {
            display: block;
            font-size: 20px;
            color: aliceblue;
        }

        .field-container {
            padding: 1px 1px;
            margin: 10px 0 10px;
        }

        .required {
            color: red;
            font-size: 1.1em;
        }

        .field-container>input,
        .passkey-box>input {
            width: 100%;
            display: inline-block;
            padding: 7px 15px;
            font-size: 18px;
            margin: 5px 0 3px;
            border-radius: 3px;
            outline: none;
            border: none;
            border-bottom: 2px solid black;
        }

        .passkey-box {
            position: relative;
        }

        .passkey-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            font-size: 1.2em;
        }

        .field-container>input:focus,
        .passkey-box>input:focus {
            border-bottom: 2px solid dodgerBlue;
        }

        .error-messg {
            display: block;
            color: red;
            font-weight: 300;
        }

        .center {
            text-align: center;
        }

        input[type='submit'] {
            padding: 10px 30px;
            font-size: 1em;
            background:none;
            border: 1px solid white;
            outline: none;
            color: white;
            border-radius: 3em;
            cursor: pointer;
            font-weight: bold;
        }
        input:hover{
            background-color: rgb(7, 243, 223);
        }


        #bottom-box {
            display: flex;
            flex-direction: column;
            height: 20%;
            width: 100%;
            display: flex;
            border-radius: 1em;
            justify-content: center;
            align-items: center;
            
        }

        #bottom-box h4 {
            margin-top: .5em;
        }

        #bottom-box-inner {
            text-align: center;

        }
        #log-btn{
            color: aliceblue;
        }

        #bottom-box-inner img {
            width: 1.5em;
            margin: 1em;

        }

    </style>
</head>

<body>
    <nav class="navbar">
        <ul class="nav-list">
            <li> <a href="/main.html">Home</a></li>
            <li> <a href="/profile.html">About Us</a></li>
            <li> <a href="/orders.html">Your Orders</a></li>
            <li> <a href="/payment.html">Payment</a></li>

        </ul>
    </nav>
<div class="container">
    
</div>
    <div class="wrapper">
        <h1>Register Here</h1>
        <div class="form-container">
            <form action="" method="post">
                <div class="flex">
                    <div class="flex-item">
                        <div class="field-container">
                            <label for="full-name">Full Name: <span class="required">*</span></label>
                            <input type="text" name="full-name" pattern="^([a-zA-Z]{2,} ?)+$" id="full-name"
                                placeholder="Your full name" required="required" />
                            <span class="error-messg"></span>
                        </div>
                        <div class="field-container">
                            <label for="email">Email: <span class="required">*</span></label>
                            <input type="email" name="email" id="email" placeholder="Your email" required="required" />
                            <span class="error-messg"></span>
                        </div>
                        <div class="field-container">
                            <label for="confirm-email">Confirm email: <span class="required">*</span></label>
                            <input type="email" name="confirm-email" id="confirm-email" placeholder="Re-enter email"
                                required="required" />
                            <span class="error-messg"></span>
                        </div>

                    </div>
                    <div class="flex-item">
                        <div class="field-container">
                            <label for="contact-no">Contact no.: <span class="required">*</span></label>
                            <input type="tel" name="contact" pattern=[0-9]{10} id="contact-no"
                                placeholder="Mobile number" required="required" />
                            <span class="error-messg"></span>
                        </div>
                        <div class="field-container">
                            <label for="passkey">Password: <span class="required">*</span></label>
                            <div class="passkey-box">
                                <input type="password" name="passkey" id="passkey" class="passkey"
                                    placeholder="Password" required="required" />
                                <span class="passkey-icon" data-display-passkey="off"><i class="fas fa-eye"></i> </span>
                            </div>
                            <span class="error-messg"></span>
                        </div>
                        <div class="field-container">
                            <label for="confirm-passkey">Confirm password: <span class="required">*</span></label>
                            <div class="passkey-box">
                                <input type="password" name="confirm-passkey" class="passkey" id="confirm-passkey"
                                    placeholder="Re-enter password" required="required" />
                                <span class="passkey-icon" data-display-passkey="off"><i class="fas fa-eye"></i></span>
                            </div>
                            <span class="error-messg"></span>
                        </div>

                    </div>
                </div>
                <div class="center"><input type="submit" value="Sign Up" name="sub" id="signUp-btn" onclick="registerPopup()"></div>
            </form>
            <div id="bottom-box">
                <h4>Already Have an Account <a href="/signIn.html" id="log-btn">Sign In</a> here</h4>
                <div id="bottom-box-inner">
                    <a href="https://www.facebook.com/"><img src="content/facebook.png" alt=""></a>
                    <a href="https://accounts.google.com/"><img src="content/google-symbol.png" alt=""></a>
                    <a href="https://in.linkedin.com/"><img src="content/linkedin (1).png" alt=""></a>
                </div>

            </div>
        </div>

    </div>


    <script src="/script.js"></script>
</body>

</html>


<?php
include 'connenction.php';


if(isset($_POST['sub'])){
    $name = $_POST['full-name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $pass = $_POST['passkey'];

    $insertquery = "insert into signup(Name,email,contact,Password) values('$name','$email','$contact','$pass')";

    $check = mysqli_query($con,$insertquery);
    if($check){
        ?>
        <script>
        alert("Data Inserted Successfully");
        </script>
        <?php
    }else{
        ?>
        <script>
        alert("Something Wrong");
        </script>
        <?php
    }
}
?>