
<html>
    <head>
        <title>film making</title>
        
        <style>
         body{
          background-color:  #c3d2da;
 
        }
            nav img{
    width: 1332.8px;
    height: 541.45px;
    
    
} 


nav ul li .search{
    left: 100%;
}
nav ul{
    margin: 0px;
    padding: 0px;
    list-style: none;
    position: 10px;
}
nav ul li{
    float: left;
    width: 130px;
    height: 40px;
    text-align: center;


}
.search{
    top: 4px;
    left: 80%;
    border-radius: 8px;
    margin-left: 87%;
}






nav ul li{
    float: left;
    background-color:grey;
    list-style: none;
    line-height: 40px;
    text-align: center;
    font-size: 20px;
    

}
.search{
    left: 100%;
}
nav ul li a{
    text-decoration: none;
    color: white;
    display: block;
    border: 1px solid white;(245, 215, 215);
} 
nav ul li a:hover{
    background-color: green;
}
nav ul li ul li{
    display: none;
}
nav ul li:hover ul li{
    display: block;
    color: red;
    opacity: 1.0;
    overflow: visible;
}
            fieldset{
    width: 250px;
    position: absolute;
    left: 40%;
    top: 70px;
}
        </style>
    </head>
    <body>
    <nav>
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><a href="login.php">login</a></li>
                    <li><a href="signup.php">sign up</a></li>
                    <li><a href="most.php">most viewd</a></li>
                    <li><a href="most.php">category</a>
                        </li>
                    
                    <li><a href="most.php">store</a></li>
                    
                    
                </ul>
                <div class="search">
                        <input type="search" placeholder="search"></div></nav>
                        <br><br><br><br><br><br>
                        <form>
        <div class="login">
        <br><br><br><br><br><br> <fieldset><legend><i><b>login</b></i></legend>
            <table>
                <tr>
                    <td>NAME</td><td><input type="text"></td>
                </tr>
                <tr>
                    <td>PASSWORD</td><td><input type="password"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="login"></td>
                    <td><input type="reset"></td>
                </tr>
            </table></fieldset>
        </div></form><br><br><br><br><br><br><br><br>
        <?php include_once 'footer.php'; ?>
    </body>
</html>
<?php include_once 'footer.php'; ?>
