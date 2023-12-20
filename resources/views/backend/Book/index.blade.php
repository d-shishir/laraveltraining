<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Page Count</th>
        <th>Point</th>
        <th>Author Id</th>
        <th>Type Id</th>
        <th>Action</th>
        <th>Edit</th>
        <th>Delete</th>

    </tr>
    @foreach($books as $book)
        <tr>
            <td>{{$book->name}}</td>
            <td>{{$book->pagecount}}</td>
            <td>{{$book->point}}</td>
            <td>{{$book->authorId}}</td>
            <td>{{$book->typeId}}</td>
            <td><a href="{{route('backend.book.show',$book->bookId)}}">View Details</a></td>
            <td><a href="{{route('backend.book.edit',$book->bookId)}}">edit</a></td>

            <td><form action="{{route('backend.book.destroy',$book->bookId)}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" value="delete">

                </form></td>
        </tr>
    @endforeach
</table>

</body>
</html>
