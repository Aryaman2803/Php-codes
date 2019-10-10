<!DOCTYPE html>
<html>
<head>
    <title>Loan Calculator</title>
    
</head>
<body style="text-align: center;">
    <h1 >Car Loan EMI Calculator</h1>
<form method="POST">
    Down Payment &nbsp;&nbsp;<input type="number" name="down"><br><br>
    Loan Amount :&nbsp; &nbsp;&nbsp;&nbsp;<input type="number" name="Amount"><br><br>
    Interest Rate : &nbsp;&nbsp;&nbsp;&nbsp; <input type="number" name="Interest"><br><br>
    Loan Term :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="number" name="term" placeholder="Year"><br><br>
    <input type="Submit" name="Submit" style="background-color: gray; border-style: none;color: white;padding: 11px 32px;"><br><br>
</form>
</body>
</html>
<?php

if (isset($_POST['Submit'])) {
    $amt=$_POST['Amount'];
    $rate=$_POST["Interest"];
    $time=$_POST["term"];
    $down=$_POST["down"];
    $SI=0;
    $rat=($rate/12)/100;
    $timee=$time*12;
    echo "Price of the car =$amt Rs <br><br>";
    echo "Interest Rate = $rate% <br><br>";
    echo "Time  = $time Years<br><br>";

    $SI= ($amt * $rate * $time)/100;
    echo "Interest for the given amount is  $SI Rs";
    $EMI=0;
     $EMI=$amt*$rat*((1+$rat)**$timee)/((1+$rat)**$timee - 1);
   
    $total=($EMI * $timee)+$down;
    echo "<br><br>You have Monthly EMI   $EMI Rs <br><br> Total amount payable will be $total Rs. ";
}
?>
