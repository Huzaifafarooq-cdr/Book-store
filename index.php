<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto+Slab:wght@300;400;500;600;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">


</head>

<body>
    <section class="header"
        style="background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),url(img3.jpg);">
        <nav>
            <a href="index.php"><img src="logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="bookstore.html">BOOKS</a></li>
                    <li><a href="membership.html">MEMBERSHIP </a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="contact.html">CONTACT US</a></li>
                    <br>
                    <?php
                    if(isset($_SESSION['username'])){
                    ?>
                     <div>
                        <a href="logout.php" class="hero-btn" style="border: 1px solid white;">LOGOUT</a>
                    </div>
                   
                    <?php
                    
                }else{
                    ?>
                    <div>
                        <a href="login.php" class="hero-btn" style="border: 1px solid white;">LOGIN</a>
                        <a href="signin.php" class="hero-btn" style="border: 1px solid white;">REGISTER</a>
                    </div>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>RENT READ RETURN</h1>
            <p>Select books on our website and ask for a delivery at your home or office. <br>After you've finished
                reading,
                ask for another delivery and we'll <br>pick up the earlier books. It's convenient.</p>
            <a href="about.html" class="hero-btn">Know More</a>
        </div>
    </section>

    <!-- Books Section -->
    <section class="course">
        <h1>WE OFFER</h1>
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur consectetur unde repellat, tempora esse
            aspernatur ipsam totam ea, doloribus dolore assumenda quisquam! Aut porro officia laboriosam reiciendis
            assumenda. Asperiores, illo?</p> -->
        <div class="row">
            <div class="course-col">
                <h3>NO DUE DATE</h3>
                <p>Your rental begins on the date your book is delivered, based on your Reference ID , and must be
                    returned by the last day of your rental period. Otherwise, we assume you are extending your rental.

                    If your book is not returned by the end of your initial rental period, and you have not otherwise
                    extended your rental period, you will automatically be charged for a second extension.</p>
            </div>
            <div class="course-col">
                <h3>FREE SHIPPING</h3>
                <p>Millions of books & collectibles are offered for sale by bookstores and booksellers on Rent Read Return, and
                    many of them are available with free shipping. Shipping is always free both ways. There are never any hidden charges or late fees.</p>
            </div>
            <div class="course-col">
            <h3>MEMBERSHIP PLANS</h3>
                <p>        Membership plans at DoorstepBooks have been devised keeping in mind the varied reading needs of our members.
               
                            To choose your plan, first decide the number of books you would like to read per month, and then decide on the
                            duration of the plan. Remember, the longer the duration, the less you pay.</p>
            </div>
        </div>

    </section>

   <!-- featured books -->




    <!-- feature books com -->

    <div class="small-container">
        <h2 class="title">
            FEATURED BOOKS

        </h2>
        <div class="row1">
            <div class="col-4">
                <img src="nov1.PNG">
                <h4>THE ADVENTURE OF TOM SAWYER</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <br>
                <a href="membership.html" class="rent">RENT</a>

            </div>
            <div class="col-4">
                <img src="nov2.PNG">
                <h4>DEAR OFFICE YOU SUCK</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <br>
                <a href="membership.html" class="rent">RENT</a>

            </div>
            <div class="col-4">
                <img src="nov3.PNG">
                <h4>TALLAB</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <br>
                <a href="membership.html" class="rent">RENT</a>

            </div>

        </div>
        <div class="categories">
            <div class="small-container">
                <h2 class="title">POPULAR AUTHORS</h2>
                <div class="row1">
                    <div class="col-3">
                        <img src="nov45.jpg" style="cursor: pointer;">
                        <h3>DAN BROWN</h3>
                    </div>
                    <div class="col-3">
                        <img src="story4.jpg" style="cursor: pointer;">
                        <h3>DAVID BALACCI</h3>
                    </div>
                    <div class="col-3">
                        <img src="fic4.PNG" style="cursor: pointer;">
                        <h3>NORA ROBERTS    </h3>
                    </div>
                </div>
            </div>
        </div>


        <!-- LATEST BOOKS -->


        <h2 class="title">
            LATEST BOOKS

        </h2>
        <div class="row1">
            <div class="col-4">
                <img src="fic1.PNG">
                <h4>LOVE LITTLE STRONGER</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <br>
                <a href="membership.html" class="rent">RENT</a>
            </div>
            <div class="col-4">
                <img src="fict7.PNG">
                <h4>HER LAST WISH</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <br>
                <a href="membership.html" class="rent">RENT</a>
            </div>
            <div class="col-4">
                <img src="fic3.PNG">
                <h4>RAAVAN : ENEMY OF ARYAVARTA</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <br>
                <a href="membership.html" class="rent">RENT</a>
            </div>
        </div>
    </div>


    <!-- offers -->

    <div class="offer">
        <div class="small-container">
            <div class="row1">
                <div class="col-2">
                    <img src="offer.jpg" class="offer-img">
                </div>
                <div class="col-2">
                    <p style="color: black; text-decoration: underline;">EXCLUSIVE AVAILABLE</p>
                    <h1>STEPHEN KING IT</h1>
                    <small style="color: black;">
                        It’s a small city, a place as hauntingly familiar as your own hometown. Only in Derry the
                        haunting is real.They were seven teenagers when they first stumbled upon the horror. Now they
                        are grown-up men
                        and women who have gone out into the big world to gain success and happiness. But none of them
                        can withstand the force that has drawn them back to Derry to face the nightmare without an end,
                        and the evil without a name.
                    </small>
                    <br>
                    <br>
                    <a href="membership.html" class="her-btn">Buy Now &#8594;</a>

                </div>
            </div>
        </div>
    </div>

    <!-- testinomial -->

    <div class="testinomial">
        <div class="small-container">
            <h3 class="title">PEPOLE SAY ABOUT US</h3>
            <div class="row1">

                <div class="col-3">

                    <i class="fa fa-quote-left"></i>

                    <p style="color: black;">Read to your heart's content with our book rental service. Imagine having
                        the latest titles and the best classics delivered right to your door. No more trips to the
                        library only to find out the items you want are already checked out. No more costly trips to the
                        local bookstore.
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <img src="t1.jpg">
                    <h3>Holy</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>

                    <p style="color: black;">Large selection of paperback, children's, & audio books. Convenience of
                        home delivery with FREE shipping. Numerous book rental plans to fit your needs. No due dates or
                        late fees when renting books. Superior customer service. No commitments, cancel anytime.
                        Environmentally friendly.
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <img src="t2.jpg">
                    <h3>Holy</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>

                    <p style="color: black;">"I love your book club. It saves me so much money on all the books that I
                        was saving to buy all the time. Everyone is upset because I don't buy books and pass them on
                        anymore. I just smile and say join BookLender." - Natalie from Georgia
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <img src="t3.jpg">
                    <h3>Holy</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->

    <div class="footer">
        <div class="container">
            <div class="row1">
                <div class="footer-col-1">
                    <h3>DOWNLOAD OUR APP</h3>

                    <div class="app-logo">
                        <img src="playstore.png" style="cursor: pointer;">
                        <img src="appstore.png" style="cursor: pointer;">
                    </div>
                </div>
                <div class="footer-col-2">
                    <a href="index.html"> <img src="logo.png" style="   width: 150px;
             border-radius: 17%;"></a>
                    <p style=" cursor: pointer; " class="e">RENT READ RETURN</p>
                </div>

                <div class="footer-col-4">
                    <h3>FOLLOW</h3>
                    <ul>
                        <a href="https://www.instagram.com/" style="text-decoration: none; color: black; ">
                            <li style="cursor: pointer;" class="a">INSTAGRAM</li>
                        </a>
                        <a href="https://www.facebook.com/" style="text-decoration: none; color: black;">
                            <li style="cursor: pointer;" class="a">FACEBOOK</li>
                        </a>
                        <a href="https://twitter.com/" style="text-decoration: none; color: black;">
                            <li style="cursor: pointer;" class="a">TWITTER</li>
                        </a>
            
                        </li>
                    </ul>
                </div>
            </div>

            <p class="copyright" style="cursor: pointer;"> Copyright
                2022 - BOOKS RETURN
            </p>
        </div>
    </div>



    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>

</body>

</html>