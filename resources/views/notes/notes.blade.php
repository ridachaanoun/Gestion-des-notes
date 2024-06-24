<!-- resources/views/notes/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('MY NOTES') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 mt-8">
        <!-- Form to search by title and filter by category -->
        <form method="GET" action="{{ route('notes') }}" class="mb-4 flex justify-between">
            <div class="flex items-center">
                <label for="title" class="block text-sm font-medium text-gray-700 mr-2">Search by Title:</label>
                <input type="text" name="title" id="title" class="form-input block w-full" value="{{ $title }}" placeholder="Search title...">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">Search</button>
            </div>
            <div class="flex items-center">
                <label for="category_id" class="block text-sm font-medium text-gray-700">Filter by Category:</label>
                <select name="category_id" id="category_id" class="form-select w-full mt-1">
                    <option value="">All Categories</option>
                    
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">Filter</button>

            </div>
        </form>

        <div class="overflow-x-auto">
            <table class="table-auto w-full h-14 bg-gradient-to-r from-cyan-500 to-blue-500">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Content</th>
                        <th class="px-4 py-2">Category</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notes as $note)
                        <tr>
                            <td class="border px-4 py-2">{{ $note->title }}</td>
                            <td class="border px-4 py-2">{{ $note->content }}</td>
                            <td class="border px-4 py-2">{{ optional($note->category)->name ?: 'Uncategorized' }}</td>
                            <td class="border px-4 py-2">
                                <div class="flex space-x-2">
                                    <form action="{{ route('notes.destroy', $note->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                    </form>
                                    <a href="{{ route('notes.edit', $note->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
