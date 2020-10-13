<html>
    <head>

        <title>php test</title> 
    </head>
    <style>
    .container1{
        float:left;
        width:40%;
        margin-left:20%;
     

    }
    .container2{
        float:left;
        width:40%;
    }
      form{
          margin:auto;  
      }
      body{
        background-color:gray;
      }
      
      input{
          width:25%;
          padding:12px;
          border:1px solid #ccc;
          border-radius:4px;
          box-sizing:border-box;
          margin-top:6px;
          margin-bottom:16px;
          margin-left:25%;  
              }
           
           #confirm{
               margin-left:55px;
           }
           #ph{
               margin-left:150px;
           }
           #em{
               margin-left:155px;
           }
           #dat{
               margin-left:90px;
           }
           #n1{
               margin-left:122px;
           }
           #nn1{
               margin-left:122px;
           }
           #pss{
               margin-left:127px;
           }
           #esn{
            margin-left:195PX;  
           }
        


           [type="text"]{
               width:200px;
           }
           [type="password"]{
               width:200px;
           }
           [type="tel"]{
               width:200px;}
            [type="email"]{
               width:200px;
           }
           [type="date"]{
               width:200px;
           }
           [type="number"]{
               width:220px;
           }

    </style>
  
       

<body>
<form action ="home.php" method ="post">

        <div class="splitleft">
            <div class="container1">
                <h2>Registration fields:</h2>
                <label for="name"><b>Full Name</b></lable>
                <input type="text" placeholder="Enter full Name" name="fname" id="n1"required><br>
                <label for="nname"><b>Username</b></lable>
                <input type="text" placeholder="Username" name="uname"id="nn1" required><br>
                <label for="psw"><b>password</b></lable>
                <input type="password" placeholder="enterpassword" name="psw" id="pss"required><br>
                <label for="psw"><b>passwordconfirm</b></lable>
                <input type="password" placeholder="enterpassword confirm" name="pswc" id="confirm" required><br>
                <label for="tel"><b>phone</b></lable>
                <input type="tel" placeholder="enterphone" name="phone" id="ph" required><br>
                <label for="email"><b>email</b></lable>
                <input type="email" placeholder="enteremail" name="email" id="em"required><br>
                <label for="birth"><b>Date of Birth</b></lable>
                <input type="date" placeholder="enterdate" name="date"id="dat" required><br>
                <label for="number"><b>Social Security Number</b></lable>
                <input type="number" placeholder="enterSocial Security Number" name="number"id="esn" required><br>
                <input type="submit" id="s"value="register">
            
            <?php
                   if(strlen($_POST["psw"])<8){
               echo "<p class='password'>Password should at least consists of 8characters</p>";
                      }

               ?>
         <?php
          if(strcmp($_POST["psw"],$_POST["pswc"])!=0){
               echo "<p class='confirm'>Username and Password doesn't match</p>";
             }

            ?> 
            </div>
            </form> 
            <form method="post" action="safe.php">
            <div class="container2">
                <h2>Login Fields:</h2>
                <label for="nname"><b>Username</b></lable>
                <input type="text" placeholder="Username" name="username" id="nn1"required><br>
                <label for="psw"><b>password</b></lable>
                <input type="password" placeholder="enterpassword" name="password"id="pss" required><br>
                <input type="submit" value="login">
            </div>
        </div>
        </form>
        <?php
          if($_GET["error"]==1){
             echo "<p class='login'>Wrong Username or Password</p>";
}
?>
    </body>
    </html>
