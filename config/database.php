<?php
// config/database.php
// การตั้งค่าฐานข้อมูล projectplan ของคุณ
define('DB_HOST', 'localhost');
define('DB_NAME', 'projectplan');       // ฐานข้อมูลของคุณ
define('DB_USER', 'uproject');         // ผู้ใช้ของคุณ
define('DB_PASS', 'pwd@project');      // รหัสผ่านของคุณ
define('DB_CHARSET', 'utf8mb4');

// ฟังก์ชันเชื่อมต่อฐานข้อมูล
function getDBConnection() {
    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
        $pdo = new PDO($dsn, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } catch (PDOException $e) {
        die("การเชื่อมต่อฐานข้อมูลล้มเหลว: " . $e->getMessage());
    }
}
?>

