<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IPT10 - Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <!-- Section: Design Block -->
    <section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-image" style="
            background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
            height: 600px;
            "></div>
    <!-- Background image -->

    <div class="card mx-4 mx-md-5 shadow-5-strong" style="
            margin-top: -500px;
            background: hsla(0, 0%, 100%, 0.8);
            backdrop-filter: blur(30px);
            ">
        <div class="card-body py-5 px-md-5">

        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
            <h2 class="fw-bold mb-5">Register Now!</h2>
            <form method="POST" action="register.php">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <input type="text" id="form3Example1" class="form-control" name="username"/>
                    <label class="form-label" for="form3Example1">Username</label>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <input type="email" id="form3Example2" class="form-control" name="email"/>
                    <label class="form-label" for="form3Example2">Email Address</label>
                    </div>
                </div>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                <input type="password" id="form3Example3" class="form-control" name="password"/>
                <label class="form-label" for="form3Example3">Password</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" name="confirmpassword"/>
                <label class="form-label" for="form3Example4">Confirm Password</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4" name="registeruser">
                Register
                </button>

            </form>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!-- Section: Design Block -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>