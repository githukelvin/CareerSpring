<x-mail::message>
    <h1>New Student Allocation</h1>
    <p>Dear {{ $lecturer->user->name }},</p>
    <p>You have been allocated a new student:</p>
    <p>Student Name: {{ $student->user->name }}</p>
    <p>Thank you for your supervision.</p>


    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
