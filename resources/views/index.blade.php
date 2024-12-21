<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Рецепты</title>
</head>

<body>
    @foreach ($recipes as $recipe)
    <div>
        <h2>{{ $recipe->name }}</h2>
        <p>{{ $recipe->category}}</p>
        <p>Контактный телефон: {{ $recipe->recipe_text }}</p>
        <p>Дата размещения: {{ $recipe->created_at }}</p>
    </div>
    @endforeach
</body>

</html>