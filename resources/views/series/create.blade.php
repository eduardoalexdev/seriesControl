<x-layout title="Create Serie">
    <form action="/series/store" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <button type="submit">Add</button>
    </form>
</x-layout>