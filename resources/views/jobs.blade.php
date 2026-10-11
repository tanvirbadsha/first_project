<x-layout>
<x-slot:heading>
    Jobs
</x-slot:heading>
  <div>
     @foreach ($jobs as $job)
     <h2> <strong>Job Name: </strong><a href="/jobs/{{ $job['id'] }}">{{ $job['title'] }}</a></h2>
     <p> <strong>Salary: </strong>{{ $job['salary'] }}</p>
     @endforeach
    </div>
</x-layout>