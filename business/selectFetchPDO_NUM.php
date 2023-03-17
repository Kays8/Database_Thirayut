<?php
    try{
        require "connect.php";
        //โชว์ข้อมูล customer
        $sql = "SELECT CountryCode, CountryName FROM country" ;
        $stmt = $conn->prepare($sql);
        $stmt->execute();

while ($result = $stmt->fetch(PDO::FETCH_NUM)) {
    echo '<br>' .
        ' CountryCode : ' .
        $result[0] .
        ' CountryName : ' .
        $result[1] ;
}

} catch (PDOException $e) {
echo 'ไม่สามารถประมวลผลข้อมูลได้ : ' . $e->getMessage();
}

$conn = null;

?>