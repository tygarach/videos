<html>
    <head>
        <title>film making</title>
        <link href="signup.css" rel="stylesheet" type="text/css">
        <style>
        body{
    background-color:  #05304d ;
    opacity: .6;
}
fieldset{
    width: 250px;
    left: 40%;
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
        <fieldset>
            <legend>signup</legend>
            <table>
                <tr>
                    <td>FirstName</td><td><input type="text" placeholder="please enter ur name"</td>
                </tr>
                <tr>
                        <td>LastName</td><td><input type="text" placeholder="please enter ur name"</td>
                    </tr>
                    <tr>
                            <td>UserName</td><td><input type="text" placeholder="please enter username"</td>
                        </tr>
                        <tr>
                                <td>Password</td><td><input type="password" </td>
                            </tr>
                            <tr>
                                    <td>Confirm Password</td><td><input type="password" </td>
                                </tr>
                                <tr><td><input type="submit" value="create"</td><td><input type="reset"</td>
                                </tr>
            </table>
        </fieldset></form><br><br><br><br><br><br><br><br><br><br><br>
        <?php include_once 'footer.php'; ?>
    </body>
</html>
