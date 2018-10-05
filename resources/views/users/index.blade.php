@extends ('layout')

@section('content')
    <h1>{{ $title }}</h1>  
        <ul>
            @forelse ($users as $user)
                <li> {{ $user }} </li>
            @empty 
                <li>No Hay Usuarios Registrados</li>
            @endforelse
                
        </ul>
       
@endsection

@section('sidebar')
    @parent
    <h2>Esto es lo mejor</h2>
@endsection

