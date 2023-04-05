<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library - Add book</title>
</head>

<body>

    <div class="container">

        <div class="title_container">
            <h1>Add book</h1>
        </div>

        <div class="main_container">

            <form action="" method="POST">

                <!-- Campo name -->
                <div class="campo">
                    <label>Name: </label>
                    <input id="name" name="name" placeholder="Book's name" oninput="validarNombre(this.id)" required />
                    <span id="errorMessageNombre" style="display: none;"></span>
                </div>

                <!-- Campo author -->
                <div class="campo">
                    <label>Author: </label>
                    <input id="author" name="author" placeholder="Author's name" oninput="validarAutor(this.id)" required>
                    <span id="errorMessageAutor" style="display: none;"></span>
                </div>

                <!-- Campo Category -->
                <div class="campo">
                    <label>Category: </label>
                    <!-- <input type="text" name="id_category1" placeholder="Book category"> -->
                    <select name="id_category1" required>
                        <option value="">Select a category</option>
                        <option value="1">Adventure</option>
                        <option value="2">Romance</option>
                        <option value="3">Science fiction</option>
                        <option value="4">Biographies</option>
                        <option value="5">Mistery</option>
                        <option value="6">Fantasy</option>
                        <option value="7">Business</option>
                        <option value="8">History</option>
                        <option value="9">Policy</option>
                        <option value="10">Self help</option>
                    </select>

                </div>

                <!-- Campo Published date -->
                <div class="campo">
                    <label>Published date: </label>
                    <input type="text" name="published_date" placeholder="YYY-MM-DD" required>
                </div>

                <input type="submit" value="Save book" name="submit">

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