<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
</head>

<body>

            <h1 class="mb-15">Login Disarprass</h1>

            <?php if (session()->getFlashdata('error')): ?>
                <p style="color:red"><?= session()->getFlashdata('error') ?></p>
            <?php endif; ?>

            <?php if (session()->getFlashdata('salahpw')): ?>
                <p style="color:red"><?= session()->getFlashdata('salahpw') ?></p>
            <?php endif; ?>

            <form action="<?= base_url('/proses-login') ?>" method="post">
                            <label>Username</label>
                            <input type="text" name="username" placeholder="username" />
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password" />
                            <button>Sign In</button>
    </div>

</body>


</html>
