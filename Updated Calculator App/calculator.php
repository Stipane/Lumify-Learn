<!-- PHP code section -->
<?php
// Check for submit sent
if (isset($_POST['submit'])) {

    // Assign variables to submitted data
    $num1 = $_POST['num1'];
    $op = $_POST['op'];
    $num2 = $_POST['num2'];

    // Get the operator that was selected and perform the relevant operation
   if ($op == '+') {
    $res = $num1 + $num2; 
    } elseif ($op == '-') {
        $res = $num1 - $num2;
    } elseif ($op == '*') {
        $res = $num1 * $num2;
    } elseif ($op == '/') {
        $res = $num1 / $num2;
    }
   }
?>
<!--HTML Section-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Calculator</title>
</head>
<body>
    <h1>CAB - Calculator</h1>
    <!--Container Div-->
    <div class="container">
    <!--Form for data entry-->
    <form action="calculator.php" method="POST">
        <input type="text" name="num1" placeholder="enter 1st number"><br><br>
        <!--Dropdown for operators-->
        <select name="op" id="">
            <option name="+" value="+">+</option>
            <option name="-" value="-">-</option>
            <option name="*" value="*">*</option>
            <option name="/" value="/">/</option>
        </select><br><br>
        <input type="text" name="num2" placeholder="enter 2nd number"><br><br>
        <!--Submit button-->
        <input type="submit" name="submit" value="Calculate">
        <!--Output section-->
    <div class="result">
    <!--Output the result of the operation onto the page-->
    <?php echo "<h2>= $res</h2>"?>
    </div>
    </form>
    </div>   
</body>
</html>