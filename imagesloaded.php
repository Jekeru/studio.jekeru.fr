<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body class="loading">

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>
<header>
    <nav class="nav main">
        <li class="hide-mobile">use key arrow to navigate</li>
        <li><a class="nav-item" href="darkmode.php">prev</a></li>
        <li><a class="nav-item active" href="imagesloaded.php">INDX</a></li>
        <li><a class="nav-item" href="index.php"></a></li>
    </nav>
</header>
<h1 id="Studio"><a href="#btm" class="wow fadeInRight"><span>imagesloaded*</span></a></h1>
<!--  -->
<div class="container" id="main-content">
<img src="https://picsum.photos/300/300?random=1">
    <img src="https://picsum.photos/3000/3000?random=2">
    <img src="https://picsum.photos/4000/4000?random=3">

    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./node_modules/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script>
        $('#container').imagesLoaded()
            .always(function (instance) {
                console.log('all images loaded');
            })
            .done(function (instance) {
                console.log('all images successfully loaded');
            })
            .fail(function () {
                console.log('all images loaded, at least one is broken');
            })
            .progress(function (instance, image) {
                var result = image.isLoaded ? 'loaded' : 'broken';
                console.log('image is ' + result + ' for ' + image.img.src);
            });
    </script>
    <script>
        // Preload all the images in the page
        imagesLoaded(document.querySelectorAll('img'), {
            background: true
        }, () => document.body.classList.remove('loading'));
    </script>
    <style>
        /* Page Loader */
        .loading::before,
        .loading::after {
            content: '';
            position: fixed;
            z-index: 1000;
        }

        .loading::before {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--color-bg--body);
        }

        .loading::after {
            width: 30px;
            height: 30px;
            border: 3px solid var(--color-text);
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -13px;
            margin-left: -13px;
            border-radius: 60px;
            border-left-color: transparent;
            animation: loader 0.8s linear infinite;
            -webkit-animation: loader 0.8s linear infinite;
        }

        @keyframes loader {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            50% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-webkit-keyframes loader {
            0% {
                -webkit-transform: rotate(0deg);
            }

            50% {
                -webkit-transform: rotate(180deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }
    </style>
</div>
<!--  -->
<?php include("includes/footer.php");?>

</body>
</html>