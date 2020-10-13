<!DOCTYPE HTML>
<HTML><head><title>salary </title>
<style>
body{
  background-color:gray;
}

input[type=number] {
  border: 2px solid red;
  border-radius: 4px;
}
input[type=submit]{
  background-color:red;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<body>
<div id="containe">
<form action="salary.php" method="post">
   <label for="salary"> Salary in USD :</label><br>
  <input type="number" id="sal" name="salary" required><br>

  <label for="lname">Tax Free Allowance in USD :</label><br>
  <input type="number" id="tax" name="tax" required><br>

  <input type="radio" id="to" name="siz" value="tom" required >
  <label for="yearly">Yearly </label><br>
  <input type="radio" id="toa" name="siz" value="tom"  checked required >
  <label for= "monthly">monthly</label><br>
  <input type="submit" value="Submit"></div>


  <?php
$salary = $_POST["salary"];
$free = $_POST["tax"];
if($_POST["type"]=="monthly"){
    $salary *=12;
}
if($salary < 10000 && isset($_POST["salary"])){
    $salaryfree = $salary + $free;
    $salaryfreemonth = $salaryfree/12;

    echo "<div class='yearly'>";
    echo "Yearly<br>";
    echo "Salary: $salaryfree$<br>";
    echo "Tax: 0$<br>";
    echo "Social security fee: 0$<br>";
    echo "Salary after tax: $salaryfree$<br>";
    echo "</div>";


    echo "<div class='monthly'>";
    echo "Yearly<br>";
    echo "Salary: $salaryfreemonth$<br>";
    echo "Tax: 0$<br>";
    echo "Social security fee: 0$<br>";
    echo "Salary after tax: $salaryfreemonth$<br>";
    echo "</div>";
    
}
else if($salary >= 10000 && $salary < 25000 && isset($_POST["salary"])){
    $salaryfree = $salary + $free;
    $tax = $salary *0.11;
    $social = $salary *0.04;
    $total = $salaryfree -($tax+$social);



    $salaryfreemonth =round($salaryfree*100/12)/100;
    
    $taxmonth = round(($salary *11)/12)/100;
    $socialmonth = round(($salary *4)/12)/100;
    $totalmonth = round(($salarywithfree -($tax+$social))/0.12)/100;




    echo "<div class='yearly'>";
    echo "Yearly<br>";
    echo "Salary: $salaryfree$<br>";
    echo "Tax: $tax$<br>";
    echo "Social security fee: $social$<br>";
    echo "Salary after tax: $total$<br>";
    echo "</div>";


    echo "<div class='monthly'>";
    echo "Monthly<br>";
    echo "Salary: $salaryfreemonth$<br>";
    echo "Tax: $taxmonth$<br>";
    echo "Social security fee: $socialmonth$<br>";
    echo "Salary after tax: $totalmonth$<br>";
    echo "</div>";


}
else if($salary >= 25000 && $salary < 50000 && isset($_POST["salary"])){
    $salaryfree = $salary + $free;
    $tax = $salary *0.30;
    $social = $salary *0.04;
    $total = $salaryfree -($tax+$social);


    
    $salarywfreemonth =round($salaryfree*100/12)/100;
    
    $taxmonth = round(($salary *11)/12)/100;
    $socialmonth = round(($salary *4)/12)/100;
    $totalmonth = round(($salaryfree -($tax+$social))/0.12)/100;



    echo "<div class='yearly'>";
    echo "Yearly<br>";
    echo "Salary: $salaryfree$<br>";
    echo "Tax: $tax$<br>";
    echo "Social security fee: $social$<br>";
    echo "Salary after tax: $total$<br>";
    echo "</div>";


    echo "<div class='monthly'>";
    echo "Monthly<br>";
    echo "Salary: $salaryfreemonth$<br>";
    echo "Tax: $taxmonth$<br>";
    echo "Social security fee: $socialmonth$<br>";
    echo "Salary after tax: $totalmonth$<br>";
    echo "</div>";


}
else if($salary>=50000&& isset($_POST["salary"])){
    $salaryfree = $salary + $free;
    $tax = $salary *0.45;
    $social = $salary *0.04;
    $total = $salaryfree -($tax+$social);


    
    $salaryfreemonth =round($salaryfree*100/12)/100;
    
    $taxmonth = round(($salary *11)/12)/100;
    $socialmonth = round(($salary *4)/12)/100;
    $totalmonth = round(($salaryfree -($tax+$social))/0.12)/100;



    echo "<div class='yearly'>";
    echo "Yearly<br>";
    echo "Salary: $salaryfree$<br>";
    echo "Tax: $tax$<br>";
    echo "Social security fee: $social$<br>";
    echo "Salary after tax: $total$<br>";
    echo "</div>";


    echo "<div class='monthly'>";
    echo "Monthly<br>";
    echo "Salary: $salaryfreemonth$<br>";
    echo "Tax: $taxmonth$<br>";
    echo "Social security fee: $socialmonth$<br>";
    echo "Salary after tax: $totalmonth$<br>";
    echo "</div>";


}
?>
</body>
  </from>
