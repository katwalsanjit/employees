<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <h1>List of Jobs: </h1>
    <hr />
    @foreach($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }}
            </a>
        </li>
    @endforeach
</x-layout>
