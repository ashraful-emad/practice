<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <form action="../control/login_data.php " method="Post">
        <?php
      if(isset($error)){
         foreach($error as $error){
           
         echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?><br>


        <fieldset>

            <label for="email">Email</label>
            <br>
            <input type="text" name="email" id="email" placeholder="Email" value="">
            <br>
            <label for="password">Password</label>
            <br>
            <input type="password" name="password" id="password" placeholder="Password" value="">
            <input type="checkbox" name="showpassword" id="showpassword" onclick="myFunction()">
            <br>
            <input type="submit" class="btn btn-success" name="login" id="login" value="Login">


        </fieldset>

    </form>





    <form method="post" action="../control/registration_data.php">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registration">
            Registration here
        </button>

        <!-- Modal -->
        <div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="registrationLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="registrationLabel">Registration</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <fieldset>

                            <label for="name">Name:</label>
                            <br>
                            <input type="text" name="name" id="name" value="">

                            <br>
                            <label for="email">Email:</label>
                            <br>
                            <input type="text" name="email" id="email" value="">

                            <br>
                            <br>
                            <label for="password">Password:</label>
                            <br>
                            <input type="password" name="password" id="rpassword" placeholder="Password" value="">
                            <input type="checkbox" name="showpassword" id="showpassword" onclick="myFunc()">
                            <br>
                            <br>
                            <label for="number">Number:</label>
                            <br>
                            <input type="text" name="number" id="number" value="">

                            <input type="hidden" name="role" id="role" value="User">

                            <br>



                        </fieldset>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" name="submit" id="submit" Value="Submit">
                    </div>
                </div>
            </div>
        </div>


    </form>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>



    <script>
    function myFunction() {
        var password = document.getElementById("password");

        if (password.type === "password") {
            password.type = "text";
        } else {

            password.type = "password";
        }


    }
    </script>


    <script>
    function myFunc() {
        var password = document.getElementById("rpassword");

        if (password.type === "password") {
            password.type = "text";
        } else {

            password.type = "password";
        }


    }
    </script>



</body>






</html>