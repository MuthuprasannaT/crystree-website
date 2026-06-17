<h2>New Job Application</h2>

<p><strong>Name:</strong> {{ $application->name }}</p>
<p><strong>Email:</strong> {{ $application->email }}</p>
<p><strong>Mobile:</strong> {{ $application->mobile }}</p>
<p><strong>Position:</strong> {{ $application->position }}</p>
<p><strong>Description:</strong> {{ $application->description }}</p>

<p>
Resume:
<a href="{{ url('uploads/resumes/'.$application->resume) }}">
Download Resume
</a>
</p>