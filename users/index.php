<?php
 require_once 'db.php';
 require_once 'bal.php';
?>
<!----<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="cryptomax.css">
<style>
    .cg-no-underline {
    text-decoration: none;
    display: none !important;
}
.cg-primary-color-dark {
    color: #4b8800 !important;
    display: none !important;
}
    </style>

        
    <title>Home</title>
</head>
<body>
<!-------nav-----!!!!!!!!TO BE CLOSED

<nav style="background-color:#061a39;">
        <div class="nav-bar" style="background-color:#061a39;">
            <!---<i class='bx bx-menu sidebarOpen' >----!!!!!TO BE CLOSED
            <i class="fa-solid fa-bars sidebarOpen"></i>
            <!----</i>---!!!!! TO BE CLOSED
            <span class="logo navLogo"><img src="infiiteone.jpeg" class="mt-1"  width="80" height="40" alt="..." style="border-radius: 10px;"></span>

            <div class="menu">
                <div class="logo-toggle">
                <span class="logo"><a href="#">Infinite<span style="color:darkcyan;">elite</span></a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="profile.php">profile</a></li>
                    <li><a href="account manager.php">management</a></li>
                    <li><a href="transactions.php">transactions</a></li>
                    <li><a href="Addfunds.php">Add funds</a></li>
                    <li><a href="contactus.php">Contact us</a></li>
                    <li><a href="logout.php">log out</a></li>
                </ul>
            </div>

            <div class="darkLight-searchBox">
                <div class="dark-light">
                    <i class='bx bx-moon moon'></i>
                    <i class="fa-solid fa-moon" style="color:white;"></i>
                    <i class='bx bx-sun sun'></i>
                </div>

                <div class="searchBox">
                   <div class="searchToggle">
                    <i class='bx bx-x cancel'></i>
                    
                   </div>

                   
                </div>
            </div>
        </div>
    </nav>--->


<!----altanive nav check----->


<?php include_once "nav2pen.php";?>

<!----alternative nac check end------>








<!----------NAV end------->
<!--space----
<div class="container">
<div class="card">
    <h1 color="white;">welcome</h1>
</div>
</div>


<!----space end----->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----<link rel="stylesheet" href="../bootstrap.css">--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
   <!-- <link rel="stylesheet" href="cryptomax.css">-->

<div class="container-fluid">
    <div class="col-sm-12">
    <div class="card mt-50" style='border:0px none !important'>
   
    <div class="row">

    <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="card" style="border: 0px !important;">
            <div class="card-body">
                <div class="user">
                 <div class="" style="display:flex;">
                 <i class="fa-solid fa-user-large"></i>
                 <p style="padding:0px 5px;"><?php echo $row['fname'];?></p> <p class="" style="margin-left:5px;"><?php echo $row['lname'];?></p>
                </div>

                <!-------start------->

<?php
$dated = $row['valued'];
$datei = $row['valuei'];
     

      // $initial_value = $row['ballance']; //Get from ur source
      // $start_date = date_create_from_format("d/m/Y",$dated); // Get from ur source like ur DM or smth
      
     //  $current_date = date_create();
       //$difference = date_diff($start_date, $current_date);
   
      // $incrementor = $datei; //add by this variable every day so very day that passes the initial value will add by 1.5
      // $final_value = ($incrementor * $difference->days) + $initial_value;

       //  $final_value;




?>



                <!---------end --------->
            <h5 style="font-family:  Montserrat; font-weight:bold;">portfolio balance</h5>  
                 
                    <p>$<?php echo $final_value;?></p>
                
            </div>
        </div>
        </div>
    </div>

    </div>
</div>
</div>
<!-----account summary---->



