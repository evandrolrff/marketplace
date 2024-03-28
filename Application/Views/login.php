<div class="container text-center">
    <div class="row justify-content-center">
        <form method="post" action="./Controller/valida.php" class="col-5">
            <h1 class="h3 mb-3 fw-normal">Login</h1>

            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" autocomplete="off" required>
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" autocomplete="off" required>
                <label for="floatingPassword">Password</label>
            </div>

            <?php
            if (isset($_GET['error'])) {
                echo "<div class='alert alert-danger' role='alert'>O usuário ou senha está inválido!</div>";
            }
            ?>

            <div class="my-3">
                <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
            </div>
            <div class="my-3">
                <a href="signup" class="btn btn-outline-primary w-100 py-2" role="button" aria-pressed="true">Sign up</a>
            </div>
        </form>
    </div>
</div>