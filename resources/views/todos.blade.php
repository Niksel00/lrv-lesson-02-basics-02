<div style="width: 250px; margin: 150px auto 0;">
    Список дел:<br/>
    @foreach($todos as $todo)
        <br/>
        <div>Дело номер {{ $todo->id }}</div>
        <div>title: {{ $todo->title }}</div>
        <div>description: {{ $todo->description }}</div>
        <div>created_at: {{ $todo->created_at }}</div>
        <div>updated_at: {{ $todo->updated_at }}</div>
    @endforeach
</div>>
