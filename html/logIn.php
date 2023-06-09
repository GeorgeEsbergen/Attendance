<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/addEmpolyee.css">
    <style>
        body {
            background-color: #dee9ff;
        }

        .registration-form {
            padding: 50px 0;
        }

        .registration-form form {
            background-color: #fff;
            max-width: 600px;
            margin: auto;
            padding: 50px 70px;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
        }

        .registration-form .form-icon {
            text-align: center;
            background-color: #21273D;
            border-radius: 50%;
            font-size: 40px;
            color: white;
            width: 100px;
            height: 100px;
            margin: auto;
            margin-bottom: 50px;
            line-height: 100px;
        }

        .registration-form .form-lable {
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            border: none;
            color: #21273D;
            margin-top: 20px;
        }

        .registration-form .item {
            border-radius: 20px;
            margin-bottom: 25px;
            padding: 10px 20px;
        }

        .registration-form .continue {
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            background-color: #6A759B;
            border: none;
            color: white;
            margin-top: 20px;
        }

        .registration-form .adminLogin {
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            background-color: #21273D;
            border: none;
            color: white;
            margin-top: 20px;
        }


        @media (max-width: 576px) {
            .registration-form form {
                padding: 50px 20px;
            }

            .registration-form .form-icon {
                width: 70px;
                height: 70px;
                font-size: 30px;
                line-height: 70px;
            }
        }
    </style>
</head>

<body>
    <div class="registration-form">
        <form action="attendance.php" method="post">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-lable">
                <h2>Log In</h2>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="id" name="id" placeholder="ID">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-block  continue" name="time_in">Time In</button>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block  continue" name="time_out">Time Out</button>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-block  adminLogin" name="adminLogin" onclick="showPrompt()">Log in as Admin</button>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        function showPrompt() {
            var password = prompt("Please enter the password");
            if (password == "246810") {
                window.location.href = "../html/attendance_forAdmin.php";
            } else {
                alert("Wrong Password");
            }
        }
    </script>
</body>

</html>