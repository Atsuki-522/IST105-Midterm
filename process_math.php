<?php
// フォームデータ取得
$num1 = escapeshellarg($_POST["num1"]);
$num2 = escapeshellarg($_POST["num2"]);
$operation = escapeshellarg($_POST["operation"]);

// Pythonスクリプトを実行
$command = escapeshellcmd("python3 math_operations.py $num1 $num2 $operation");
$output = shell_exec($command);

// 結果を表示
if ($output) {
    echo $output;
} else {
    echo "Error executing Python script.";
}
?>
