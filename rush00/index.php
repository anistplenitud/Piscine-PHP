<?php
session_start();

$cart_arr = array();

$tre = $_GET['cat'];

$_SESSION['cart'] = $cart_arr;

$servername = "localhost";
$username = "root";
$password = "bitnami";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_select_db( $conn,'rush_store' );

if ($tre == "all" || !$tre)
    $sql = "SELECT * FROM product";
else
    $sql = "SELECT * FROM product WHERE Categories =".$tre;

$result = $conn->query($sql);



?>
<html>
    <head>
        
        <title>
            Home
        </title>
        <link rel="stylesheet" href="mystyles.css">
        <meta charset="UTF-8">
    </head>
    
    <body bgcolor=#DDDDDD style="font-family: Arial, Helvetica, sans-serif; font-size: 10px" align="middle">
    
    <div class="margin">
        <div class="BaseFlex">
            <div class="TEmptyFlex">
                <div class=TFlexboxcontainer>
                    <div class="TEmptyFlex" style="flex-grow: 1">
                        <ul>
                            <li><a href="">Logo</a></li>
                        </ul>
                    </div>
                    <div class="TEmptyFlex" style="align-items: flex-end">
                        <ul>
                            <li><a href="register.php">Log In / Sign Up</a></li>
                            <li><a href="checkout.php">cart</a></li>
                        </ul>
                    </div>
                 </div>
            </div>
            <BR />
            <div class="TEmptyFlex">
                <div class=TFlexboxcontainer style="height: 40px; justify-content: center;">
                    <ul style="font-size: px; ">
                        <li><a href="index.php?cat=all">All Brands</a></li>
                        <li><a href="index.php?cat=LG">LG</a></li>
                        <li><a href="index.php?cat=Iphone">Iphone</a></li>
                        <li><a href="index.php?cat=Samsung">Samsung</a></li>
                        <li><a href="index.php?cat=Sony">Sony</a></li>
                        <li><a href="index.php?cat=Huawei">Huawei</a></li>
                    </ul>
                </div>        
            </div>
            <BR />
            <div class="TEmptyFlex">
                <div class=MFlexboxcontainer style="width: 15%; background-color: #7f828b;">
                    
                </div>
                <div class=MFlexboxcontainer style="width: 65%; flex-direction: row;">
                    <!-- lkjsdf -->
                    <?php 

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc())
                        {
                        $id =  $row["ID"];
                        $name =  $row["Name"];
                        $price = $row["Price"];
                        $qtty =  $row["Quantity"];
                        $im = $row["Image"];

                         $product = "<div class=itemFlexbox>
                        <IFL>
                            <img src ='".$im."' width = '120vw' height = '120vw' >
                        </IFL>
                        <IFLP style='background-color; height: 30px;'>".$name."<br/> R".$price."
                        <br />
                        <a href='checkout.php?id=$id'>addtocart</a>
                        </IFLP>     
                    </div> ";

                     echo $product;

                        }          
                    }   
                    else {
                    echo "0 results";
                    }   
                
                    ?>

                    <!--adgdfgfd --->
                </div>
                
                <div class=MFlexboxcontainer style="width: 15%; background-color: #7f828b;">
                    
                </div>
            </div>
            <div class="TEmptyFlex">
                <div class=TFlexboxcontainer style="justify-content:center">
                        <ul>
                            <li><a href="">&larr;Previous</a></li>
                            <li><a href="">Next&rarr;</a></li>
                        </ul>
                </div>
        </div>
    </div>

    </body>
</html>
<?php
$conn->close();
?>
