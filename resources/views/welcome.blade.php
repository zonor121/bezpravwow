<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>НАРУШЕНИЙ.НЕТ - Авторизация</title>
    @Vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="container">
    <div class="logo">
        <span class="logo-blue">НАРУШЕНИЙ</span><span class="logo-red">.НЕТ</span>
    </div>
    
    <h2>Авторизация</h2>
    
    <form action="#" method="post" style="margin-left: 50px">
        <input type="text" name="login" placeholder="логин" required>
        <input type="password" name="password" placeholder="пароль" required>
        <button type="submit">ВОЙТИ</button>
    </form>
    
    <div class="register-link">
        <a href="#">Зарегистрироваться</a>
    </div>
</div>

</body>
</html>