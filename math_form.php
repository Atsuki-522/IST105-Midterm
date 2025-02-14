<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Application</title>
</head>
<body>
    <h2>Mathematical Operations</h2>
    <form action="process_math.php" method="post">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Number 2:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <label for="operation">Select Operation:</label>
        <select name="operation" id="operation" required>
            <option value="add">Addition (+)</option>
            <option value="sub">Subtraction (-)</option>
            <option value="mul">Multiplication (×)</option>
            <option value="div">Division (÷)</option>
        </select><br><br>

        <input type="submit" value="Calculate">
    </form>
</body>
</html>
