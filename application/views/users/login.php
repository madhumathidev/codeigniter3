<!DOCTYPE html>
<html>

<head>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!------ Include the above in your HEAD tag ---------->
</head>
<style>
body {
    background-image: url('assets/img/library.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}

.btn_size {
    background-color: white;
    /* Green */
    border: black;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    /* cursor: pointer; */
    border-radius: 20px;
}
.btn-primary.btn_size {
    color: #fff;
    background-color: #010101;
    border-color: #090909;
    border-radius: 25px;
    padding: 10px 40px;
    font-size: 16px;
}
</style>

<body>
    <!-- Status message -->
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>

    <main>
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top">
            <a href="#" class="navbar-brand">My website</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li clas="navbar-item">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li clas="navbar-item">
                        <a href="#" class="nav-link">Membership</a>
                    </li>
                    <li clas="navbar-item">
                        <a href="#" class="nav-link">Forum</a>
                    </li>
                    <li clas="navbar-item">
                        <a href="#" class="nav-link">Podcasts</a>
                    </li>
                    <li clas="navbar-item">
                        <a href="#" class="nav-link">Submissions</a>
                    </li>
                    <li clas="navbar-item">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                    <li clas="navbar-item">
                        <a href="#" class="nav-link  btn-default" id="btnRegister">Sign Up</a>
                    </li>
                    <li clas="navbar-item">
                        <a class="nav-link btn btn-default" href="" data-toggle="modal" data-target="#loginModal" id="btnLogin">Login</a>
                    </li>
                </ul>
            </div>
        </nav>


        
        <article>
            <div class="container">
                <!-- <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">
                    Login
                </button> -->
            </div>

            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header border-bottom-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-title text-center ">
                                <h4 style="top=-45">Login</h4>
                            </div>
                            <div class="d-flex flex-column text-center">
                                <form>
                                    <div class="form-group">
                                        <input type="text" name="email" id="email" class="form-control"
                                            placeholder="Your email address...">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="password" id="password"
                                            placeholder="Your password...">
                                    </div>
                                    <!-- <div class="g-recaptcha" data-sitekey="6Ldbdg0TAAAAAI7KAf72Q6uagbWzWecTeBWmrCpJ">
                                    </div> -->
                                    <button type="submit" class="btn btn_size btn-primary">Sign in</button>
                                    <div class="mt-3">
                                        <h6>Don't have an account,<a href="" data-toggle="modal" data-target="#registerModal">Register</a></h6>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </article>
    </main>


    <article>
        <div class="container">
            <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#registerModal">
                register
            </button>
        </div>

        <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-title text-center">
                            <h4 style="top=-45">Join Kim Ayres Online</h4>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <form>
                            <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Your name...">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" id="email" class="form-control"
                                        placeholder="Your email address...">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="password" id="password"
                                        placeholder="Your password...">
                                </div>
                                <div class="form-group text-left">
                                    <label class="checkbox-inline">
                                        <input type="checkbox"  value=""> Get updates on our weekly newsletter
                                    </label>
                                </div>
                                <div class="form-group text-left">
                                    <label class="checkbox-inline">
                                        <input type="checkbox"  value=""> Accept our terms and conditions
                                    </label>
                                </div>
                                <button type="submit" class="btn btn_size btn-primary">Sign in</button>
                                <div>
                                    <h6>Already have an account <a href="#">Sign in</a></h6>
                                </div>
                                <div>
                                    <h6>Enjoy your one month free trail</h6>
                                    <a href="#">Checkout our plans </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </article>
<!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    <!-- <footer class="credit">Author: Cristina - Distributed By: <a title="Awesome web design code & scripts" href="https://www.codehim.com?source=demo-page" target="_blank">CodeHim</a></footer> -->
    <!-- jQuery -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
    <!-- Popper JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
    <!-- Bootstrap JS -->
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <!-- Custom Script -->
    <script src="assets/js/script.js"></script>

    <!-- <script>
    $(document).ready(function() {

        $("#loginModal").modal("hide");
        $('#myModal').modal('hide');
    });
    </script> -->


</body>

</html>