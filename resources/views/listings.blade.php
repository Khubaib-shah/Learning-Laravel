@extends("layout")

@section('content')

    @include('partials._hero')

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


            @foreach ($listings as $listing)<div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img class="hidden w-48 mr-6 md:block" src="{{ asset('images/no-image.png') }}" alt="" />
                        <div>
                            <h3 class="text-2xl">
                                <a href="/listings/{{ $listing->id }}">{{ $listing->title}}</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
                            <ul class="flex">
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Laravel</a>
                                </li>
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">API</a>
                                </li>
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Backend</a>
                                </li>
                                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">Vue</a>
                                </li>
                            </ul>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        @else
            <p>No listing found</p>
        @endunless

    </div>

@endsection