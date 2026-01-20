<x-layout>

    <h1 class="mb-5 text-3xl">Featured Titles and Deals</h1>

    <div class="grid grid-cols-1">

        @foreach ($featureds as $featured)
            <x-featuredCard :featured="$featured" />
        @endforeach

    </div>


</x-layout>