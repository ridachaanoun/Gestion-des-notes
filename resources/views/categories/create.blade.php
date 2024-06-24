<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('categories.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Category Name</label>
                            <input type="text" name="name" id="name" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
                        </div>
                        <!-- Add other fields if necessary -->
                        <button type="submit" >
                            Create Category
                        </button>
                        
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
