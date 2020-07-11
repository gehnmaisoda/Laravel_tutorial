@if (connt($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
  @endforeach
</ul>
@endif

<form class="" action="/person/add" method="post">
  @csrf
  名前
  <input type="text" name="name" value="{{old('name')}}">
  email
  <input type="text" name="email" value="{{old('email')}}">
  年齢
  <input type="number" name="age" value="{{old('age')}}">
  <input type="submit" name="" value="登録">
</form>