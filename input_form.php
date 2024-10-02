<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    
<pre>
    <form action="processing.php"method = "POST" >
    <label id="title">Title</label>
    <input type="text" id="title" name="title">
    <label id="author">Author</label>
    <input type="text" id = "author" name = "author"> 
    <label id="available">Available</label>
    <input type="boolean" id = 'available' name = 'available'>
    <label id="pages">Pages</label>
    <input type="int" id='pages' name = 'pages'>
    <label id="isbn">ISBN</label>
    <input type="text" id='isbn' name='isbn'> <br>
    <input type="submit" value='Submit'>
    </form>
</pre>



</body>
</html>