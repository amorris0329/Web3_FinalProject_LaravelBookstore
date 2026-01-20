<x-layout>


    <h1 class="mb-5 text-3xl">Employee Login</h1>

    <div class="bg-gray-300 border-indigo-800 border-2 rounded-1 m-3 p-3">

        @if ($errors->any())
            <div class="text-red-600">
                {{ $errors->first() }}
            </div>
        @endif
        
        <form action="{{ route('empLogin') }}" method="POST">
            @csrf

            <fieldset class="my-3">
                <label for="email"><strong>E-Mail</strong></label>
                <br>
                <input class="bg-white rounded-lg p-1" type="email" id="email" name="email">
            </fieldset>

            <fieldset class="my-3">
                <label for="password"><strong>Password</strong></label>
                <br>
                <input class="bg-white rounded-lg p-1" type="password" id="password" name="password">
            </fieldset>

            <button class="bg-indigo-700 rounded-lg text-white p-3" type="submit">Submit</button>
        </form>
    </div>


</x-layout>