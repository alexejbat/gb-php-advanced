<?php
if ($isAuth): ?>
    Добро пожаловать <?= $userName ?> <a href="/auth/logout">[Выход]</a>
<?php else: ?>
    <form action="/auth/login" method="post">
        <input type="text" name="login" placeholder="Логин">
        <input type="text" name="pass" placeholder="Пароль">
        <input type="submit" name="submit" value="Войти">
    </form>
<?php endif; ?><br>

<a href="/">Главная</a>
<a href="/?c=product&a=catalog">Каталог</a>
<a href="/?c=basket">Корзина</a><br>