<p>{{$msg}}</p>

@if (count($errors) > 0)
<div>
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif

<form class="" action="/hello" method="post">
  @csrf
  <p>名前</p>
  @if ($errors->has('name'))
    ERROR: {{$errors->first('name')}}
  @endif
  <input type="text" name="name" value="{{old('name')}}">
  
  <p>email</p>
  @if ($errors->has('email'))
    ERROR: {{$errors->first('email')}}
  @endif
  <input type="text" name="email" value="{{old('email')}}">
  
  <p>age</p>
  @if ($errors->has('age'))
    ERROR: {{$errors->first('age')}}
  @endif
  <input type="text" name="age" value="{{old('age')}}">
  <input type="submit" name="" value="送信！">
</form>