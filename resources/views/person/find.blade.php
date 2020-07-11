<form class="" action="/person/find" method="POST">
  @csrf
  <input type="text" name="input" value="{{$input}}">
  <input type="submit" name="" value="送信">
</form>

@if (isset($item))
<p>{{$item->getData()}}</p>
@endif