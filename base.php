<?php

session_start();
$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$base_url .= "://" . $_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
$_SESSION['baseURL'] = $base_url;

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is an AI Content Generator Tool, with this you we can generate anytype of content in a click by using AI">
    <meta name="Developer" content="Muhammad Saad ur Rehman">
    <title>Wee | AI Content Generator </title>

    <!-- Bootstrap core CSS -->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./res/css/style.css" rel="stylesheet">
    <!-- Favicons -->



    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
</head>

<body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo $base_url; ?>"> <img src="./res/images/logo-white.png" alt=""> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo $base_url; ?>">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_SESSION['baseURL']; ?>article-generator">Article Writer</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_SESSION['baseURL']; ?>outline-generator">Outline Generator</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_SESSION['baseURL']; ?>product-description">Product Description</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_SESSION['baseURL']; ?>job-description">Job Description</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_SESSION['baseURL']; ?>tweet-ideas">Tweet Content</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_SESSION['baseURL']; ?>cold-emails">Cold Email</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_SESSION['baseURL']; ?>social-media">Social Ads</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_SESSION['baseURL']; ?>business-pitch">Pitch Ideas</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Videos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo $_SESSION['baseURL']; ?>video-ideas">Video Ideas</a></li>
                            <li><a class="dropdown-item" href="<?php echo $_SESSION['baseURL']; ?>video-description">Video Description</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">More Comming Soon</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Block Rending -->
    <main id="main" class="container">
        <?php echo $this->renderBlock('body'); ?>
    </main>

    <!-- footer -->
    <section class="contact-area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="contact-content text-center">

                        <div class="contact-social">
                            <ul>
                                <li><a class="hover-target" href="https://www.youtube.com/@Mr-ChatGPT"><img src="./res/images/youtube.svg" alt="youtube-icon"></a></li>
                                <li><a class="hover-target" href="https://www.linkedin.com/in/muhammed-saad-ur-rehman-56b237215/"><img src="./res/images/linkedin.svg" alt="linkedin-icon"></a></li>
                                <li><a class="hover-target" href="https://www.facebook.com/muhammedsaad.ulrehman"><img src="./res/images/facebook.svg" alt="facebook-icon"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============== 1.9 Contact Area End ====================-->
    <!-- =============== 1.9 Footer Area Start ====================-->
    <footer>
        <p>Copyright &copy; 2023 | All Rights Reserved.</p>
    </footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./res/js/tool-functions.js"></script>

</body>

</html>