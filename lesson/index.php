<?php
// Определяем язык (по умолчанию русский)
$lang = $_GET['lang'] ?? 'ru';

// Массив переводов
$translations = [
    'ru' => [
        'title' => 'Форма обратной связи',
        'name' => 'Имя',
        'email' => 'Email',
        'message' => 'Сообщение',
        'submit' => 'Отправить',
        'success' => 'Форма успешно отправлена!'
    ],
    'en' => [
        'title' => 'Contact Form',
        'name' => 'Name',
        'email' => 'Email',
        'message' => 'Message',
        'submit' => 'Submit',
        'success' => 'Form submitted successfully!'
    ],
    'kg' => [
        'title' => 'Байланыш формасы',
        'name' => 'Атыңыз',
        'email' => 'Email',
        'message' => 'Билдирүү',
        'submit' => 'Жөнөтүү',
        'success' => 'Форма ийгиликтүү жөнөтүлдү!'
    ]
];

// Если язык не найден — ставим русский
if (!array_key_exists($lang, $translations)) {
    $lang = 'ru';
}

$t = $translations[$lang];

// Обработка формы
$success = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Тут можно добавить отправку email или сохранение в БД
    $success = true;
}
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <title><?= $t['title'] ?></title>
</head>
<body>

<!-- Переключение языков -->
<a href="?lang=ru">Русский</a> |
<a href="?lang=en">English</a> |
<a href="?lang=kg">Кыргызча</a>

<h1><?= $t['title'] ?></h1>

<?php if ($success): ?>
    <p style="color:green;"><?= $t['success'] ?></p>
<?php endif; ?>

<form method="post">
    <label><?= $t['name'] ?>:</label><br>
    <input type="text" name="name" required><br><br>

    <label><?= $t['email'] ?>:</label><br>
    <input type="email" name="email" required><br><br>

    <label><?= $t['message'] ?>:</label><br>
    <textarea name="message" required></textarea><br><br>

    <button type="submit"><?= $t['submit'] ?></button>
</form>

</body>
</html>