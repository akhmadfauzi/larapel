<h1>Projects list</h1>
<ul>
@foreach ($projects as $project)
<li><a href="/projects/{{$project->id}}">{{$project->title}}</a></li>
@endforeach

</ul>