<div class="container">
<h3 style="color:purple">Acount summmary</h3>
<div class="row">    
<div class="col-sm-12 col-md-4 col-lg-4 mb-2">
<div class="card">
            <div class="card-body">
                <div class="rt" style="display:flex;justify-content:space-between;">
                    <div class="one">
            <h5 style="font-family:  Montserrat;">account ballance</h5>    
            
            <p>$<?php echo $final_value;?></p>
            
            </div>
            <div class="two">
            <i class="fa-solid fa-sack-dollar fa-2x" style="color:purple;"></i>
            </div>    
        </div>
            </div>
        </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 mb-2">
        <div class="card">
            <div class="card-body">
                <div class="rt" style="display:flex;justify-content:space-between;">
                    <div class="one">
            <h5 style="font-family:  Montserrat;">total profits</h5>    
            <p><?php echo $row['profit'];?></p>


            </div>
            <div class="two">
            <i class="fa-solid fa-coins fa-2x" style="color:purple;"></i>
            </div>    
        </div>
            </div>
        </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 mb-2">
        <div class="card">
            <div class="card-body">
                <div class="rt" style="display:flex;justify-content:space-between;">
                    <div class="one">
            <h5 style="font-family:  Montserrat;">Bonus</h5>    
            <p><?php echo $row['bonus'];?></p>
            
            </div>
            <div class="two">
            <i class="fa-solid fa-gift fa-2x" style="color:purple;"></i>
            </div>    
        </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!------>
<!-------live ammount after portfolio------>
<div class="container-fluid">
<coingecko-coin-compare-chart-widget  coin-ids="bitcoin" currency="usd" locale="en"></coingecko-coin-compare-chart-widget>
</div>

<!---------end of live prize after portfolio--------->
<!-----account summary---


<div class="container">
<h3 style="color:purple">account summmary</h3>
<div class="row">    
<div class="col-sm-12 col-md-4 col-lg-4 mb-2">
<div class="card">
            <div class="card-body">
                <div class="rt" style="display:flex;justify-content:space-between;">
                    <div class="one">
            <h5 style="font-family:  Montserrat;">account ballance</h5>    
            <p>php</p>
            </div>
            <div class="two">
            <i class="fa-solid fa-sack-dollar fa-2x" style="color:purple;"></i>
            </div>    
        </div>
            </div>
        </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 mb-2">
        <div class="card">
            <div class="card-body">
                <div class="rt" style="display:flex;justify-content:space-between;">
                    <div class="one">
            <h5 style="font-family:  Montserrat;">total profits</h5>    
            <p>php</p>
            </div>
            <div class="two">
            <i class="fa-solid fa-coins fa-2x" style="color:purple;"></i>
            </div>    
        </div>
            </div>
        </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 mb-2">
        <div class="card">
            <div class="card-body">
                <div class="rt" style="display:flex;justify-content:space-between;">
                    <div class="one">
            <h5 style="font-family:  Montserrat;">bonus</h5>    
            <p>php</p>
            </div>
            <div class="two">
            <i class="fa-solid fa-gift fa-2x" style="color:purple;"></i>
            </div>    
        </div>
            </div>
        </div>
        </div>
    </div>
</div>
---->
<div class="container-flud mt-4">
    <div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3">
        <div class="card">
            <div class="card-body">
            <div class="card-title"><h5 style="color:purple">Active plan</h5></div>
            <h5><?php echo $row['plan'];?></h5>
                <br>
                <button class="btn btn-primary" name="" onclick="admin()"><a href="Addfunds.php" style="text-decoration:none;color:white;">buy a plan</a></button>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="card-title" style="font-weight: bold;">watch list</div>
        <!-----    <div id="crypto-widget-CoinList" data-design="modern" data-coin-ids="1,166,136,1120,1694,20,29,440"></div>
            --->
            <script src="https://widgets.coingecko.com/coingecko-coin-market-ticker-list-widget.js"></script>
<coingecko-coin-market-ticker-list-widget  coin-id="bitcoin" currency="usd" locale="en"></coingecko-coin-market-ticker-list-widget>
        
        </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-5">
        <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/key-events/" rel="noopener" target="_blank"><span class="blue-text">Daily news roundup</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
  {
  "feedMode": "all_symbols",
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "regular",
  "width": 400,
  "height": 800,
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
    </div>
    </div>
</div>
<div class="container-fluid">
<iframe src="https://bit2me.com/widget/chart/v1?currency=BTC&fiat=EUR" style="display:block;width:100%;height:400px;margin:0 auto;" frameborder="0"></iframe>
</div>



    
    <script src="https://crypto.com/price/static/widget/index.js"></script>
    <script src="https://widgets.coingecko.com/coingecko-coin-compare-chart-widget.js"></script>
<!----nav js--->
<script src="cryptomax.js"></script>
<!---end of nav js---->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function admin(){
        swal("TO buy or upgrade a plan ", "...contact an admininstrative");
    }
</script>
</body>
</html>