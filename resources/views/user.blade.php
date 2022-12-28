
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UserBlade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/session1.css') }}">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>USERNAME</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $user)
            <tr>
                <td> {{ $user->id }} </td>
                <td> {{ $user->username }} </td>
                <td> {{ $user->email }} </td>
                <td> {{ $user->password }} </td>
                <td>
                    <a href="{{ route('user.update',$user->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <form action="{{ route('user.delete',$user->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>


            @endforeach
        </tbody>
    </table>

    <form action="{{ route('user.create') }}" method="get">
        <button class="btn btn-primary m-2">create</button>
    </form>

</body>
</html>
