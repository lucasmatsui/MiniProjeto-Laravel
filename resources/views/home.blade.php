<h1>Lista de tarefas</h1>

@if(count($lista) > 0) 
    <ul>
    @foreach($lista as $item)
        <li>{{ $item->item }}</li>
    @endforeach
    </ul>
@else
    <h4>Não há itens</h4>
@endif

<hr/>

<form method="POST">
    {{ csrf_field() }}
    <input type="text" name="item" />
    <button type="submit">+</button>
</form>