<!-- resources/views/notes/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('MY NOTES') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 mt-8">
        <div class="mb-4 flex justify-between">
            <form action="{{ route('notes') }}" method="GET" class="flex space-x-2">
                <label for="category_filter" class="mr-2">Filter by Category:</label>
                <select name="category" id="category_filter" class="form-select">
                    <option value="">All</option>
                    @foreach(Auth::user()->categories as $category)
                        <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Filter
                </button>
            </form>
            <form action="{{ route('notes') }}" method="GET" class="flex space-x-2">
                <input type="text" name="search" placeholder="Search by Title" class="form-input" value="{{ request('search') }}">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Search
                </button>
            </form>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($notes as $note)
                <div class="shadow-xl border-2 p-2.5 m-2.5 text-lg  transition ease-in-out delay-150 bg-bg-slate-50 hover:-translate-y-1 hover:scale-110 hover:bg-slate-200 duration-300">
                    <h3 class="text-xl font-semibold mb-2">{{ $note->title }}</h3>
                    <p class="text-gray-700 mb-4"> <span class="font-bold">content: </span> {{ $note->content }}</p>
                    <p class="text-gray-500 mb-4"> <span class="font-bold">Category:</span>  {{ optional($note->category)->name ?: 'Uncategorized' }}</p>
                    <div class="flex space-x-2">
                        <form action="{{ route('notes.destroy', $note->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>
                        <a href="{{ route('notes.edit', $note->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination Links -->
        <div class="mt-4">
            {{ $notes->links() }}
        </div>
    </div>
</x-app-layout>
