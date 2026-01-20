<x-layout>

    <h1 class="mb-5 text-3xl">CONTACT US</h1>
    <div class="bg-gray-300 border-indigo-800 border-2 rounded-1 m-3 p-3">
        
        <form method="POST" action="{{ route('addContact') }}">
            @csrf

            <fieldset>
                <label for="name"><strong>Name</strong>:</label>
                <br>
                <input class="bg-white rounded-lg p-1" type="text" id="name" name="name">
            </fieldset>
            <fieldset>
                <label for="email"><strong>E-mail Address</strong>:</label>
                <br>
                <input class="bg-white rounded-lg p-1" type="text" id="email" name="email">
            </fieldset>
            <fieldset>
                <label for="subject"><strong>Subject</strong>:</label>
                <br>
                <input class="bg-white rounded-lg p-1" type="text" id="subject" name="subject">
            </fieldset>
            <fieldset>
                <label for="content"><strong>Message</strong>:</label>
                <br>
                <textarea class="rounded-lg p-1" id="content" rows="3" name="content"></textarea>
            </fieldset>
          
            <br>
            <button type="submit" name="submit" class="bg-indigo-700 rounded-lg text-white p-3">Submit</button>
        </form>

    </div>


</x-layout>