

    @foreach($jobs as $job)
    <!-- Job listing content -->
    <div class="job-listing">
        <h3>{{ $job->job_position }}</h3>
        <p>Field of Work: {{ $job->field_of_work }}</p>
        <p>Location: {{ $job->location }}</p>
        <p>Salary: {{ $job->salary }}</p>
  <p>Posted Date: {{ $job->posted_date }}</p>
    <p>Closing Date: {{ $job->closing_date }}</p>
 <p style="color:
                @if ($job->status === 'pending')
                    orange
                @elseif ($job->status === 'Open')
                    green
                @elseif ($job->status === 'closed')
                    red
                {{-- Add more conditions for other status values as needed --}}
                @endif
            ">Status: {{ $job->status }}</p>
        <!-- Button to trigger the modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#jobModal{{ $job->id }}">
            View Details
        </button>
    </div>
    @endforeach

    <!-- Modals for job details -->
@foreach($jobs as $job)
<div class="modal fade" id="jobModal{{ $job->id }}" tabindex="-1" role="dialog" aria-labelledby="jobModalLabel{{ $job->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jobModalLabel{{ $job->id }}">Job Details: {{ $job->job_position }}</h5>
                <!-- Add Copy button -->
               <button type="button" class="btn btn-success" onclick="copyJobDetails({{ $job->id }})">Copy</button>

            </div>
            <div class="modal-body">
                <!-- Display job details -->
                <h4>Job Position: {{ $job->job_position }}</h4>
                <p>Field of Work: {{ $job->field_of_work }}</p>
                <p>Location: {{ $job->location }}</p>
                <p>Salary: {{ $job->salary }}</p>
                <p>Requirements: {{ $job->requirements }}</p>
                <p>Posted Date: {{ $job->posted_date }}</p>
                <p>Closing Date: {{ $job->closing_date }}</p>
                <p style="color:
                @if ($job->status === 'pending')
                    orange
                @elseif ($job->status === 'approved')
                    green
                @elseif ($job->status === 'rejected')
                    red
                {{-- Add more conditions for other status values as needed --}}
                @endif
                ">Status: {{ $job->status }}</p>
                <!-- Add more job details as needed -->
                <div>
                    <p><strong>Best For You HR Consultancy</strong></p>
                    <p>Office No: 203, 2nd Floor, Brass 2 Building</p>
                    <p>Near Sharaf Dg Metro Station (Exit No: 3), Bur Dubai, Dubai, UAE</p>
                    <p>Monday - Saturday (9am - 7pm)</p>
                    <p>Sunday (10am - 2pm)</p>
                    <p><strong>Phone:</strong> 042682901</p>
                    <br>
                    <p><strong>Important Note:</strong></p>
                    <p>Those who have already registered in our consultancy, kindly send your resume with the Job Position Name & our Register Number in the subject of the Email. After that, please note when you are sending the resume make sure that it should be STRICTLY matching the REQUIREMENTS, DUTIES & RESPONSIBILITIES that we mentioned above & it should be mentioned in the resume also. If it is not matching our requirements, your resume will not be considered.</p>
                    <br>
                    <p><strong>For more details visit:</strong></p>
                    <p><a href="http://www.best4uhr.com" target="_blank">http://www.best4uhr.com</a></p>
                    <br>
                    <p><strong>Best Wishes …</strong></p>
                    <p><strong>Best For You Team.</strong></p>
                    <br>
                    <p><em>Right Job In The Right Time In Right Hand</em></p>
                    <p><em>Best for You Hiring</em></p>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{ route('job.apply.form', ['jobId' => $job->id]) }}" class="btn btn-primary">Apply</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- JavaScript for copying job details -->
<script>
    function copyJobDetails(jobId) {
        // Get the modal content
        var modalContent = document.getElementById('jobModal' + jobId).querySelector('.modal-body');

        // Create a range and a selection
        var range = document.createRange();
        var selection = window.getSelection();

        // Select the text inside the modal content
        range.selectNodeContents(modalContent);
        selection.removeAllRanges();
        selection.addRange(range);

        // Copy the selected text to the clipboard
        document.execCommand('copy');

        // Deselect the text
        selection.removeAllRanges();

        // Display a success message or perform other actions as needed
        alert('Job details copied to clipboard!');
    }
    function resetSearchForm() {
        // Find the search input field
        const searchInput = document.querySelector('input[name="search_query"]');

        // Clear the search input field
        searchInput.value = '';

        // Submit the form to refresh the page
        document.querySelector('form').submit();
    }
</script>
