<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Amanah Response - Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background: #2d2d2d;
            color: #fff;
            padding: 30px;
            border-radius: 8px;
            width: 350px;
            text-align: center;
        }

        .login-box h4 {
            color: #5cb85c;
        }

        .btn-login {
            background-color: #28a745;
            border: none;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <h4>AMANAH RESPONSE</h4>
        <p>Login as Admin</p>
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>
        <form action="<?= base_url('/auth/login') ?>" method="post">
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-success btn-block btn-login">Masuk</button>
        </form>
    </div>
</body>

</html>