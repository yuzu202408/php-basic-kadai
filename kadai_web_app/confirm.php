<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_name = $_POST['employee_name'];
    $employee_age = $_POST['employee_age'];
    $department = $_POST['department'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>確認画面</title>
</head>
<body>

<h2>入力内容をご確認ください。</h2>
<p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>


<table border="1">
    <tr>
        <th>項目</th>
        <th>入力内容</th>
    </tr>
    <tr>
        <td>社員名</td>
        <td><?php echo htmlspecialchars($employee_name); ?></td>
    </tr>
    <tr>
        <td>年齢</td>
        <td><?php echo htmlspecialchars($employee_age); ?></td>
    </tr>
    <tr>
        <td>所属部署</td>
        <td><?php echo htmlspecialchars($department); ?></td>
    </tr>
</table>

<form action="complete.php" method="post">
    <input type="hidden" name="employee_name" value="<?php echo htmlspecialchars($employee_name); ?>">
    <input type="hidden" name="employee_age" value="<?php echo htmlspecialchars($employee_age); ?>">
    <input type="hidden" name="department" value="<?php echo htmlspecialchars($department); ?>">
</form>

<p>
    <button id="confirm-btm" onclick="location.href='complete.php';">確定</button>
    <button id="confirm-btm" onclick="history.back();">キャンセル</button>
</p>

</body>
</html>