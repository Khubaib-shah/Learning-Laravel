@extends("layout")

@section('content')

    @include('partials._hero')
    @include('partials._search')

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

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless(count($listings) == 0)


            @foreach ($listings as $listing)

                <x-listing-card :listing="$listing" />
            @endforeach

        @else
            <p>No listing found</p>
        @endunless

    </div>

@endsection