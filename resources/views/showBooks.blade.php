<html>

<head>
</head>
<body>
<h1>It works!!!!!!!!<h1>
<table>
@foreach($books as $book)
<tr>
    <td>{{$book->Book_name}}</td>
    <td>{{$book->Author}}</td>
    <td>{{$book->Rating}}</td>
</tr>
@endforeach
</table>
</body>
</html>
