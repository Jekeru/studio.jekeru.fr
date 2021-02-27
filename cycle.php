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
        <li><a class="nav-item" href="flowmap.php">Prev</a></li>
        <li><a class="nav-item active" href="cycle.php">INDX</a></li>
        <li><a class="nav-item" href="darkmode.php">Next</a></li>
    </nav>
</header>
<h1 id="Studio"><a href="#btm" class="wow fadeInRight"><span>cycle*</span></a></h1>
<!--  -->
<div class="container" id="main-content">
<script src="./assets/js/jquery.cycle2.min.js"></script>
    <style>
        .cycle-slide {
            height: 33vh !important
        }

        img.cycle-next {
            cursor: url(https://jekeru.fr/assets/img/cursor.png), e-resize;
        }

        figcaption {
            max-width:33vh;
            text-align:center;
        }
    </style>
    <section class="project container row h100">
        <figure class="cycle-slideshow" data-cycle-timeout="0" data-cycle-fx="none" data-cycle-speed="50"
            style="position: relative;"><img class="cycle-next cycle-slide cycle-sentinel" src="./assets/img/image1.jpg">
            <span class="cycle-caption">1 / 5——</span>
            <img class="cycle-next cycle-slide cycle-slide-active" src="./assets/img/image3.jpg">
            <img class="cycle-next cycle-slide" src="./assets/img/image2.jpg">
            <img class="cycle-next cycle-slide" src="./assets/img/image3.jpg">
            <img class="cycle-next cycle-slide" src="./assets/img/image4.jpg">
            <img class="cycle-next cycle-slide" src="./assets/img/image3.jpg">
            <img class="cycle-next cycle-slide" src="./assets/img/image2.jpg">
            <img class="cycle-next cycle-slide" src="./assets/img/image1.jpg">
            <img class="cycle-next cycle-slide" src="./assets/img/image2.jpg">
        </figure>
        <figcaption>
            <span>Img slider on clic with countdown figcaption</span>
        </figcaption>
    </section>
</div>
<!--  -->
<?php include("includes/footer.php");?>

</body>
</html>