<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
class UserRegistration {
    public $firstName;
    public $lastName;
    public $phoneNumber;
    public $address;

    public function __construct($firstName, $lastName, $phoneNumber, $address) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phoneNumber = $phoneNumber;
        $this->address = $address;
    }

    public function displayOutput() {
        echo "<div class='output'>";
        echo "<p>Hi, my name is " . $this->firstName . " " . $this->lastName . "</p>";
        echo "<p>Phone Number : " . $this->phoneNumber . "</p>";
        echo "<p>Address : " . $this->address . "</p>";
        echo "<a href='index.php'>Reset</a>";
        echo "</div>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = new UserRegistration(
        $_POST['firstname'],
        $_POST['lastname'],
        $_POST['phone'],
        $_POST['address']
    );
}
?>

<div class="card">
    <h2>Register Form</h2>
    <form method="POST" action="">
        <label>Firstname</label><br>
        <input type="text" name="firstname" required><br><br>

        <label>Lastname</label><br>
        <input type="text" name="lastname" required><br><br>

        <label>Phone Number</label><br>
        <input type="text" name="phone" required><br><br>

        <label>Address</label><br>
        <textarea name="address" required></textarea><br><br>

        <button type="submit">Submit</button>
    </form>
</div>

<?php
if (isset($user)) {
    $user->displayOutput();
}
?>

</body>
</html>