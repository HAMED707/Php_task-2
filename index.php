<?php

const WEBSITE_STATUS = false;
const ITEM_COUNT = 'courses'; //products or courses

$homeLink = "Home";
$infoLink = "Info";
$aboutLink = "About";


$title = "Company OF Heroes";
$srcLogo = "images/01.png";
$image = "images/02.jpeg";

$faceBook = "#";
$twitter = "#";
$web = "#";



$active_color = "#155e16";
$navfooter_color = "rgb(0, 0, 0)";
$body_color = "#DBDBDB";



// start  products

$imgOf1 = "images/download (2).jpg";
$priceOf1 = "22$";


$imgOf2 = "images/download (2).jpg";
$priceOf2 = "22$";


$imgOf3 = "images/download (2).jpg";
$priceOf3 = "22$";


$imgOf4 = "images/download (2).jpg";
$priceOf4 = "22$";

// end of products
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css ">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap">
    <title>
        <?= $title ?>
    </title>
</head>

<body>


    <style>
        :root {
            --active-color:
                <?= $active_color ?>
            ;
            --navfooter-color:
                <?= $navfooter_color ?>
            ;


        }

        body {
            background-color:
                <?= $body_color ?>
            ;
        }
    </style>



    <?php if (WEBSITE_STATUS == true): ?>
        <nav>
            <!-- <p><span>C</span>ompany OF Heroes </p> -->
            <div class="logo"> <img src="<?= $srcLogo ?>"> </div>
            <ul class="option_box">
                <li> <a class="active" href="">
                        <?= $homeLink ?>
                    </a> </li>
                <li> <a href="">
                        <?= $infoLink ?>
                    </a> </li>
                <li> <a href="">
                        <?= $aboutLink ?>
                    </a> </li>
            </ul>
        </nav>

    <?php endif; ?>

    <div class="title">
        <h1>Company OF <span>Heroes</span> </h1>
        <h3>
            <?= WEBSITE_STATUS == true ? "The site is active" : "Sorry, enter data" ?>
        </h3>
    </div>

    <?php if (WEBSITE_STATUS == true): ?>
        <!-- start cards -->

        <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!--     start       -->

                <?php if (ITEM_COUNT == 'products'): ?>
                    <div class="carousel-item active">

                        <div class="card-wrapper container-sm d-flex  justify-content-around">
                            <div class="card  " style="width: 18rem;">
                                <img src="<?= $imgOf1 ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= $priceOf1 ?>
                                    </h5>

                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="<?= $imgOf2 ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= $priceOf2 ?>
                                    </h5>

                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="<?= $imgOf2 ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= $priceOf2 ?>
                                    </h5>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">

                        <div class="card-wrapper container-sm d-flex   justify-content-around">
                            <div class="card  " style="width: 18rem;">
                                <img src="<?= $imgOf4 ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= $priceOf4 ?>
                                    </h5>

                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="<?= $imgOf1 ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= $priceOf1 ?>
                                    </h5>

                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="<?= $imgOf3 ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= $priceOf3 ?>
                                    </h5>

                                </div>
                            </div>
                        </div>
                    </div>

                <?php elseif (ITEM_COUNT == 'courses'): ?>
                    <div class="carousel-item active">

                        <div class="card-wrapper container-sm d-flex  justify-content-around">
                            <div class="card  " style="width: 18rem;">
                                <img src="<?= $imgOf1 ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= $priceOf1 ?>
                                    </h5>

                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="<?= $imgOf2 ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= $priceOf2 ?>
                                    </h5>

                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="<?= $imgOf3 ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= $priceOf3 ?>
                                    </h5>

                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="<?= $imgOf4 ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= $priceOf4 ?>
                                    </h5>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- <div class="carousel-item">
                <div class="card-wrapper container-sm d-flex  justify-content-around">
                    <div class="card " style="width: 18rem;">
                        <img src="<?= $imgOf1 ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $priceOf3 ?></h5>

                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $imgOf1 ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $priceOf3 ?></h5>

                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="images/images (1).jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $priceOf3 ?></h5>

                        </div>


                    </div>

                </div>
            </div> -->
                <!--     end       -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- end cards cards -->


            <!-- start landing page -->
            <div class="title">
                <h1> </h1>
            </div>
            <div class="langing_page">




                <div class="tank_descripion">
                    <span>Tank :</span>
                    <p>Tank war is a type of military conflict that involves the use of armored vehicles called tanks.
                        <br>
                        <br>

                        These tanks are heavily armed and armored, and are used to engage in battles and tactical
                        maneuvers
                        against enemy forces. <br> <br>

                        Tank warfare has been a significant part of many major conflicts throughout history, including
                        World
                        War
                        I, World War II, and the Gulf War. <br> <br>

                        In tank warfare, strategic planning, skilled maneuvering, and effective use of firepower are
                        crucial
                        for
                        success on the battlefield.
                    </p>

                </div>
                <div class="tank_img"><img alt="" src="<?= $image ?>"></div>
            </div>
            <!-- end landing page -->

            <!-- start footer -->

            <footer>
                <ul>
                    <li><a href=" <?= $faceBook ?>"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="<?= $twitter ?>"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href=" <?= $web ?>"><i class="fa-solid fa-globe"></i></a></li>
                </ul>
            </footer>

            <!-- end footer -->
            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/all.min.js"></script>
    </body>
<?php endif; ?>

</html>