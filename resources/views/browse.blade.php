<x-layout>


    <h1 class="mb-5 text-3xl">Browse Our Shelves</h1>

    <div class="bg-gray-300 border-indigo-800 border-2 rounded-1 m-3 p-3">
        <form action="{{ route('search') }}" method="GET">
            <fieldset class="my-2">
                <label for="category">Select Category</label>
                <br>
                <select class="rounded-1" name="category" id="category">
                    <option value="all">Show All</option>
                    <option value="Title">Title</option>
                    <option value="Author">Author</option>
                    <option value="maxPrice">Maximum Price</option>
            </select>
            </fieldset>

            <fieldset class="my-2">
                <input type="text" name="term" id="term" class="bg-white rounded-lg p-2" placeholder="Enter Search Term Here...">
                </fieldset>
            <button class="
             bg-indigo-700 rounded-lg text-white p-3 transform transition duration-150 ease-in-out active:scale-85
        "    type="submit">Search</button>
        </form>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 justify-items-center">
        @foreach ($books as $book)
            <x-bookCard :book="$book" />
        @endforeach
    </div>


</x-layout>