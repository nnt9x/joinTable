<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<table class="table table-bordered">
    <tr>
        <th>STT</th>
        <th>Ho ten</th>
        <th>Email</th>
        <th>Dia chi</th>
    </tr>
    @forelse($contacts as $contact)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$contact->full_name}}</td>
            <td>{{$contact->email}}</td>
            <td>
                <ol>
                    @forelse($contact->addresses as $item)
                        <li>{{$item->address}}</li>
                    @empty
                        Chua co thong tin
                    @endforelse
                </ol>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="4">Khong co du lieu</td>
        </tr>
    @endforelse
</table>
</body>
</html>
