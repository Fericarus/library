<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library - Add category</title>
</head>

<body>

    <div class="container">

        <div class="title_container">
            <h1>Add Category</h1>
        </div>

        <div class="main_container">

            <form action="../category/add_category" method="POST">

                <!-- Campo name_category -->
                <div class="campo">
                    <label>Categrory name: </label>
                    <input id="name_category" name="name_category" placeholder="Category's name" oninput="validarNameCategory(this.id)" required />
                    <span id="errorMessageNameCategory" style="display: none;"></span>
                </div>

                <!-- Campo author -->
                <div class="campo">
                    <label>Category description: </label>
                    <input id="description" name="description" placeholder="Write the description of the category" required>
                </div>

                <input type="submit" value="Save description" name="submit">

            </form>

        </div>

        <br><br>
        <a href="../inicio">Back Home</a>

    </div>

</body>

</html>

<script>
    function validarNameCategory(id) {
        var nombre = document.getElementById(id).value;
        var errorMessageNameCategory = document.getElementById("errorMessageNameCategory");
        var Pattern = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/;

        // Validamos contra la expresión regular
        if (!Pattern.test(nombre)) {
            errorMessageNameCategory.innerHTML = "Please enter only letters and spaces in the name field.";
            errorMessageNameCategory.style.color = "red";
            errorMessageNameCategory.style.display = "inline";
            errorMessageNameCategory.style.padding = ".5rem";
            errorMessageNameCategory.style.paddingLeft = ".5rem";
            errorMessageNameCategory.style.marginBottom = ".2rem";
            return false;
        } else {
            errorMessageNameCategory.innerHTML = "";
            errorMessageNameCategory.style.display = "none";
            return true;
        }
    }

</script>