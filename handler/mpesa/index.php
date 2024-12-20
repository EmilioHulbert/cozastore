<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{

            margin-top: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        input{
            width: 100%;
            height: 50px;
            background: white;
            border: none;
            border-radius: 8px;
            margin: 10px;
            text-align: center;
        }form{
            width: 400px;
            height: auto;
            background: paleturquoise;
            padding: 10px;
            background: blue;
        }
        button{
            width: 300px;
            height: 50px;
            background: greenyellow;
            border-radius: 8px;
            text-align: center;
        }h3{
            text-align: center;
            color:white;
            font-size: 2rem;

        }
        .content{
            text-align: center;
            background: rgb(44, 243, 4);
            padding: 5px;
        }
    </style>
</head>
<body>
    <style>
  body,
  html {
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    margin: 0px;
    background-image: url("images/home.jpg");
    background-attachment: fixed;
    background-size: cover;
    background-repeat: no-repeat;
  }

  /* add appropriate colors to fb, twitter and google buttons */
  .fb {
    background-color: #3B5998;
    color: white;
  }

  .twitter {
    background-color: #55ACEE;
    color: white;
  }

  .google {
    background-color: #dd4b39;
    color: white;
  }

  .logi a {
    width: 50%;
    margin: auto;
    padding: 20 50px;
    margin-top: 10px;

  }

  /* style create account */
  .cr {
    background-color: crimson;
    color: white;
    cursor: pointer;
    width: 50%;
    margin: auto;
    padding: 30 40px;
    margin-top: 10px;
    border-radius: 5px;
    text-align: center;
  }

  .cr:hover {
    background-color: #0d8fd0;
  }
  @media screen and (max-width: 500px) {

    body,
    html {
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
      margin: 0px;
      top: 0;
      bottom: 0;
      background-image: url("images/bts (9).jpg");
      background-attachment: fixed;
      background-size: cover;
      background-repeat: no-repeat;
    }

    .logi a {
      width: 70%;
      font-size: x-small;
      margin: auto;
      padding: 20 50px;
      margin-top: 10px;

    }

    .cr a {
      font-size: xx-small;
      color: white;
      cursor: pointer;
      margin: auto;
      padding: 20 50px;
      margin-top: 10px;
      border-radius: 5px;
      text-align: center;
    }
  }

</style>
    <div class="container">
        <div class="content">
             <h3>Almost Done !</h3>
            <h3>PAY</h3>KSH
             <?php echo  $_SESSION['total'] ?>
            <form method="POST" action="QUERY.php">
                <label for="phone">Enter Phone number for payment request</label>
                <input type="text" name="phone" required placeholder="254 795800861"/>
                <button type="submit">send</button>
            </form>
        </div>
    </div>
</body>

</html>
