<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">Create an account</a>
                    </div>
<form method="POST" action="register.php" class="register-form" id="login-form">

    <div class="form-group">
        <input type="text" name="your_name" id="your_name" placeholder="Name">
    </div>

    <div class="form-group">
        <input type="text" name="your_surname" id="your_surname" placeholder="Surname">
    </div>

    <div class="form-group">
        <input type="email" name="your_email" id="your_email" placeholder="Email">
    </div>

    <div class="form-group">
        <input type="password" name="your_pass" id="your_pass" placeholder="Password">
    </div>

    <div class="form-group">
        <input type="password" name="your_pass_repeat" id="your_pass_repeat" placeholder="Repeat Password">
    </div>

    <div class="form-group form-button">
        <input type="submit" name="signin" id="signin" class="form-submit" value="Register">
    </div>

</form>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>