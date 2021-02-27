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
        <li><a class="nav-item" href="cycle.php"></a></li>
        <li><a class="nav-item active" href="darkmode.php">INDX</a></li>
        <li><a class="nav-item" href="imagesloaded.php">Next</a></li>
    </nav>
</header>
<h1 id="Studio"><a href="#btm" class="wow fadeInRight"><span>darkmode*</span></a></h1>
<!--  -->
<div class="container" id="main-content">
<style>
    /* dark mode */
        body.dark--mode--jekeru {
            --color-bg--body: #181a1e;
            --color-text: #f1f1f1;
            --color--black: #1f1f1f;
            --color-text-dark: rgba(41, 82, 88, 0.97);
            --color-link: rgb(41, 82, 88);
            --color-link-hover: rgba(41, 82, 88, 0.57);
            --color-link-visited: rgba(41, 82, 88, 0.747);
            --color-link-active: rgba(41, 82, 88, 0.747);
        }

        .align-center-flex {
            display: flex;
            align-items: center;
        }

        .toggledark {
            background: #f1f1f1;
            border: 1px solid #1f1f1f;
            width: 45px;
            height: 20px;
            cursor: crosshair;
            border-radius: 20px;
            transition: 0.5s;
            transform: translate(25%);
            display: flex;
        }

        .toggledark.active {
            background: var(--color-text-dark);
            border: 1px solid #f1f1f1;
        }

        .toggledark:before {
            left: 0px;
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background: var(--color-text-dark);
            border-radius: 20px;
            transition: 0.5s;
        }

        .toggledark.active:before {
            left: 27px;
            background: #fff;
        }
    /* dark mode */
</style>
<div id="darkmode" class="container row h100">
        <script src="./assets/js/jquery/3.3.1/jquery.min.js"></script>
        <script src="./assets/js/jquery/1.4.1/jquery.cookie.min.js"></script>
        <script src="./assets/js/main-darkmode.js"></script>
        <div class="align-center-flex">
            <p>Dark mode ⇁ ⊙</p>
            <div class="toggledark"></div>&nbsp;&nbsp; ∴
        </div>
    </div>
    <script src="" async defer></script>
</div>
<!--  -->
<?php include("includes/footer.php");?>

</body>
</html>