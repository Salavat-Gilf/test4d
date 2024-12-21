<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('regis')}}" method="POST">
        @csrf
        <label for="name">Введите Имя</label>
        <input type="text" name="name" id="name"><br>

        <label for="email">Введите вашу почту</label>
        <input type="email" name="email" id="email"><br>

        <label for="password">Пароль</label>
        <input type="password" name="password" id="password"><br>

        <label for="repeat-password">Повторите пароль</label>
        <input type="password"name="password" id="password"><br>
        
        <button type="submit">Зарегаться</button>
    </form>
</body>
</html>