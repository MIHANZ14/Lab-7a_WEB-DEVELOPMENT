<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 7a Q1</title>
    </head>
    <body>
        <?php
        $name = "Muhamad Aiman Bin Othman";
        $matric = "CI250057";
        $course = "Bachelor of Software Engineering";
        $year = "Year 2";
        $address = "Parit Raja, Batu Pahat, Johor";
        ?>
        <table border="1">
            <tr>
                <td>Name </td>
                <td><?php echo "$name"; ?></td>
            </tr>
            <tr>
                <td>Matric</td>
                <td><?php echo "$matric"; ?></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><?php echo "$course"; ?></td>
            </tr>
            <tr>
                <td>Year</td>
                <td><?php echo "$year"; ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo "$address"; ?></td>
            </tr>
        </table>

    </body>
</html>
