<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        body {
            background: #191919;
            color: white;
        }
        .container {
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .form {
            width: 50%;
        }
        input {
            width: 100%;
            background: #191919;
            border: 2px solid white;
            padding: 10px;
        }
        button {
            width: 103%;
            height: 40px;
            background: lightblue;
            color: white
        }
    </style>
</head>
<body>
    <h1 style="text-align: center">Contact form</h1>
    <div class="container">
        <form action="process.php" method="get" class="form">
            <input style="color: white" name="name" type="text" placeholder="Enter your name">
            <input style="margin-top: 10px; color: white" name="job" type="text" placeholder="Enter your job">
            <input style="margin-top: 10px; color: white" name="age" type="number" placeholder="Enter your age">
            <button style="margin-top: 20px; color: black" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>