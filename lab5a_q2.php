<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <?php 
        $students = array(
            "Alice" => 18,
            "Bob" => 19,
            "Rajiv" => 22
        );
    ?>

    <h1>Student Details</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
        <?php 
            foreach ($students as $name => $age) {
                echo "<tr>";
                echo "<td>$name</td>";
                echo "<td>$age</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
