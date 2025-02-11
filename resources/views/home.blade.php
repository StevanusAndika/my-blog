
<x-layout>
    <!-- kirim dahulu titlenya di halaman home -->
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- kemudian halaman home akan jadi slot untuk layout.blade -->

    <h3 class="text-xl">ini adalah halaman home page</h3>
</x-layout>