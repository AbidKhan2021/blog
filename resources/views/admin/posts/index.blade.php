<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full border border-collapse">
                        <thead>
                            <tr>
                                <th class="border">ID</th>
                                <th class="border">Slug</th>
                                <th class="border">Title</th>
                                <th class="border">Has published</th>
                                <th class="border">Created On</th>
                                <th class="border">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($posts as $post)
                                <tr class="py-5">
                                    <td class="border py-3">{{ $post->id }}</td>
                                    <td class="border py-3">{{ $post->slug }}</td>
                                    <td class="border py-3">{{ $post->title }}</td>
                                    <td class="border py-3">{{ $post->has_published }}</td>
                                    <td class="border py-3">{{ $post->created_at }}</td>
                                    <td class="border py-3">--</td>
                                </tr>
                            @empty
                                <tr class="py-4">
                                    <td colspan="6" class="text-center py-3 border">No posts found in the database.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
