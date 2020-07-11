@foreach($items as $item)
  <p>{{$item->getData()}}</p>
  @if($item->boards != null)
    @foreach ($item->boards as $obj)
      <h4>{{$obj->getData()}}</h4>
    @endforeach
  @endif
@endforeach

