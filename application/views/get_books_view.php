<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>See books</h1>

    <table>
        <thead>
            <tr style="display:grid; grid-template-columns: repeat(7, 1fr)">
                <th>Name</th>
                <th>Author</th>
                <th>ID Category</th>
                <th>Published date</th>
                <th>User borrow</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book) : ?>
                <tr style="display:grid; grid-template-columns: repeat(7, 1fr)">
                    <td style="text-align:center"><?php echo $book['name'] ?></td>
                    <td style="text-align:center"><?php echo $book['author'] ?></td>
                    <td style="text-align:center"><?php echo $book['id_category1'] ?></td>
                    <td style="text-align:center"><?php echo $book['published_date'] ?></td>
                    <td style="text-align:center"><?php echo $book['id_user1'] ?></td>
                    <td><a href="../book/update_book?id=<?php echo $book['id_book'] ?>">Edit book</a></td>
                    <td><a href="../book/delete_book?id=<?php echo $book['id_book'] ?>">Delete book</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    

    <br><br>
    <a href="../inicio">Back Home</a>


</body>

</html>