<!DOCTYPE html>
<html>
<head>
    <title>Get User Input</title>
</head>
<body>


<form class="first_form"method='post'>
        <h3>Enter Your Value Here</h3>
        <input type='number' name='num1' placeholder='Enter first number' required>
        <input type='number' name='num2' placeholder='Enter second number' required>
        <button type='submit'>Submit</button>
</form>
    <form class="first_form"method='post'>
        <h3>Enter Your Value Here</h3>
        <input type='number' name='num1' placeholder='Enter first number' required>
        <input type='number' name='num2' placeholder='Enter second number' required>
        <button type='submit'>Submit</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store user inputs in variables
    $x = $_POST['num1'];
    $y = $_POST['num2'];

    if($x==$y){
        echo "<style>
        form.first_form{
            display: none
        }
      </style>";
        echo "Correct<br>";
        echo '<button><a href="https://codding.xiantxpress.com/">You want to try again?</a></button>';
        
        
    }
    else{
       
        echo "<style>
        form.first_form{
            display: none
        }
      </style>";
        echo "<h3>The Value Is Not Equal Please Try Again</h3>";
        echo "<form method='post'>
        <input type='number' name='num1' placeholder='Enter first number' required>
        <input type='number' name='num2' placeholder='Enter second number' required>
        <button type='submit'>Submit</button>
</form>";
    }

    // You can now use these variables for further processing
}
?>


</body>
</html>
