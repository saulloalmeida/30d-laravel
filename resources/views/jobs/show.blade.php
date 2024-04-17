<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    <h1>{{$job->title}}: Pays {{$job->salary}} per year.</h1>

    <p class="mt-6">
       <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p>
</x-layout>
