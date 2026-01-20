@props(['contact'])

<section class="m-5 p-2 border-4 border-green-800 bg-white">
    <form method="POST" action="{{ route('contact.close', $contact) }}">
        @csrf
        @method('DELETE')
        
        <h2 class="font-bold text-2xl">{{ $contact['subject'] }}</h2>
        <p class="font-semibold">{{ $contact['name'] }}</p>
        <p class="italic">{{ $contact['email'] }}</p>
        <p>
            {{ $contact['content'] }}
        </p>
        <button type="submit" class="bg-indigo-700 text-white rounded-lg p-3 mt-4">Response Made</button>
    </form>
</section>