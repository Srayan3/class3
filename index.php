<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background: #191919;
    }
    .container {
        width: 100%;
        display: flex;
        color: white;
        justify-content: center;
    }
    table {
        width: 80%
    }
    table, th, td {
        border: 2px solid white;
        padding: 10px;
        border-collapse: collapse;
    }
</style>
<body>
    <div class="container">
        <table>
            <th>
                Name
            </th>
            <th>
                Age
            </th>
            <th>
                Job
            </th>
            <tbody>
                <?php
                include 'conn.php';
                $selectQuery = "SELECT * FROM `users`";
                $query = mysqli_query($connection, $selectQuery);
                $row = mysqli_num_rows($query);
                while($print = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $print['name'] ?></td>
                    <td><?php echo $print['age'] ?></td>
                    <td><?php echo $print['job'] ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>    
    </div>
    </body>
</html>