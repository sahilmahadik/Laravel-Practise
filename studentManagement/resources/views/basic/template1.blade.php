<h1>Basic Template Practise 1</h1>

{{ 10 + 2 }}

<br><br>

{{ 'Hello Sahil' }}

<br><br>

{{ "<h3>Sahil Mahadik</h3>" }}

{!! "<h3>Sahil Mahadik</h3>" !!}


<br><br>

{{-- This Comment in blade template --}}

@php
    $names = "Sahil the variable";
@endphp

{{ $names }}


<br><br>


{{ "<script> console.log('this log print') </script>" }}

{!!   "<script> console.log('this log print') </script>" !!}

<br><br>


{{-- For Each loop to print --}}

@php
    $users = ['Sahil','Suyash','Riya','Suchita','Soham','Swara']
@endphp

<ul>
@foreach ($users as $user)
    <li> {{ $loop->index }}=>{{ $user }}</li>
@endforeach
</ul>


{{-- This are foreach functionality  --}}
<ul>
@foreach ($users as $user)

    @if($loop->first)
        <li style="color:red">{{ $user }}</li>
    @elseif($loop->last)
        <li  style="color:darkblue">{{ $user }}</li>
    @endif

@endforeach
</ul>

<ul>
@foreach ($users as $user)

    @if($loop->even)
        <li style="color:red">{{ $user }}</li>
    @elseif($loop->odd)
        <li style="color:blue">{{ $user }}</li>
    @endif

@endforeach
</ul>