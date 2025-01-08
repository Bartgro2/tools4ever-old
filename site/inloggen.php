<?php include 'header.php';

?>

<main class="form-signin w-100 m-auto">
    <form method="post" action="verwerk-inloggen.php">

        <h1 class="h3 mb-3 fw-normal">Log in aub</h1>

        <div class="form-floating">
            <label for="floatingInput">Email address</label>
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
        </div>
        <div class="form-floating">
            <label for="floatingPassword">Password</label>
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
    </form>
</main>



</body>

</html>