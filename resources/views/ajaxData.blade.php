@foreach($todos as $todo)
    <li id="{{ $todo->id }}">
        <a href="#" onclick="task_done('{{ $todo->id }}');" class="toggle"></a><span id="span_{{ $todo->id }}">{{ $todo->title }}</span>
        <a href="#" onclick="delete_task('{{ $todo->id }}');" class="icondelete">Delete</a>
        <a href="#" onclick="edit_task('{{ $todo->id }}', '{{ $todo->title }}');" class="icon-edit">Edit</a>
    </li>
@endforeach