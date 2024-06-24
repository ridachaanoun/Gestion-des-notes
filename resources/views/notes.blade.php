<!-- resources/views/notes/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">My Notes</h1>
        <div class="overflow-x-auto">
            <table class="table-auto w-full">
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
                                <form action="{{ route('notes.destroy', $note->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
