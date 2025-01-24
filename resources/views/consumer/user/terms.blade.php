<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Forgot Password | Radmin - Laravel Admin Starter</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="https://radmin.themicly.com/favicon.png" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link href="{{ asset('plugins/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/ionicons/dist/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/icon-kit/dist/css/iconkit.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dist/css/theme.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dist/css/theme-image.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('src/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="auth-wrapper">
        <div class="container-fluid h-100">
            <div class="row flex-row h-100 bg-white">
                {{-- <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                    <div class="lavalite-bg">
                        <div class="lavalite-overlay"></div>
                    </div>
                </div> --}}
                <div class="col-xl-4  my-auto p-0"></div>
                <div class="col-xl-4  my-auto p-0">
                    <div class="logo-centered text-center">
                        <a href=""><img height="50" src="images/ipetano-logo-primary.png" alt=""></a>
                    </div>
                    <div class="register mt-4">

                        <h4>1914 translation by H. Rackham</h4>
                        <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                            pain was born and I will give you a complete account of the system, and expound the actual
                            teachings of the great explorer of the truth, the master-builder of human happiness. No one
                            rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who
                            do not know how to pursue pleasure rationally encounter consequences that are extremely
                            painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself,
                            because it is pain, but because occasionally circumstances occur in which toil and pain can
                            procure him some great pleasure. To take a trivial example, which of us ever undertakes
                            laborious physical exercise, except to obtain some advantage from it? But who has any right
                            to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences,
                            or one who avoids a pain that produces no resultant pleasure?"</p>

                        <h4>Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h4>
                        <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                            cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id
                            est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam
                            libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                            maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                            Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut
                            et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a
                            sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis
                            doloribus asperiores repellat."</p>

                        <h4>1914 translation by H. Rackham</h4>
                        <p>"On the other hand, we denounce with righteous indignation and dislike men who are so
                            beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that
                            they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to
                            those who fail in their duty through weakness of will, which is the same as saying through
                            shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a
                            free hour, when our power of choice is untrammelled and when nothing prevents our being able
                            to do what we like best, every pleasure is to be welcomed and every pain avoided. But in
                            certain circumstances and owing to the claims of duty or the obligations of business it will
                            frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man
                            therefore always holds in these matters to this principle of selection: he rejects pleasures
                            to secure other greater pleasures, or else he endures pains to avoid worse pains."
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-12 text-left">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="item_checkbox"
                                    name="item_checkbox" value="option1">
                                <span class="custom-control-label">&nbsp;I Accept <a href="#">Terms and
                                        Conditions</a></span>
                            </label>
                        </div>
                    </div>
                    <div class="sign-btn mt-2">
                        <a href="{{ url('/register') }}" id="next_link" class="btn btn-sm btn-theme"
                            style="background: #B28910; color: #fff;">Next</a>
                    </div>
                    <div class="sign-btn text-center">
                        {{-- <button class="btn btn-theme">Create Account</button> --}}
                    </div>
                    <div class="sign-btn text-center">
                        {{-- <button class="btn btn-theme">Create Account</button> --}}
                    </div>
                </div>
                <div class="col-xl-4  my-auto p-0"></div>
                {{-- <div class="col-xl-4  my-auto p-0">
                    <div class="authentication-form mx-auto">
                        <div class="logo-centered">
                            <a href=""><img width="150" src="https://radmin.themicly.com/img/logo.png"
                                    alt=""></a>
                        </div>
                        <h3>Forgot Password</h3>
                        <p>We will send you a link to reset password.</p>
                        <form method="POST" action="https://radmin.themicly.com/password/email">
                            <input type="hidden" name="_token" value="jpcMZa8K2Z3heJMjvY6xYVDcx95X3NHBnT7NRq6z">
                            <div class="form-group">
                                <input type="email" class="form-control " placeholder="Your email address"
                                    name="email" value="" required>
                                <i class="ik ik-mail"></i>
                            </div>
                            <div class="sign-btn text-center">
                                <button class="btn btn-theme">Submit</button>
                            </div>
                        </form>
                        <div class="register">
                            <p>Not a member? <a href="https://radmin.themicly.com/register">Create an account</a></p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <script src="{{ asset('src/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('plugins/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('plugins/screenfull/dist/screenfull.js') }}"></script>

    <script>
        // Get references to the checkbox and the "Next" button
        const checkbox = document.getElementById('item_checkbox');
        const nextButton = document.getElementById('next_link');

        // Initially hide the "Next" button
        nextButton.style.display = 'none';

        // Add a change event listener to the checkbox
        checkbox.addEventListener('change', function() {
            // Show the "Next" button if the checkbox is checked, otherwise hide it
            if (checkbox.checked) {
                nextButton.style.display = 'block';
            } else {
                nextButton.style.display = 'none';
            }
        });
    </script>
</body>

</html>
