<!DOCTYPE html>
<html lang="en">
    <?php include "inc/head.php"; ?>
<body>
    <?php include "inc/navigation.php";?>

    <p>Šeit būs kontakt forma ar mani.</p>
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea>
        <input type="submit" value="Submit">
    </form>
</body>
</html>