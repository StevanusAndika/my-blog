<x-layout>
    <x-slot:title>All Posts</x-slot:title>

    <div class="py-8 max-w-screen-xl mx-auto">
        <button id="openModalBtn" 
            class="mb-6 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            + Add Post
        </button>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($posts as $post)
                <article class="bg-white p-6 rounded-lg shadow-lg">
                    @if ($post->image) 
                        <img src="{{ $post->cover_image }}" alt="{{ $post->title }}" class="w-full h-48 object-cover rounded-md">
                    @endif
                    <h2 class="mt-2 mb-2 text-2xl font-bold text-gray-900">{{ $post->title }}</h2>
                    <p class="text-sm text-gray-500">{{ $post->author }} | {{ $post->created_at->format('d M Y H:i') }}</p>
                    <p class="my-4 font-light">{{ Str::limit($post->body, 100) }}</p>
                    <a href="{{ url('posts', $post->id) }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
                </article>
            @endforeach
        </div>

        <!-- Modal Add Post -->
        <div id="modal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center">
            <div class="bg-white p-6 rounded-lg shadow-lg w-96">
                <h2 class="text-xl font-semibold mb-4">Add New Post</h2>

                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label class="block mb-2">Title:</label>
                    <input type="text" name="title" class="w-full border p-2 rounded" required>

                    <label class="block mt-3 mb-2">Author:</label>
                    <input type="text" name="author" class="w-full border p-2 rounded" required>

                    <label class="block mt-3 mb-2">Body:</label>
                    <textarea name="body" class="w-full border p-2 rounded" required></textarea>

                    <label class="block mt-3 mb-2">Upload Image:</label>
                    <input type="file" name="image" accept="image/*" class="w-full border p-2 rounded">

                    <div class="flex justify-end mt-4">
                        <button type="button" id="closeModalBtn"
                            class="mr-2 px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                            Cancel
                        </button>
                        <button type="submit"
                            class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const modal = document.getElementById("modal");
            const openModalBtn = document.getElementById("openModalBtn");
            const closeModalBtn = document.getElementById("closeModalBtn");

            openModalBtn.addEventListener("click", function () {
                modal.classList.remove("hidden");
            });

            closeModalBtn.addEventListener("click", function () {
                modal.classList.add("hidden");
            });

            window.addEventListener("click", function (event) {
                if (event.target === modal) {
                    modal.classList.add("hidden");
                }
            });
        });
    </script>
</x-layout>
