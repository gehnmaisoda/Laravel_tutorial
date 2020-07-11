@foreach ($users as $user)
<li>{{$user->id}}</li>
{{$user->name}}
{{$user->email}}
{{$user->age}}
@endforeach
