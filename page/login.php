<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>

    <style>
        html,body{
            margin:0;
            padding:0;
            height:100%;
            width:100%;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        input{
            display:block;
            border:none;
            border-bottom:3px solid black;
            transition:0.5s ease-out;
        }

        input:focus{
            transition:0.5s ease-in;
            border-bottom:3px solid lightseagreen;
        }

        label{
            font-size:2rem;
        }
    </style>

</head>
<body>
    
    <div class="enter-mail">
        <label for="email">Enter your email</label>
        <input type="email" name="email" id="email" placeholder="Please enter your email here">
    </div>


    <div class="enter-pwd">
        <label for="pwd">Enter your password</label>
        <input type="text" name="pwd" placeholder="Please enter your password here">
    </div>

</body>
</html>
