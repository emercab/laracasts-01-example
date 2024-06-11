<h2>{{ $job->title }}</h2>

<p>
  Congratulations! Your job has been posted successfully.
</p>

<p>
  You can view your job in this <a href="{{ url('/jobs').'/'.$job->id }}">link</a>.
</p>