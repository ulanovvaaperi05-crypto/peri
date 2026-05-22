<?php

$lang = isset($_GET['lang']) ? $_GET['lang'] : 'ru';

$texts = [

    'ru' => [
        'title' => 'Форма заполнения',
        'name' => 'Имя',
        'surname' => 'Фамилия',
        'email' => 'Почта',
        'photo' => 'Фото',
        'send' => 'Отправить',
        'success' => 'Форма успешно отправлена ✔',
        'error' => 'ОШИБКА'
    ],

    'kg' => [
        'title' => 'Анкетаны толтуруңуз',
        'name' => 'Аты',
        'surname' => 'Фамилиясы',
        'email' => 'Почта',
        'photo' => 'Сүрөт',
        'send' => 'Жөнөтүү',
        'success' => 'Форма ийгиликтүү жөнөтүлдү ✔',
        'error' => 'КАТА'
    ],

    'en' => [
        'title' => 'Fill out the form',
        'name' => 'First Name',
        'surname' => 'Last Name',
        'email' => 'Email',
        'photo' => 'Photo',
        'send' => 'Submit',
        'success' => 'Form submitted successfully ✔',
        'error' => 'ERROR'
    ]
];

$t = $texts[$lang];

$result = "";
$photoPath = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $secret = '6LerN_csAAAAAKN34LcVKCd-Z1GHN-t804eQr_Nu';
    $captcha = $_POST['g-recaptcha-response'];

    $verify = file_get_contents(
        "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha"
    );

    $response = json_decode($verify);

    if ($response->success) {

        $name = htmlspecialchars($_POST['name']);
        $surname = htmlspecialchars($_POST['surname']);
        $email = htmlspecialchars($_POST['email']);


        if ($lang == "en") {

            if (!preg_match('/^[a-zA-Z\s]+$/', $name) ||
                !preg_match('/^[a-zA-Z\s]+$/', $surname)) {

                $result = " Error: only English letters allowed";
                goto end;
            }
        }

        if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {

            if (!is_dir("uploads")) {
                mkdir("uploads", 0777, true);
            }

            $photoName = time() . "_" . basename($_FILES['photo']['name']);
            $photoPath = "uploads/" . $photoName;

            move_uploaded_file($_FILES['photo']['tmp_name'], $photoPath);
        }

        $result = $t['success'] . "<br><br>
        " . $t['name'] . ": $name<br>
        " . $t['surname'] . ": $surname<br>
        " . $t['email'] . ": $email";

        if (!empty($photoPath)) {
            $result .= "<br><br><br>
            <img src='$photoPath' width='200'>";
        }

    } else {
        $result = $t['error'];
    }
}

end:

?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
<meta charset="UTF-8">
<title><?php echo $t['title']; ?></title>

<script src="https://www.google.com/recaptcha/api.js"></script>

</head>
<body>

<?php
if (!empty($result)) {
    echo "<div style='background:#eee; padding:10px; margin-bottom:10px;'>";
    echo $result;
    echo "</div>";
}
?>

<a href="?lang=ru">Русский</a> |
<a href="?lang=kg">Кыргызча</a> |
<a href="?lang=en">English</a>

<h2><?php echo $t['title']; ?></h2>

<form method="POST" enctype="multipart/form-data">

<input type="text" name="name" placeholder="<?php echo $t['name']; ?>" required>
<br><br>

<input type="text" name="surname" placeholder="<?php echo $t['surname']; ?>" required>
<br><br>

<input type="email" name="email" placeholder="<?php echo $t['email']; ?>" required>
<br><br>

<input type="file" name="photo" accept="image/*">
<br><br>

<div class="g-recaptcha" data-sitekey="6LerN_csAAAAAOGTCEQbvUyOnFyT8o9iIz_q3IiN"></div>

<br>

<button type="submit"><?php echo $t['send']; ?></button>

</form>

</body>
</html>