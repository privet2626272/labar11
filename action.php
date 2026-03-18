<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        echo '<h2>Ошибка!</h2>';
        echo '<p>Поля «Почта» и «Пароль» обязательны для заполнения.</p>';
        echo '<a href="index.html">Вернуться к форме регистрации</a>';
        exit;
    }

    echo '<h2>Регистрация успешна!</h2>';
    echo '<p>Пользователь с почтой ' . htmlspecialchars($email) . ' успешно зарегистрирован.</p>';
} else {
    echo '<h2>Ошибка!</h2>';
    echo '<p>Форма должна быть отправлена методом POST.</p>';
    echo '<a href="index.html">Вернуться к форме регистрации</a>';
}
?>

