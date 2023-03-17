<html>

<head>
    <title>Search Customer and Test SQL injection</title>
</head>

<body>
    <h1>Test SQL injection</h1>
    <form action="select_injection.php" method="GET">
        <input type="text" placeholder="Enter Customer ID" name="CustomerID">
        <br> <br>
        <input type="submit">
    </form>
</body>

</html>

<?php
require "connect.php";

if (isset($_GET["CustomerID"])) {
    $strCustomerID = $_GET["CustomerID"];

    echo "<br>" . "strCustomerID = " . $strCustomerID;

    $sql = "SELECT * FROM customer where CustomerID = '" . $strCustomerID . "'";

    echo "<br>" . " sql = " . $sql . "<br>";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetchAll();

    print_r($result);

}
?>