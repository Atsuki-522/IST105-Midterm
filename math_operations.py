#!/usr/bin/env python3
import cgi

# フォームデータの取得
form = cgi.FieldStorage()
num1 = float(form.getvalue("num1"))
num2 = float(form.getvalue("num2"))
operation = form.getvalue("operation")

# 計算処理
result = None
error_message = None

if operation == "add":
    result = num1 + num2
elif operation == "sub":
    result = num1 - num2
elif operation == "mul":
    result = num1 * num2
elif operation == "div":
    if num2 != 0:
        result = num1 / num2
    else:
        error_message = "Error: Division by zero is not allowed."

# 条件処理
if result is not None:
    if result > 100:
        result *= 2
    elif result < 0:
        result += 50

# 結果をHTMLで表示
print("Content-type: text/html\n")
print("<html><head><title>Calculation Result</title></head><body>")
if error_message:
    print(f"<h3>{error_message}</h3>")
else:
    print(f"<h3>Calculation Result: {result}</h3>")
print("</body></html>")
