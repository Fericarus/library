<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>See Categories</h1>

    <table>
        <thead>
            <tr style="display:grid; grid-template-columns: repeat(4, 1fr)">
                <th>Name category</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $category) : ?>
                <tr style="display:grid; grid-template-columns: repeat(4, 1fr)">
                    <td style="text-align:center"><?php echo $category['name_category'] ?></td><br>
                    <td style="text-align:center"><?php echo $category['description'] ?></td>
                    <td><a href="../category/update_category">Edit category</a></td>
                    <td><a href="../category/delete_category">Delete category</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <br><br>
    <a href="../inicio">Back Home</a>


</body>

</html>