<?php
include('db_connect.php'); // Veritabanı bağlantısını dahil ediyoruz

// Kullanıcı Adı, Parola, Telefon no ve Email sütunlarını çekiyoruz
$sql = "SELECT username, password, phone, email FROM users"; // 'users' tablosundan belirtilen sütunları çekiyoruz
$result = $conn->query($sql); // SQL sorgusunu çalıştırıyoruz

if ($result->num_rows > 0) { // Eğer veriler varsa
    // Sonuçları döngüyle yazdırıyoruz
    while($row = $result->fetch_assoc()) {
        echo "Kullanıcı Adı: " . $row["username"] . " - Parola: " . $row["password"] . " - Telefon: " . $row["phone"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 sonuç"; // Eğer hiç veri yoksa bu mesaj gösterilir
}

$conn->close(); // Bağlantıyı kapatıyoruz
?>

