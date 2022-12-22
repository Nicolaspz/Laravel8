@foreach ($services as $item)

<img  class="" src=" {{ url("storage/{$item->image}") }} " alt="  ">

@endforeach