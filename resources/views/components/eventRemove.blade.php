@props(['event'])

<section class="m-5 p-2 border-4 border-green-800 bg-white">
            
    <form action="{{ route('event.delete', $event) }}" method="POST">
        @csrf
        @method("DELETE")
        
        <h2 class="font-bold text-2xl">{{ $event['title'] }}</h2>
        <p class="font-semibold">{{ $event['date'] }}</p>
        <p>
            {{ $event['description'] }}
        </p>
        <br>
        <p><strong>Image:</strong> {{ $event['image'] }}; {{ $event['imageAlt'] }}</p>

        <button type="submit" class="bg-indigo-700 text-white rounded-lg p-3 mt-4">Remove Event</button>
    </form>
                
</section>