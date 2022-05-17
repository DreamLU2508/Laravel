@extends("Master.master")

@section("Noidung")
    {{--
        <h2>PHP</h2>
        <?php echo $data ?>
        <br>
        {{$data}}
        <br>
        {!!$data!!}
    --}}    

    {{--if else--}}
    @if ($data1 == "")
        {{"khong co du lieu"}}
    @else
        {{$data}}
    @endif

    <br>

    {{-- for --}}
    @for ($i = 1; $i < 10; $i++)
        {{$i}} <br>
    @endfor
    
    {{-- foreach, continue--}}
    <?php $array = array("php", "laravel", "aps.net")?>
    @foreach ($array as $item)
        @continue($item == "php")
        {{$item}}
    @endforeach
    <br>

    {{-- forelse, break--}}
    <?php $array1 = array()?>
    @forelse ($array as $item)
        @break($item == "laravel")
        {{$item}}
    @empty
        {{"khong co gi"}}
    @endforelse


@endsection


