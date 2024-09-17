<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
  <h1>New Task</h1>  
  <form method="POST" action="{{ route('todo.store')}}">
@csrf
    <div class="form">
        <label for="task">Enter a new task</label>
        <input type="text" name="task"><br>
<button type="submit" class="btn btn-success">Create Task</button>    </div>
  </form>

</body>
</html>