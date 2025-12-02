@extends("layout")

@section('content')

    <!-- This is is the reguler expression of listing.php  -->
    <!--
    <h1> <?php echo $heading; ?></h1>

    <?php foreach ($listings as $listing): ?>
        <h2><?php    echo $listing['id']; ?></h2>
        <h2><?php    echo $listing['title']; ?></h2>
        <p><?php    echo $listing['description']; ?></p>
    <?php endforeach; ?>
    -->
    <!-- This displays the listings data that was fetched in the controller (web.php route). -->




    <!-- This is is the blade expression of listing.blade.php  -->
    {{-- This syntex is much cleaner --}}

    {{-- <h1> {{ $heading }}</h1>

    @foreach ($listings as $listing):
    <h2>{{ $listing['id'] }}</h2>
    <h2>{{ $listing['title'] }}</h2>
    <p>{{ $listing['description'] }}</p>
    @endforeach; --}}

    <!-- This displays the listings data that was fetched in the controller (web.php route). -->


    {{-- How if and else work --}}

    {{-- This is the first way of doing if --}}
    {{-- @if (count($listings) != 0 )

    <h1> {{ $heading }}</h1>

    @foreach ($listings as $listing);
    <h2>{{ $listing['id'] }}</h2>
    <h2>{{ $listing['title'] }}</h2>
    <p>{{ $listing['description'] }}</p>
    @endforeach;
    @endif --}}


    {{-- This is the second way of doing if statement --}}
    <h1> {{ $heading }}</h1>

    @unless(count($listings) == 0)


        @foreach ($listings as $listing)
            <h2><a href="/listings/{{ $listing['id'] }}">{{ $listing['title'] }}</a></h2>
            <h4>{{ $listing['tags'] }}</h2>
                <p>{{ $listing['description'] }}</p>
        @endforeach

    @else
            <p>No listing found</p>
        @endunless


@endsection