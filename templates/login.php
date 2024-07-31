<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<span id="stamina">Stamina</span>
<div class="login_form">
    <form>
        <div class="login_option">
            <!-- Google button -->
            <div class="option">
                <a href="#">
                    <img src="../assets/images/google.png" alt="Google" />
                    <ref>Google</ref>
                </a>
            </div>
            <!-- Apple button -->
            <div class="option">
                <a href="#">
                    <img src="../assets/images/apple.png" alt="Apple" />
                    <ref>Apple</ref>
                </a>
            </div>
        </div>
        <!-- Login option separator -->
        <p class="separator">
            <ref>or</ref>
        </p>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <p class="sign_up">Don't have an account ? <a href="sign.php">Sign up</a></p>
</div>
</form>



</body>
</html>
