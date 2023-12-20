<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Data</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>DOB</th>
            <th>Gender</th>
            <th>Class</th>

        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->surname }}</td>
                <td>{{ $student->birthdate }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->class }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>
