<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>See users</h1>

    <table>
        <thead>
            <tr style="display:grid; grid-template-columns: repeat(4, 1fr)">
                <th>Name user</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr style="display:grid; grid-template-columns: repeat(4, 1fr)">
                    <td style="text-align:center"><?php echo $user['name_user'] ?></td><br>
                    <td style="text-align:center"><?php echo $user['email'] ?></td>
                    <td><a href="../user/update_user">Edit user</a></td>
                    <td><a href="../user/delete_user">Delete user</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <br><br>
    <a href="../inicio">Back Home</a>


</body>

</html>