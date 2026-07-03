<!DOCTYPE html>
<html>
<head>
    <title>array_count_values() Example</title>
</head>
<body>

    <h2>Count Frequency of Array Values</h2>

    <form method="post">
        Enter array values (comma separated):<br><br>
        <input type="text" name="values" placeholder="e.g. Apple,Banana,Apple,Mango" size="50">
        <br><br>
        <input type="submit" name="submit" value="Count Values">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $input = $_POST['values'];

        // Convert input string into array
        $arr = explode(",", $input);

        // Count frequency of values
        $result = array_count_values($arr);

        echo "<h3>Original Array:</h3>";
        echo "<pre>";
        print_r($arr);
        echo "</pre>";

        echo "<h3>Count of Each Value:</h3>";
        echo "<pre>";
        print_r($result);
        echo "</pre>";
    }
    ?>

</body>
</html>