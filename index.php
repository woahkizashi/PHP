<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <style>
        .male { color: blue; }
        .female { color: pink; }
    </style>
</head>
<body>
    <form method="post">
        <!-- Gender Radio Buttons -->
        <label>Gender:</label><br>
        <input type="radio" name="gender" value="male"> Male<br>
        <input type="radio" name="gender" value="female"> Female<br><br>

        <!-- Number Input -->
        <label>Number:</label>
        <input type="number" name="number"><br><br>

        <!-- Number with Decimal Input -->
        <label>Number with Decimal:</label>
        <input type="number" step="0.01" name="decimalNumber"><br><br>

        <!-- Checkbox Input -->
        <label>Options:</label><br>
        <input type="checkbox" name="options[]" value="Option1"> Option 1<br>
        <input type="checkbox" name="options[]" value="Option2"> Option 2<br>
        <input type="checkbox" name="options[]" value="Option3"> Option 3<br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Gender Display
        if (isset($_POST['gender'])) {
            $gender = $_POST['gender'];
            if ($gender == 'male') {
                echo "<p class='male'>You selected Male</p>";
            } elseif ($gender == 'female') {
                echo "<p class='female'>You selected Female</p>";
            }
        }

        // Odd or Even Display
        if (isset($_POST['number'])) {
            $number = $_POST['number'];
            if ($number % 2 == 0) {
                echo "<p>$number is Even</p>";
            } else {
                echo "<p>$number is Odd</p>";
            }
        }

        // Number with Decimal Operations
        if (isset($_POST['decimalNumber'])) {
            $decimalNumber = $_POST['decimalNumber'];
            $age = 25; // Replace with your current age
            echo "<p>$decimalNumber + $age = " . ($decimalNumber + $age) . "</p>";
            echo "<p>$decimalNumber - $age = " . ($decimalNumber - $age) . "</p>";
            echo "<p>$decimalNumber * $age = " . ($decimalNumber * $age) . "</p>";
            echo "<p>$decimalNumber / $age = " . ($decimalNumber / $age) . "</p>";
        }

        // Checkbox Display
        if (isset($_POST['options'])) {
            $options = $_POST['options'];
            echo "<p>You selected:</p><ul>";
            foreach ($options as $option) {
                echo "<li>$option</li>";
            }
            echo "</ul>";
        }
    }
    ?>
</body>
</html>
