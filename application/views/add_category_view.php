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

            <form action="" method="POST">

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

    </div>

</body>

</html>

<script>
    function validarNombre(id) {
        var nombre = document.getElementById(id).value;
        var errorMessageNombre = document.getElementById("errorMessageNombre");
        var Pattern = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/;

        // Validamos contra la expresión regular
        if (!Pattern.test(nombre)) {
            errorMessageNombre.innerHTML = "Please enter only letters and spaces in the name field.";
            errorMessageNombre.style.color = "red";
            errorMessageNombre.style.display = "inline";
            errorMessageNombre.style.padding = ".5rem";
            errorMessageNombre.style.paddingLeft = ".5rem";
            errorMessageNombre.style.marginBottom = ".2rem";
            return false;
        } else {
            errorMessageNombre.innerHTML = "";
            errorMessageNombre.style.display = "none";
            return true;
        }
    }

    function validarAutor(id) {
        var autor = document.getElementById(id).value;
        var errorMessageNombre = document.getElementById("errorMessageNombre");
        var Pattern = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/;

        // Validamos contra la expresión regular
        if (!Pattern.test(autor)) {
            errorMessageAutor.innerHTML = "Please enter only letters and spaces in the author field..";
            errorMessageAutor.style.color = "red";
            errorMessageAutor.style.display = "inline";
            errorMessageAutor.style.padding = ".5rem";
            errorMessageAutor.style.paddingLeft = ".5rem";
            errorMessageAutor.style.marginBottom = ".2rem";
            return false;
        } else {
            errorMessageAutor.innerHTML = "";
            errorMessageAutor.style.display = "none";
            return true;
        }
    }
</script>