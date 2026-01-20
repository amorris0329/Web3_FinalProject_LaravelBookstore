@props(['employee'])

<section class="m-5 p-2 border-4 border-green-800 bg-white">
    @if (Auth::user()->email === 'admin@elderpages.com' && $employee->email !== 'admin@elderpages.com')
        <form method="POST" action="{{ route('login.remove', $employee) }}">
            @csrf
            @method('DELETE')
            
            <h2 class="font-bold text-2xl">{{ $employee['name'] }}</h2>
            <p class="font-semibold">{{ $employee['email'] }}</p>
            
            <button type="submit" class="bg-indigo-700 text-white rounded-lg p-3 mt-4">Remove Employee</button>
        </form>
    @else
        <div>
            <h2 class="font-bold text-2xl">{{ $employee['name'] }}</h2>
            <p class="font-semibold">{{ $employee['email'] }}</p>
        </div>
    @endif
    

</section>