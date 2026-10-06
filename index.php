
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل طالب</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
    
<main>
    <h1>تسجيل طالب</h1>
    <form method="POST" action="#">
        <label for="student-name">الاسم الكامل</label>
        <input id="student-name" type="text" name="name" placeholder="أدخل الاسم الكامل" required>
        <label for="student-email">البريد الإلكتروني</label>
        <input id="student-email" type="email" name="email" placeholder="name@example.com" dir="ltr" required>
        <label for="roll-number">الرقم الجامعي</label>
        <input id="roll-number" type="text" name="roll_number" placeholder="أدخل الرقم الجامعي" required>
        <label for="department">القسم</label>
        <select id="department" name="department" required>
            <option value="" disabled selected>اختر القسم</option>
            <option value="Computer Science">علوم الحاسب</option>
            <option value="Information Technology">تقنية المعلومات</option>
            <option value="Software Engineering">هندسة البرمجيات</option>
            <option value="Electrical Engineering">الهندسة الكهربائية</option>
        </select>
            <button type="submit">تسجيل الطالب</button>
        <p><a href="view_students.php">عرض الطلاب المسجلين</a></p>
    </form>
</main>
</body>
</html>




