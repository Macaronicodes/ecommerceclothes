
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> home page for ecommerce website</title>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    

<header>

    <a href="#" class="logo"><span></span>Aaliyah</a>

    
    <label for="menu-bar" class="fas fa-bars"></label>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#features">features</a>
        <a href="#about">about</a>
        <a href="#review">review</a>
        <a href="#pricing">pricing</a>
        <a href="#contact">contact</a>
    </nav>

</header>

<section class="home" id="home">

    <div class="content">
        <h3>modest hijabis<span> showcase</span></h3>
        <p>Discover the latest hijab fashion and modest women dresses online with great prices and a return guarantee</p>
        <a href="#" class="btn">check now</a>
    </div>

    <div class="image">
        <img src="images/wallpeper2.jpg" alt="">
    </div>

</section>

<section class="features" id="features">

    <h1 class="heading"> features </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/f-icon1.png" alt="">
            <h3>amazing design</h3>
            <p> We combine elegant, clean design with a brilliant pallet of colors and fabrics </p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/f-icon2.png" alt="">
            <h3>soft and smooth touch</h3>
            <p>where modesty meets elegance,stylish and high quality fabrics that are soft on skin and feel</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            
            <h3>freindly interactions</h3>
            <p>prioritizing our customers and being there for their needs is our first call</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<section class="about" id="about">

    <h1 class="heading"> about us </h1>

    <div class="column">
       
        <div class="image">
            <img src="images/wall.jpg" alt="">   
        </div>

        <div class="content">
            <h3>Easy And Perfect Solution For Your modest wear needs </h3>
            <p> we strive to make our muslim customers confident and proud in their own skin without necessarily contradicting their own cultures and beliefs.</p>
            <p>It all started with a dream, a vision, a purpose: to meet modest womens desire to wear the clothes that fit the life and times they live in</p>
            <div class="buttons">
                <a href="#" class="btn"> <i class="fab fa-apple"></i> history </a>
                <a href="#" class="btn"> <i class="fab fa-google-play"></i>  logistics  </a>
            </div>
        </div>

    </div>

</section>

<div class="newsletter">

    <h3>follow and subscribe For New arrivals update</h3>
 
    <form action="">
        <input type="email" placeholder="enter your email">
        <input type="submit" value="Subscribe">
    </form>

</div>

<section class="review" id="review">

    <h1 class="heading"> people's review </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="images/3.jpg" alt="">
                <h3>ameerah</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="comment">
                  nice fabric accurate sizing keep up
                </div>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="images/4.jpg" alt="">
                <h3>najma </h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="comment">
                    nice customer service. quick delivery. wishing yall success
                </div>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="images/1.jpg" alt="">
                <h3>istahil</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="comment">
                    loved everything.rating them 10/10
                </div>
            </div>
        </div>

    </div>

</section>

<section class="pricing" id="pricing">

    <h1 class="heading"> VARIETY  </h1>
<?php
$cols =3;
while($cols!=0){?>
    <div class='box-container'>;
    <? $prodtitle="title";?>

        <div class='box'>;
            <h3 class=title> Gymlooks </h3>
            
    <img src="images/gym wear.jpg"alt="">
            <a href="#" class="btn">check out</a>
        </div>
        $cols--;

}
        <div class="box">
            <h3 class="title"> vacation essentials </h3>
            <img src="images/vacation wear.jpg"alt=" ">
            
            <a href="#" class="btn">check out</a>
        </div>

        <div class="box">
            <h3 class="title"> Corporate Wear </h3>
            <img src="images/corporate wear.jpg"alt=" ">
            <a href="#" class="btn">check out</a>
        </div>

    </div>

</section>

<section class="contact" id="contact">
 
    <div class="image">
        <img src="images/wallpaper 1.jpg"alt=" ">

    </div>
    
    <form action="">
        
        <h1 class="heading">contact us</h1>

        <div class="inputBox">
            <input type="text" required>
            <label>name</label>
        </div>

        <div class="inputBox">
            <input type="email" required>
            <label>email</label>
        </div>

        <div class="inputBox">
            <input type="number" required>
            <label>phone</label>
        </div>

        <div class="inputBox">
            <textarea required name="" id="" cols="30" rows="10"></textarea>
            <label>message</label>
        </div>

        <input type="submit" class="btn" value="send message">
        
    </form>
a
</section>


<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>leave us a review we improve our service to you darling.</p>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">features</a>
            <a href="#">about</a>
            <a href="#">review</a>
            <a href="#">pricing</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">pinterest</a>
            <a href="#">twitter</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <div class="info">
                <i class="fas fa-phone"></i>
                <p> +123-456-7890 <br> +254-726-087-807 </p>
            </div>
            <div class="info">
                <i class="fas fa-envelope"></i>
                <p> aaliyah.business@gmail.com <br> hassan.masoud@strathmore.edu </p>
            </div>
            <div class="info">
                <i class="fas fa-map-marker-alt"></i>
                <p> nairobi, kenya - 02000 </p>
            </div>
        </div>

    </div>

    <h1 class="credit"> &copy; copyright @ 2022 by MACARONI </h1>

</div>


</body>
</html>