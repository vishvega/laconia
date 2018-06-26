<?php include __DIR__ . '/partials/header.php'; ?>

<?php include __DIR__ . '/partials/page-header.php'; ?>

    <section class="content-section">
        <div class="tiny-container">

            <h2>Create a new account</h2>
            <p>Don't delay. Sign up for Laconia today.</p>

            <?php include __DIR__ . '/partials/message.php'; ?>

            <form action="" method="post">
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
                <input type="submit" name="register" value="Register">
                <a class="button" href="/forgot-password">Forgot Password?</a>
            </form>
        </div>
    </section>

<?php include __DIR__ . '/partials/footer.php'; ?>