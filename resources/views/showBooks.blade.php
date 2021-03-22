<html>

<head>
</head>
<body>

<table>
@foreach($books as $book)
<tr>
    <td>{{$book->Book_name}}</td>
    <td>{{$book->Author}}</td>
    <td>{{$book->Rating}}</td>
    <td>Change1</td>
</tr>
@endforeach
</table>
</body>
</html>
