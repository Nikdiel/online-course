<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <style>
        body{
            margin: 0;
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 1px solid gray;
            border-radius: 10px;
            padding: 20px 50px;
        }
        label, input{
            display: block;
            padding: 5px;
            width: 100%;
            box-sizing: border-box;
        }
        button{
            padding: 5px;
            width: 100%;
        }
        form>button:first-of-type{
            margin-top: 30px;
        }
        a{
            margin: 10px 0;
            width: 100%;
            text-decoration: none;
            color: #000;
            border: 1px solid gray;
            border-radius: 3px;
            padding: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color:#efefef;
            box-sizing: border-box;
        }
        a:hover{
            background-color: #e9e9e9;
        }
    </style>
<body>
    <form action="loginValidation.php" method="post">
        <h1>registration</h1>
        <label for="login">login:</label>
            <input type="text" name="login" id="" placeholder="login">
        
        <label for="password">password:</label>
            <input type="password" name="password" id="" placeholder="password">
        
        <button type="submit">register</button>
        <a href="login.php">login</a>
    </form>
</body>
</html>