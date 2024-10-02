<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,tr,th,td{
            border: 1px solid;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing File</title>
</head>
<body>
    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Available</th>
            <th>Pages</th>
            <th>ISBN</th>
        </tr>
<?php

   $book=array(

        'title'=>$_POST['title'],
        'author'=>$_POST['author'],
        'available'=>$_POST['available'],
        'pages'=>$_POST['pages'],
        'isbn'=>$_POST['isbn']

   );

   ?>

        <?php
        $jsonBook = file_get_contents("books.json");
        $books = json_decode($jsonBook,true);
        echo "<pre>";
        print_r($books);
        echo "</pre>";
   $books[]=$book;
        foreach($books as $book){
            echo "<tr>";
           echo "<td>{$book['title']}</td>";
           echo "<td> {$book['author']}</td>";
           echo "<td> {$book['available']}</td>";
           echo "<td>{$book['pages']}</td>";
           echo "<td>{$book['isbn']}</td>";
           echo "</tr>";
          
        }

        $encodedjson = json_encode($books,JSON_PRETTY_PRINT);
        file_put_contents('books.json',$encodedjson);
        ?>

    </table>
</body>
</html>