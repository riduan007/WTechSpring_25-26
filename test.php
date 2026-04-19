<?php
include "control.php";
?>
<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    <table>

        <tr>
            <td><label>Name:</label></td>
            <td>
                <input type="text" name="name">
                <?php echo $nameErr; ?>
            </td>
        </tr>

        <tr>
            <td><label>E-mail:</label></td>
            <td>
                <input type="text" name="email">
                <?php echo $emailErr; ?>
            </td>
        </tr>

        <tr>
            <td><label>Website:</label></td>
            <td>
                <input type="text" name="website">
                <?php echo $websiteErr; ?>
            </td>
        </tr>

        <tr>
            <td><label>Comment:</label></td>
            <td>
                <textarea name="comment" rows="5" cols="30"></textarea>
                <?php echo $commentErr; ?>
            </td>
        </tr>

        <tr>
            <td><label>Gender:</label></td>
            <td>
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Other"> Other
                <?php echo $genderErr; ?>
            </td>
        </tr>

        <tr>
            <td><input type="submit" name="submit" value="Submit"></td>
        </tr>

    </table>
</form>

</body>
</html>