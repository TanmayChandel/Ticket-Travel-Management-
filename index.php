<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./components/_head.php" ?>
    <title>Triptrip</title>
</head>

<body>
    <div class="header">
        <nav id="navBar">
            <a href="./index.php" class="logo"> triptrip </a>
            <ul class="nav-links">
                <li><a href="./index.php" class="active">Popular Places</a></li>
                <li><a href="./listing.php">All packages</a></li>
            </ul>
            <?php include("./components/_navBtns.php") ?>
        </nav>
        <div class="container hero">
            <h1>Travel India Like Never Before</h1>
            <div class="search-bar">
                <form method="post" id="search_form">
                    <div class="location-input">
                        <label>Location</label>
                        <input required type="text" id="location" placeholder="Where are you going?">
                    </div>
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
    </div>


    <!-- ---------exclusives------------ -->
    <div class="container">
        <h2 class="sub-title">Exclusive Packages</h2>
        <div class="exclusives">
            <div>
                <img src="https://travelmynation.in/wp-content/uploads/2020/08/Travelleisure.jpg">
                <span>
                    <h3>Dibang Valley</h3>
                    <p>Starts @ RS.4000 </p>
                </span>
            </div>
            <div>
               
                </span>
            </div>
            <div>
                <img src="https://th.bing.com/th/id/R.25148796f3a95244b27a261256084c4b?rik=KmmFNVd97%2bjhog&pid=ImgRaw&r=0">
                <span>
                    <h3>Kochi</h3>
                    <p>Starts @ RS.3500 </p>
                </span>
            </div>
            <div>
                <img src="https://voiceofadventure.com/wp-content/uploads/2022/06/60d0813807aff-Baga_Beach_In_Goa.jpg">
                <span>
                    <h3>Goa</h3>
                    <p>Starts @ RS.5000 </p>
                </span>
            </div>
        </div>

        <!-- -------------------Trending Places------------- -->

        <h2 class="sub-title">Trending Places</h2>
        <div class="tranding">
            <div>
                <img src="https://i.pinimg.com/originals/33/b1/3f/33b13f314368d12108c44b49b4df7ab7.png">
                <h3>Valley of Flowers</h3>
            </div>
            <div>
                <img src="https://th.bing.com/th/id/OIP.pmLRmfoPqY9l7tWUasGoAgHaES?pid=ImgDet&rs=1">
                <h3>Araku Valley</h3>
            </div>
            <div>
                <img src="https://i.ytimg.com/vi/eFrr7jWJ9q8/maxresdefault.jpg">
                <h3>Baga Beach</h3>
            </div>
            <div>
                <img src="https://th.bing.com/th/id/OIP.F13moM_Fj9DVoRNKvtK6FwHaEK?pid=ImgDet&rs=1">
                <h3>Palolem Beach</h3>
            </div>
        </div>


        <!-- ---------------call to action----------- -->
        <div class="cta">
            <h3>Awesome Packages <br> For you and your friends/family.</h3>
            <p>Great combo with unbeatable prices <br> transport, accomodation & food all inclusive.</p>
            <a href="#" class="cta-btn">Book your first tour now!</a>
        </div>

        <!-- ==============Travellers Stories============== -->

        <h2 class="sub-title">Travellers Stories</h2>
        <div class="stories">
            <div class="travellers-card">
                <img src="https://d27k8xmh3cuzik.cloudfront.net/wp-content/uploads/2018/02/assam-tourist-places.jpg">
                <p><a href="https://assamtourism.gov.in/">Best ways to explore TheIndia</a>
                </p>
            </div>
            <div class="travellers-card">
                <img src="https://topranked.in/wp-content/uploads/2020/05/Kufri-2048x1536.jpg">
                <p><a href="https://himachaltourism.gov.in/destination/shimla/">Shimla</a></p>
            </div>
            <div class="travellers-card">
                <img src="https://media.cntraveller.in/wp-content/uploads/2018/12/GettyImages-539105384-1366x768.jpg">
                <p><a href="https://uttarakhandtourism.gov.in/destination/kedarnath">kedarnath Temple </a></p>
            </div>
        </div>
        <a href="https://www.indiatravelblog.com/" class="Start-btn">Go to travel blog</a>
    </div>
    <!-- ===============footer================ -->
    <?php include "./components/_footer.php" ?>
    <?php include "./components/_js.php" ?>
    <script>
        $("#search_form").submit(e => {
            e.preventDefault();
            var loc = $("#location").val();
            var guest = $("#guest").val();
            window.location = `http://localhost/triptrip/listing.php?loc=${loc}&g=${guest}`;
        })
    </script>
</body>

</html>