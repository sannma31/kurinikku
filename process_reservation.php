<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // フォームから送信されたデータを受け取ります
    $name = $_POST['name'];
    $kana = $_POST['kana'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // データベースに接続するコードを追加してください（適切なデータベース情報を入力してください）

    // ここでデータベースに予約データを保存します（適切なクエリを実行してください）

    // データベース接続を閉じるコードを追加してください

    // 予約が完了したら、別のページにリダイレクトするなどの処理を追加してください
}
?>
<?php
// Assume you have a function to retrieve reservation data from the database
function getReservationData() {
    // Your database connection and query logic here
    // Example: $result = mysqli_query($conn, "SELECT * FROM reservations");
    // Fetch the data and return it
    // Example: return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process reservation form data and save it to the database
    // ...

    // After saving the reservation, redirect to the calendar page
    header("Location: yoyaku.php");
    exit();
}
?>
