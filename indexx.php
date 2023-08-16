<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<style>
    <?php include 'style.css'?>
    
</style>

<body>

<div class="payNav">

    <div class="box">
        <span id="span1" <?php 
        if(isset($_GET["error"])){
        if($_GET["error"]== "none"){?>
        style="color:#1c69d4;border:#1c69d4 2px solid;background-color:#1c69d4"
        <?php }}?>>1</span>
        <label class="title">Personal Details</label>
    </div>

     <div class="box">
        <span id="span2" <?php 
        if(isset($_GET["error"])){
        if($_GET["error"]== "none"){?>
        style="color:#1c69d4;border:#1c69d4 2px solid;background-color:#1c69d4"
        <?php }}?>> 2 </span>
        <label class="title">Payment & Invoice</label>
    </div>

    <div class="box">
        <span id="span3" <?php 
        if(isset($_GET["error"])){
        if($_GET["error"]== "none"){?>
        style="color:#1c69d4;border:#1c69d4 2px solid;"
        <?php }}?>> 3 </span>
        <label class="title"> 3 </span>
        <label class="title">Complete</label>
    </div>
</div>

<?php
if(isset($_GET["error"])){
    if($_GET["error"]== "none"){?>
    <div class="complete">
        <div class="card">
            <span>Thanks!</span>
            <p>Purchase completed.</p>
            <br>
            <i><a href="">continue...</a></i>
        </div>
    </div>
<?php }
}
?>


<div class="container" <?php
    if(isset($_GET["error"])){
        if($_GET["error"]== "none"){?>
        style="visibility:hidden;"<?php }}?>> 

        <div class="col">
            <form action="storeData.php" method="post" class="pay">

                <div class="personalInfo">

                    <h3 class="title">Personal Details</h3>

                    
                        <div class="detailInput">
                            <input  type="text" name="name" id="name" required>
                            <label for="firstName" >First Name(s)</label>
                            <div class="error" id="nameError"></div>
                        </div>

                        <div class="detailInput">
                            <input  type="text" name="surname" id="surname" required>
                            <label for="lastName" id="surL">Last Name</label>
                            <div class="error" id="surError"></div>
                        </div>
                        
                        <div class="flex">
                            <div class="detailInput" >
                            <select name="idType" id="idtype">
                                <option  value="passport">Passport Number</option>
                                <option value="id">SA ID Number</option>
                            </select>
                            <label for="lastName">ID Type</label>
                            
                            </div>

                            <div class="detailInput">
                                <input  type="text" name="idPassport" id="idvalue" maxlength="17" required>
                                <label for="idPassport">ID/Passport Number</label>
                                <div class="error" id="idvalueError"></div>
                            </div>
                        </div>

                        <div class="detailInput">
                            <input  type="tel" name="cell" id="cell" data-mask="0000000000" required>
                            <label for="cell" >Mobile Number</label>
                            <div class="error" id="cellError"></div>
                        </div>

                   <div class="flex">
                   <div class="detailInput">
                        <input  type="text" name="address2" data-mask="0000" required id="housenum">
                        <label for="address">House/Apartment Number</label>
                        <div class="error" id="housenumError"></div>
                    </div>

                    <div class="detailInput">
                        <input  type="text" name="address1" id="address" required>
                        <label for="address">Residential Address</label>
                        <div class="error" id="addressError"></div>
                    </div>
                   </div>

                    

                    <div class="detailInput">
                        <input type="text" name="suburb" id="suburb"  required>
                        <label for="suburb">Suburb</label>
                        <div class="error" id="suburbError"></div>
                    </div>

                    <div class="flex">
                        <div class="detailInput">
                            <input type="text" name="code" id="code"  data-mask="0000" required>
                            <label for="code">Postal Code</label>
                            <div class="error" id="codeError"></div>
                        </div>

                        <div class="detailInput">
                            <input type="text" name="city" id="city" required>
                            <label for="city">City/Town</label>
                            <div class="error" id="cityError"></div>
                        </div>
                    </div>

                </div> 
                    

                <div class="payment">

                    <h3 class="title">Payment & Invoice</h3>

                    <div class="detailInput">
                        <!--<i class="fa fa-user" aria-hidden="true"></i>-->
                        <input type="text" name="cardName" id="cardName" required >
                        <label>Name on card </label>
                        <div class="error" id="cardnameError"></div>
                    </div>

                    <div class="detailInput">
                        <!--<i class="fa fa-credit-card-alt" aria-hidden="true"></i>-->
                        <input type="text" name="cardNumber" id="cardNum" data-mask="0000 0000 0000 0000" required>
                        <label>Card number</label>
                        <div class="error" id="cardnumError"></div>
                    </div>

                    <div class="flex">
                        <div class="detailInput">
                            <!--<i class="fa fa-calendar" aria-hidden="true"></i>-->
                            <input type="text" name="expDate" id="exp" data-mask="00 / 00" required>
                            <label>Expiry Date </label>
                            <div class="error" id="expError" ></div>
                        </div>

                        <div class="detailInput">
                            <!--<i class="fa fa-lock" aria-hidden="true"></i>-->
                            <input type="text" name="ccv" id="cvv" data-mask="000" required>
                            <label>CVV</label>
                            <div class="error" id="cvvError"></div>
                        </div>

                    </div>

                        <button class="checkout" name="submit" value="<?php echo $_SESSION['price']?>.00">Continue to Checkout</button>
                </div> 
                
            </form>

            <button class="cont">Continue...</button> 

            <button  class="prev">Previous</button>     

        </div>
    
       



    <div class="carDetails">
        <img class="carImg" src="<?php echo $_SESSION['picture'] ?>">

        <div class="carInfo">
            <div class="specs">
                <label >MODEL</label>
                <p class="model"><?php echo $_SESSION['name']; ?></p>

            </div>

            <div class="specs total">
                <label>TOTAL </label>
                <p class="total">R<?php echo $_SESSION['price']?>.00</p>

            </div>

        </div>
        
    </div>

</div> 

<div class="footer">content</div>

<script src="index.js"></script>
<script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
 
</body>
</html>