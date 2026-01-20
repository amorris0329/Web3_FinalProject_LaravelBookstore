<x-layout>

    <script>
        function changePage(input) {
            console.log(input);
            books = document.getElementById('books');
            contacts = document.getElementById('contacts');
            events = document.getElementById('events');
            featureds = document.getElementById('featureds');
            employees = document.getElementById('employees');

            if(input == 'books') {
                books.style.display = 'block';
                contacts.style.display = 'none';
                events.style.display = 'none';
                featureds.style.display = 'none';
                employees.style.display = 'none';
            }
            else if(input == 'contacts') {
                books.style.display = 'none';
                contacts.style.display = 'block';
                events.style.display = 'none';
                featureds.style.display = 'none';
                employees.style.display = 'none';
            }
            else if(input == 'events') {
                books.style.display = 'none';
                contacts.style.display = 'none';
                events.style.display = 'block';
                featureds.style.display = 'none';
                employees.style.display = 'none';
            }
            else if(input == 'featureds') {
                books.style.display = 'none';
                contacts.style.display = 'none';
                events.style.display = 'none';
                featureds.style.display = 'block';
                employees.style.display = 'none';
            }
            else if(input == 'employees') {
                books.style.display = 'none';
                contacts.style.display = 'none';
                events.style.display = 'none';
                featureds.style.display = 'none';
                employees.style.display = 'block';
            }
        }
    </script>


    <button class="bg-indigo-700 text-white rounded-lg p-3 mt-2" onclick="changePage('books')">See Books</button>
    <button class="bg-indigo-700 text-white rounded-lg p-3 mt-2" onclick="changePage('contacts')">See Contacts</button>
    <button class="bg-indigo-700 text-white rounded-lg p-3 mt-2" onclick="changePage('events')">See Events</button>
    <button class="bg-indigo-700 text-white rounded-lg p-3 mt-2" onclick="changePage('featureds')">See Featured Titles</button>
    <button class="bg-indigo-700 text-white rounded-lg p-3 mt-2" onclick="changePage('employees')">See Employees</button>

    @if ($errors->any())
        <div class="text-red-600 m-5">
            {{ $errors->first() }}
        </div>
    @endif

    <section id="books">       

        <section class="m-5 p-2 border-4 border-green-800 bg-white">
            <h2 class="text-2xl">Add Book to Store</h2>

            <form action="{{ route('createBook') }}" method="POST">
                @csrf

                <label for="title">Title:</label>
                <input type="text" id="title" name="title" class="bg-gray-200 border-1 border-indigo-800 rounded-sm mb-1 w-full">
                <br>
                <label for="author">Author:</label>
                <input type="text" id="author" name="author" class="bg-gray-200 border-1 border-indigo-800 rounded-sm mb-1 w-full">
                <br>
                <label for="publishYear">Publishing Year:</label>
                <input type="number" id="publishYear" name="publishYear" class="bg-gray-200 border-1 border-indigo-800 rounded-sm mb-1 w-full">
                <br>
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" class="bg-gray-200 border-1 border-indigo-800 rounded-sm mb-1 w-full">
                <br>
                <label for="genre">Genre:</label>
                <input type="text" id="genre" name="genre" class="bg-gray-200 border-1 border-indigo-800 rounded-sm mb-1 w-full">
                <br>
                <label for="stock">Amount in Stock:</label>
                <input type="number" id="stock" name="stock" class="bg-gray-200 border-1 border-indigo-800 rounded-sm mb-1 w-full">
                <br>
                <label for="image">Image:</label>
                <input type="text" id="image" name="image" class="bg-gray-200 border-1 border-indigo-800 rounded-sm mb-1 w-full">
                <br>
                <label for="imageAlt">Image Alt Text:</label><br>
                <textarea name="imageAlt" id="imageAlt" name="imageAlt" cols="5" rows="5" class="bg-gray-200 border-1 border-indigo-800 rounded-sm mb-1"></textarea>
                <br>
                <button type="submit" class="bg-indigo-700 text-white rounded-lg p-3 mt-2">Add to Store</button>

            </form>
        </section>

        <h1 class="text-3xl">Books We Sell</h1>

        <div class="pt-1 mt-1 grid grid-cols-2">

            @foreach ($books as $book)
                <x-bookUpdate :book="$book" />
            @endforeach


        </div>
    </section>


    <section id="contacts" style="display: none;">
        <h1 class="mb-5 text-3xl">Contact Submissions</h1>

        <div class="pt-5 mt-5 grid grid-cols-2">

            @foreach ($contacts as $contact)
                <x-contactSub :contact="$contact" />
            @endforeach


        </div>

    </section>

    <section id="events" style="display: none;"> 
        <h1 class="mb-5 text-3xl">Events Banners</h1>

        <section class="m-5 p-2 border-4 border-green-800 bg-white">
            <h2 class="text-2xl">Add New Event</h2>

            <form action="{{ route('createEvent') }}" method="POST">
                @csrf

                <label for="title">Title:</label>
                <input type="text" id="title" name="title" class="bg-gray-200 border-1 border-indigo-800 rounded-sm mb-1 w-full">
                <br>
                <label for="date">Date:</label>
                <input placeholder="YYYY-MM-DD" type="date" id="date" name="date" class="bg-gray-200 border-1 w-full border-indigo-800 rounded-sm mb-1">
                <br>
                <label for="description">Description:</label>
                <input type="text" id="description" name="description" class="bg-gray-200 border-1 border-indigo-800 w-full rounded-sm mb-1">
                <br>
                <label for="image">Image:</label>
                <input type="text" id="image" name="image" class="bg-gray-200 border-1 border-indigo-800 rounded-sm mb-1 w-full">
                <br>
                <label for="imageAlt">Image Alt Text:</label><br>
                <textarea name="imageAlt" id="imageAlt"cols="5" rows="5" class="bg-gray-200 border-1 border-indigo-800 rounded-sm mb-1"></textarea>
                <br>
                <button type="submit" class="bg-indigo-700 text-white rounded-lg p-3 mt-2">Add to Store</button>

            </form>

        </section>

        <div class="pt-5 mt-5 grid grid-cols-2">

            @foreach ($events as $event)
                <x-eventRemove :event="$event" />
            @endforeach

            
        </div>

    </section>

    <section id="featureds" style="display: none;"> 
        <h1 class="mb-5 text-3xl">Featured Title Banners</h1>

        <section class="m-5 p-2 border-4 border-green-800 bg-white">
            <h2 class="text-2xl">Add New Featured Title</h2>

            <form action="{{ route('createFeatured') }}" method="POST">
                @csrf

                <label for="title">Title:</label>
                <input type="text" id="title" name="title" class="bg-gray-200 border-1 border-indigo-800 rounded-sm mb-1 w-full">
                <br>
                <label for="date">Date:</label>
                <input placeholder="YYYY-MM-DD" type="date" id="date" name="date" class="bg-gray-200 border-1 w-full border-indigo-800 rounded-sm mb-1">
                <br>
                <label for="description">Description:</label>
                <input type="text" id="description" name="description" class="bg-gray-200 border-1 border-indigo-800 w-full rounded-sm mb-1">
                <br>
                <label for="image">Image:</label>
                <input type="text" id="image" name="image" class="bg-gray-200 border-1 border-indigo-800 rounded-sm mb-1 w-full">
                <br>
                <label for="imageAlt">Image Alt Text:</label><br>
                <textarea name="imageAlt" id="imageAlt"cols="5" rows="5" class="bg-gray-200 border-1 border-indigo-800 rounded-sm mb-1"></textarea>
                <br>
                <button type="submit" class="bg-indigo-700 text-white rounded-lg p-3 mt-2">Add to Store</button>

            </form>

        </section>

        <div class="pt-5 mt-5 grid grid-cols-2">

            @foreach ($featureds as $featured)
                <x-featuredRemove :featured="$featured" />
            @endforeach

            
        </div>

    </section> 

    <section id="employees" style="display: none;"> 
        <h1 class="mb-5 text-3xl">Employees</h1>

        <section class="m-5 p-2 border-4 border-green-800 bg-white">
            @if (Auth::user()->email === 'admin@elderpages.com')
                <h2 class="text-2xl">Register New Employee</h2>

                <form action="{{ route('register') }}" method="POST">
                    @csrf

                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="bg-gray-200 border-1 border-indigo-800 rounded-sm mb-1 w-full">
                    <br>
                    <label for="email">E-Mail:</label>
                    <input type="email" id="email" name="email" class="bg-gray-200 border-1 border-indigo-800 rounded-sm mb-1 w-full">
                    <br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" class="bg-gray-200 border-1 border-indigo-800 rounded-sm mb-1 w-full">
                    <br>
                    <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="bg-gray-200 border-1 border-indigo-800 rounded-sm mb-1 w-full">
                    <br>
                    <button type="submit" class="bg-indigo-700 text-white rounded-lg p-3 mt-2">Register Employee</button>
                </form>
            @endif
        </section>

        <div class="pt-5 mt-5 grid grid-cols-2">

            @foreach ($employees as $employee)
                <x-employeeRemove :employee="$employee" />

                @if (Auth::user()->email === 'admin@elderpages.com' && $employee->email !== 'admin@elderpages.com')
                    <section class="m-5 p-2 border-4 border-green-800 bg-white">

                        <span>Reset <strong>{{ $employee->name }}</strong>'s Password:</span>

                        <form action="{{ route('resetPassword', $employee) }}" method="POST">
                            @csrf
                            <input type="hidden" id="name" name="name" value="{{ $employee->name }}">
                            <input type="hidden" id="email" name="email" value="{{ $employee->email }}">

                            <label for="password">New Password:</label>
                            <input type="password" id="password" name="password" class="bg-gray-200 border-1 border-indigo-800 rounded-sm mb-1 w-full">
                            <br>
                            <label for="password_confirmation">Confirm New Password:</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="bg-gray-200 border-1 border-indigo-800 rounded-sm mb-1 w-full">
                            <br>
                            <button type="submit" class="bg-indigo-700 text-white rounded-lg p-3 mt-2">Reset Employee Password</button>
                        </form>
                    </section>
                @elseif (Auth::user()->email === 'admin@elderpages.com' && $employee->email == 'admin@elderpages.com')
                    <section class="m-5 p-2 border-4 border-green-800 bg-white">
                        <span>Cannot Reset <strong>{{ $employee->name }}</strong>'s Password</span>
                        <p class="bg-gray-200 border-1 border-indigo-800 text-red-600 rounded-sm mb-1 p-2 w-full">
                            This employee is the Admin of this site, and therefore cannot 
                            have their password reset without direct database access.
                        </p>
                    </section>
                @endif
            
            @endforeach
            
        </div>

</x-layout>