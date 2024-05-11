<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
</head>
<body>
<form method="POST" action="/store">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" id="title"><br><br>
    <label for="author_name">Author Name:</label>
    <input type="text" name="author_name" id="author_name"><br><br>
    <label for="genre">Genre:</label>
    <select name="genre" id="genre">
        <option value="fiction">Fiction</option>
        <option value="non-fiction">Non-Fiction</option>
        <option value="classics">Classics</option>
        <option value="self_help">Self Help</option>
    </select><br><br>
    <input type="submit" name="submit" id="submit">
</form>
</body>
</html>