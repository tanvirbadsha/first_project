<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
      <div>
            <h1>JOb single</h1>
            <h2> <strong>Job Name: </strong>{{ $job['title'] }}</h2>
            <p> <strong>Salary: </strong>{{ $job['salary'] }}</p>
        </div>
    </x-layout>