<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Add user</title>
</head>

<body>

    <div class="container">

        <div class="title_container">
            <h1>Add User</h1>
        </div>

        <div class="main_container">

            <form action="../user/add_user" method="POST">

                <!-- Campo name_user -->
                <div class="campo">
                    <label>User name: </label>
                    <input id="name_user" name="name_user" placeholder="User's name" oninput="validarNameUser(this.id)" required />
                    <span id="errorMessageNameUser" style="display: none;"></span>
                </div>

                <!-- Campo author -->
                <div class="campo">
                    <label>Email: </label>
                    <input id="email" name="email" placeholder="please enter email" oninput="validarEmail(this.id)" required>
                    <span id="errorMessageEmail" style="display: none;"></span>
                </div>

                <input type="submit" value="Save User" name="submit">

            </form>

        </div>

        <br><br>
        <a href="../inicio">Back Home</a>

    </div>

</body>

</html>

<script>
    function validarNameUser(id) {
        var name_user = document.getElementById(id).value;
        var errorMessageNameUser = document.getElementById("errorMessageNameUser");
        var Pattern = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/;

        // Validamos contra la expresión regular
        if (!Pattern.test(name_user)) {
            errorMessageNameUser.innerHTML = "Please enter only letters and spaces in the name field.";
            errorMessageNameUser.style.color = "red";
            errorMessageNameUser.style.display = "inline";
            errorMessageNameUser.style.padding = ".5rem";
            errorMessageNameUser.style.paddingLeft = ".5rem";
            errorMessageNameUser.style.marginBottom = ".2rem";
            return false;
        } else {
            errorMessageNameUser.innerHTML = "";
            errorMessageNameUser.style.display = "none";
            return true;
        }
    }

    function validarEmail(id) {
        var email = document.getElementById(id).value;
        var errorMessageEmail = document.getElementById("errorMessageEmail");
        var Pattern = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;

        // Validamos contra la expresión regular
        if (!Pattern.test(email)) {
            errorMessageEmail.innerHTML = "Please enter a valid email address.";
            errorMessageEmail.style.color = "red";
            errorMessageEmail.style.display = "inline";
            errorMessageEmail.style.padding = ".5rem";
            errorMessageEmail.style.paddingLeft = ".5rem";
            errorMessageEmail.style.marginBottom = ".2rem";
            return false;
        } else {
            errorMessageEmail.innerHTML = "";
            errorMessageEmail.style.display = "none";
            return true;
        }
    }
</script>