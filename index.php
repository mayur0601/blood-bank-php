<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css\s1.css">
    <title>Admin login</title>
    <style>
            #full{
            width:100%;
            height: auto;
           
        }
        #inner_full{
            width:80%;
            height: auto;;
            margin:auto;
        }
        #header{
            width: 100%;
            height: 50px;
            background-color: red;
            color: black;
        }

        #body{
            width: 100%;
            height: 400px;
        }
        #footer{
            width:100%;
        height:50px;
    background-color:red;
        }
        #btn{
            padding:5px;

        }

    </style>
</head>
<body>
    <div id="full">
    <div id="inner_full">
    <div id="header">
    <h2> BLOOD BANK MANAGEMENT SYSTEM  </h2>
    </div>
    <div id="body">
    <br><br><br><br>
    <table align="center">
        <tr>
            <td width="200px" height="70px"><b>Enter userName</b></td>
            <td width="100px" height="70px"><input type="text" name="un" placeholder="Enter userName" style="width:150px; height:30px; border-radius:10px;"></td>
        </tr>
        <tr>
         <td width="200px" height="70px"><b>Enter Password</b></td>
            <td width="200px" height="70px"><input type="password" name="ps" placeholder="Enter userName"  style="width:150px; height:30px; border-radius:10px;"></td>
        </tr>
        <tr>
            <td><input type="submit" name="sub" value="login" id="btn" style="width:50px; height:30px; border-radius:5px;"></td>
        </tr>
    </table>
    </div>
    <div id="footer"><h4 align="center" style="padding:5px;">Copyrights@project</div>
    </div>
    </div>

</body>
</html>