<?php
/* ---------- GLOBAL VARIABLES (Database credentials) ---------- */
$host = "localhost";
$user = "root";
$pass = "jagath@8688";
$dbname = "userdb";

/* ---------- DATABASE CONNECTION ---------- */
$conn = mysqli_connect($host, $user, $pass, $dbname);

/* ---------- Check connection ---------- */
if (!$conn) {
    die("Database connection failed");
}

/* ---------- BOOLEAN FLAG ---------- */
$isInserted = false;

/* ---------- STATIC VARIABLE FUNCTION ---------- */
function countRegistrations() {
    static $count = 0;   // static variable
    $count++;
    return $count;
}

/* ---------- Check POST request ---------- */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /* ---------- LOCAL VARIABLES ---------- */
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    /* ---------- SQL QUERY ---------- */
    $sql = "INSERT INTO userdetails (username, email, password)
            VALUES ('$username', '$email', '$password')";

    /* ---------- EXECUTION ---------- */
    if (mysqli_query($conn, $sql)) {
        $isInserted = true;
        echo "Registration successful<br>";
        echo "Registrations in this request: " . countRegistrations();
    } else {
        $isInserted = false;
        echo "Registration failed: " . mysqli_error($conn);
    }
}

/* ---------- Close connection ---------- */
mysqli_close($conn);
?>
