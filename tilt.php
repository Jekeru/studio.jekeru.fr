<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>
<header>
        <nav class="nav main">
            <li class="hide-mobile">use key arrow to navigate</li>
            <li><a class="nav-item" href="css.php">Prev</a></li>
            <li><a class="nav-item active" href="tilt.php">INDX</a></li>
            <li><a class="nav-item" href="flowmap.php">Next</a></li>
        </nav>
</header>
<h1 id="Studio"><a href="#btm" class="wow fadeInRight"><span>tilt*</span></a></h1>
<!--  -->
<div class="container" id="main-content">
    <style>
        /* Custom CSS Vanilla-tilt
        * --------------------------------------- */
        .tilt-me {
            max-width: 66vh;
            margin: auto;
        }

        .logo {
            display: block;

            width: 100%;
            max-width: 200px;
            height: 200px;

            line-height: 200px;
            text-align: center;

            color: white;
            font-size: 2em;

            /* background: #0099F7; */
            /* fallback for old browsers */
            /* background: -webkit-linear-gradient(135deg, #0099F7, #F11712); */
            /* Chrome 10-25, Safari 5.1-6 */
            /* background: linear-gradient(135deg, #0099F7, #F11712); */
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            background:
                url(assets/img/YKN.jpg)
                /* image */
                top center / 200px 200px
                /* position / size */
                no-repeat
                /* repeat */
                /* fixed */
                /* attachment */
                padding-box
                /* origin */
                content-box
                /* clip */
                blue;
            /* color */

            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-transform: perspective(500px);
            transform: perspective(500px);
            margin-bottom: 75px;

            margin: auto;
        }

        .logo>span {
            position: relative;
            display: block;
            -webkit-transform: translateZ(50px) scale(0.7);
            transform: translateZ(50px) scale(0.7);
        }

        .logo>span:after {
            content: "GitHub";
            position: absolute;
            color: white;
            font-size: 18px;
            top: 36px;
            left: 50%;
            transform: translateX(-50%);

            opacity: 0.8;

            transition: 0.3s ease all;
        }

        .logo>span:before {
            content: "View source";
            position: absolute;
            color: white;
            font-size: 18px;
            top: 36px;
            left: 50%;
            transform: translateX(-50%) translateY(-10px);

            opacity: 0;

            display: inline-block;
            width: 100%;

            transition: 0.3s ease all;
        }

        .logo:hover>span:after {
            opacity: 0;
            transform: translateX(-50%) translateY(10px);
        }

        .logo:hover>span:before {
            opacity: 0.8;
            transform: translateX(-50%);
        }

        .logo>span>span {
            display: block;
            font-size: 12px;
        }

        .logo:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: #333;
            box-shadow: 0 20px 70px -10px rgba(51, 51, 51, 0.7), 0 50px 100px 0 rgba(51, 51, 51, 0.2);
            z-index: -1;
            -webkit-transform: translateZ(-50px);
            transform: translateZ(-50px);
            -webkit-transition: .3s;
            transition: .3s;
        }
    </style>
    <div class="container row h100">
            <div class="tilt-me" style="transform-style: preserve-3d">
                <img src="./assets/img/YKN.jpg">
            </div>
    </div>
    <!-- <div class="container row h100">
            <a href="#top" class="logo tilt-me" id="logo">
                <span>Jeke.ru</span>
            </a>
    </div>
    <div class="container row h100">
            <a href="#top" class="logo   " data-tilt>
                <img src="./assets/img/YKN.jpg" alt="Card image cap"
                    style="transform: translateZ(50px) perspective(300px);">
                <div>
                    <h5>Studio</h5>
                </div>
                <div style="transform: translateZ(30px) perspective(100px);">
                    <p>Studio</p>
                </div>
            </a>
    </div> -->
    <script src="./node_modules/vanilla-tilt/dist/vanilla-tilt.min.js"></script>
    <script>
        //matchmedia
        if (window.matchMedia("(min-width:800px)").matches) {
            //vanilla-tilt init
            $(function () {
                VanillaTilt.init(document.querySelectorAll(".tilt-me"), {
                    reverse: false, // reverse the tilt direction
                    max: 35, // max tilt rotation (degrees)
                    startX: 0, // the starting tilt on the X axis, in degrees.
                    startY: 0, // the starting tilt on the Y axis, in degrees.
                    perspective: 1000, // Transform perspective, the lower the more extreme the tilt gets.
                    scale: 1.1, // 2 = 200%, 1.5 = 150%, etc..
                    speed: 300, // Speed of the enter/exit transition
                    transition: true, // Set a transition on enter/exit.
                    axis: null, // What axis should be disabled. Can be X or Y.
                    reset: true, // If the tilt effect has to be reset on exit.
                    easing: "cubic-bezier(.03,.98,.52,.99)", // Easing on enter/exit.
                    glare: true, // if it should have a "glare" effect
                    "max-glare": 0.5, // the maximum "glare" opacity (1 = 100%, 0.5 = 50%)
                    "glare-prerender": false, // false = VanillaTilt creates the glare elements for you, otherwise
                    // you need to add .js-tilt-glare>.js-tilt-glare-inner by yourself
                    "mouse-event-element": null, // css-selector or link to HTML-element what will be listen mouse events
                    "full-page-listening": false, // If true, parallax effect will listen to mouse move events on the whole document, not only the selected element
                    gyroscope: true, // Boolean to enable/disable device orientation detection,
                    gyroscopeMinAngleX: -
                        45, // This is the bottom limit of the device angle on X axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the left border of the element;
                    gyroscopeMaxAngleX: 45, // This is the top limit of the device angle on X axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the right border of the element;
                    gyroscopeMinAngleY: -
                        45, // This is the bottom limit of the device angle on Y axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the top border of the element;
                    gyroscopeMaxAngleY: 45, // This is the top limit of the device angle on Y axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the bottom border of the element;
                    gyroscopeSamples: 10 // How many gyroscope moves to decide the starting position.
                });
            });
        } else {
            // On ne fait rien de particulier...

        }
    </script>
</div>
<!--  -->
<?php include("includes/footer.php");?>

</body>
</html>