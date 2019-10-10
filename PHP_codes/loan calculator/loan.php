<!DOCTYPE html>
<html>
<head>
    <title>Loan Calculator</title>
    
</head>
<body>
    <h1>Home Loan Calculator</h1>
<form method="POST">
    Loan Amount :&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="Amount"><br><br>
    Interest Rate : &nbsp;&nbsp;&nbsp;&nbsp; <input type="number" name="Interest"><br><br>
    Loan Term :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="number" name="term" placeholder="In Year"><br><br>
    <input type="Submit" name="Submit"><br><br>
</form>
</body>
</html>
<?php

if (isset($_POST['Submit'])) {
    $amt=$_POST['Amount'];
    $rate=$_POST["Interest"];
    $time=$_POST["term"];
    $SI=0;
    $rat=($rate/12)/100;
    $timee=$time*12;
    echo "Princial Amount =RS $amt <br><br>";
    echo "Interest Rate = $rate% <br><br>";
    echo "Term = $time Years<br><br>";

    $SI= ($amt * $rate * $time)/100;
    echo "Interest to be payed is RS $SI";
    $EMI=0;
     $EMI=$amt*$rat*((1+$rat)**$timee)/((1+$rat)**$timee - 1);
   
    $total=$EMI * $timee;
    echo "<br><br>You have EMI  RS $EMI <br><br> The total amount payable will be RS $total. ";
}
?>
