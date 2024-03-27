<x-layout title="Series">
    <a href="/series/create">Create a new Serie</a>
    <ul>
        @foreach ($series as $serie)
            <li>{{ $serie->name }}</li>
        @endforeach
    </ul>
</x-layout>