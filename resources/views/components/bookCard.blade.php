@props(['book'])

{{-- <div class="m-5">
      <div class="inline-flex"> --}}
        <div class="w-64 bg-white border-4 border-indigo-800 rounded-2xl overflow-hidden shadow-md flex flex-col">
            <header class="w-full h-80 overflow-hidden">
                <img class="w-full h-full object-cover" src="{{ asset('images/' . $book['image']) }}" alt="{{ $book['imageAlt'] }}">
            </header>

            <div class="p-3 flex-1 flex flex-col justify-between">
                <div>
                    <h3 class="text-2xl">{{ $book['title'] }}</h3>
                    <h5 class="italic">{{ $book['author'] }}</h5>
                </div>

                <div class="mt-3 text-sm space-y-1 flex flex-col">
                    <span><strong>Published:</strong> {{ $book['publishYear'] }}</span>
                    <span><strong>Price:</strong> {{ $book['price'] }}</span>
                    <span><strong>Genre:</strong> {{ $book['genre'] }}</span>
                    <span><strong>In Stock:</strong> {{ $book['stock'] }}</span>
                </div>
            </div>
        </div>
    {{-- </div> --}}