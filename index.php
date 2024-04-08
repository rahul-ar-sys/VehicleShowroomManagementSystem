<!DOCTYPE html>
<html>
<head> 
    <title>Vehicle showroom management system</title>
    <link rel="stylesheet" href="./util/vsms_theme.css">
    <style>
        body {
            background-image: url('home/rahular/Downloads/showroom.jpeg');
            background-size: cover; /* Adjust as needed */
            
        }
    </style>
</head>
<body>
    <br><br><br><br>
    <form action="./util/Login_check.php" method="post">
        <br>
        <center>
            <h1>LOGIN PAGE</h1>
            <br>
            <h1>VEHICLE SHOWROOM MANAGEMENT SYSTEM</h1>
            <table> 
                <tr>
                    <td>Staff ID :</td> 
                    <td> <input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td> <input type="password" name="pwd"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><input type="submit" name="Login" value="Login"></center>
                    </td>
                    <td>
                        <center><input type="button" name="reset" value="reset"></center>
                    </td>
                </tr>
            </table>
            <br><br><a href="./Login_Register/RegisterUser.php">Register here if you are new</a>
        </center>
    </form>
</body>
</html>
