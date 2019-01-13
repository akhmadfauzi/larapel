<h1>Projects list</h1>
<form method="POST" action="/projects">
    {{ csrf_field() }}  
    <div> 
        <input type="text" name="title" placeholder="Title"/>
    </div>
    <div> 
        <input type="text" name="description" placeholder="Description"/>
    </div>
    <div> 
        <button type="submit">Create project </button>
    </div>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>    
    @endif
    
    
</form>