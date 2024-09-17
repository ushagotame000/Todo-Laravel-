<form action="/todo/{{ $todo->id }}" method="POST">
    @csrf
    @method('PATCH')
    <label for="task">Task:</label>
    <input type="text" id="task" name="task" value="{{ $todo->task }}">
    <br>
    <label for="status">Status:</label>
    <input type="text" id="status" name="status" value="{{ $todo->status }}">
    <br>
    <button type="submit" class="btn btn-primary">Update</button>
</form>