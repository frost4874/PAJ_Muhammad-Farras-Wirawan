<title>Query</title>
</head>
<body>
<h1 align="center">Query</h1> 
<table border="1">
<tbody>
@foreach($voter as $vote)
<tr>
    <td>{{ $vote->id }}</td>
    <td>{{ $vote->name }}</td>
    <td>{{ $vote->email }}</td>
    <td>{{ $vote->alamat }}</td>
</tr>
@endforeach
</tbody>
</table>
</body>
</html>