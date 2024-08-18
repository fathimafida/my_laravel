<x-layout>

    <div class="container mx-auto py-6 ">
        <x-slot name="title">home</x-slot>
        <h1 class="text-3xl font-bold">Welcome Page</h1>
    </div>




    @php
    $fruits = array(
        'apple',
        'banana',
        'orange',
        'pineapple',
        'mango',
        'grape',
        'papaya',
        'strawberry',
        'watermelon',
    );



@endphp
@foreach ($fruits as $fruit )
<p>{{$fruit}}</p>

@endforeach



    {{-- @php
        $records =[1];

    @endphp
    @if (count($records) === 1)
    I have one record
    @elseif (count($records) > 1)
    I have more than one record
    @else
    I have no records

    @endif --}}
</x-layout>
