<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
 <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="/">All Tasks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/todo/create">New Task</a>
            </li>
        </ul>
  <h1>Todo List</h1>  
  <table class="table">

        <thead>

            <tr>

                <th>ID</th>

                <th>Task</th>

                <th>Status</th>
                <th> Actions</th>

            </tr>

        </thead>

        <tbody>


                @foreach($todo as $todos)

                    <tr>

                        <td>{{ $todos->id }}</td>

                        <td>{{ $todos->task }}</td>

                        <td>{{ $todos->status }}</td>
                        <td>
                            <td>

                            <form action="/todo/{{ $todos->id }}/edit" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-sm">Edit Task</button>

                            </form>

                          <td>  <form action="/todo/{{ $todos->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>

                            </form></td>

                        </td>
                        </td>
                    </tr>
                @endforeach

        </tbody>

    </table>
  <!-- {{$todo??''}} -->
</body>
</html>