@props(['featured'])

<div class="my-5 p-5 bg-white rounded-lg flex flex-row">
    <section class="w-50 mr-5">
        <img class="img-fluid mx-0" src="{{ asset('images/' . $featured['image']) }}" alt="{{ $featured['imageAlt'] }}">
    </section>

    <section class="self-center">
        <h2 class="text-2xl">{{ $featured['title'] }}</h2>
        <p>
            {{ $featured['description'] }}
        </p>
    </section>

    <section>
        <strong>OFFER ENDS: {{ $featured['date'] }}</strong>
    </section>
</div>