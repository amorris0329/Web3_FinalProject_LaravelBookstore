@props(['event'])

<div class="my-5 p-5 bg-white rounded-lg flex flex-row">
    <section class="w-50 mr-5">
        <img class="img-fluid mx-0" src="{{ asset('images/' . $event['image']) }}" alt="{{ $event['imageAlt'] }}">
    </section>

    <section class="self-center">
        <h2 class="text-2xl">{{ $event['title'] }}</h2>
        <p>
            {{ $event['description'] }}
        </p>
    </section>

    <section>
        <strong>{{ $event['date'] }}</strong>
    </section>
</div>