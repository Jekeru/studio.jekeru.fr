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
        <li><a class="nav-item" href="tilt.php">Prev</a></li>
        <li><a class="nav-item active" href="flowmap.php">INDX</a></li>
        <li><a class="nav-item" href="cycle.php">Next</a></li>
    </nav>
</header>
<h1 id="Studio"><a href="#btm" class="wow fadeInRight"><span>flowmap*</span></a></h1>
<!--  -->
<div class="container" id="main-content">
<style>
    /* Flowmap */
    .cover-image {
        margin: 0;
        padding: 0;
        border: 0;
        vertical-align: baseline;
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        /* background-image: url('./assets/img/large.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 50% 50%;
        background-attachment: scroll; */
        background-color: transparent;
        z-index: -1;
        display:flex;
    }
    .cover-image video{
        margin:auto;
        max-width:50%
    }

    canvas.flowmap {
        mix-blend-mode: difference;
        position: absolute;
        width: 100%;
        height: 100vh;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: -1;
    }
    /* Flowmap */
</style>
<div class="cover-image">
<video autoplay muted loop playsinline src="https://jekeru.fr/assets/img/tstst.mp4"></video>
</div>
<script type="text/javascript" src="./assets/js/bundle.js"></script>
<script type="module" src="./assets/js/flowmap.js"></script>
</div>
<!--  -->
<?php include("includes/footer.php");?>

</body>
</html>