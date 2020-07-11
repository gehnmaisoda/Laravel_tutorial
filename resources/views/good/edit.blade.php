<form action="/good/edit" method="post">
  @csrf
  <li>{{$form->id}}</li>
  <input type="hidden" name="id", value="{{$form->id}}">
  名前
  <input type="text" name="name" value="{{$form->name}}">
  email
  <input type="text" name="email" value="{{$form->email}}">
  <input type="submit" name="" value="送信">
</form>