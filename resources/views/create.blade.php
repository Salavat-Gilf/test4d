<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div>
            <h1>Создайте свой рецепт</h1>
            <form action="{{route('store')}}" method="POST">
                @csrf
                <label for="name">Название рецепта</label>
                <input type="text" name="name" id="name"><br>

                <label for="category">категория</label>
                <input type="text" name="category" id="category"><br>

                <label for="recipe_text">Текст рецепта</label>
                <input type="text" name="recipe_text" id="recipe_text"><br>

                <button type="submit">Отправить</button>
            </form>
        </div>
</body>
</html>