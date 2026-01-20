@props(['featured'])

<section class="m-5 p-2 border-4 border-green-800 bg-white">
            
    <form action="{{ route('featured.delete', $featured) }}" method="POST">
        @csrf
        @method("DELETE")
        
        <h2 class="font-bold text-2xl">{{ $featured['title'] }}</h2>
        <p class="font-semibold">{{ $featured['date'] }}</p>
        <p>
            {{ $featured['description'] }}
        </p>
        <br>
        <p><strong>Image:</strong> {{ $featured['image'] }}; {{ $featured['imageAlt'] }}</p>

        <button type="submit" class="bg-indigo-700 text-white rounded-lg p-3 mt-4">Remove Featured Title</button>
    </form>
                
</section>