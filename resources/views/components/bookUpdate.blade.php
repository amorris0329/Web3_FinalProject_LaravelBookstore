@props(['book'])

<section class="m-5 p-2 border-4 border-green-800 bg-white">
    
    <form method="POST" action="{{ route('bookUpdate') }}">
        @csrf

        <input type="hidden" id="id" name="id" value="{{ $book->id }}">
                
        <h3 class="text-2xl">{{ $book['title'] }}</h3>
        <h5 class="italic">{{ $book['author'] }}</h5>

        <div class="flex flex-col">
            <span><strong>Published:</strong> {{ $book['publishYear'] }}</span>
                        
            <span><strong>Genre:</strong> {{ $book['genre'] }}</span>

            <span><strong>Price:</strong> <input class="bg-gray-200 w-full border-1 border-indigo-800 rounded-sm mb-1" id="price" name="price" type="text" value="{{ $book['price'] }}"></span>
                        
            <span><strong>In Stock</strong> <input class="bg-gray-200 w-full border-1 border-indigo-800 rounded-sm mb-1" id="stock" name="stock" type="number" value="{{ $book['stock'] }}"></span>
                        
            <span><strong>Image:</strong> (current) {{ $book['image'] }} <br><input type="text" id="image" name="image" class="bg-gray-200 w-full border-1 border-indigo-800 rounded-sm mb-1" value="{{ $book['image'] }}"></span>

            <label for="imageAlt">Image Alt Text:</label>
            <textarea name="imageAlt" id="imageAlt" cols="5" rows="5" class="bg-gray-200 border-1 border-indigo-800 rounded-sm mb-1">{{ $book['imageAlt'] }}</textarea>
            <br>
                        
            <span><strong>Delete Book:</strong><input type="checkbox" class="p-0" id="deleteThis" name="deleteThis" value="1"></span>
        </div>
                
        <button type="submit" class="bg-indigo-700 text-white rounded-lg p-3 mt-2">Update</button>
    </form>
              
</section>