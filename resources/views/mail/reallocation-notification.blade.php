<x-mail::message>
    <h1>Student Reallocation Notification</h1>
    <p>Dear {{ $oldLecturer->user->name }},</p>
    <p>The following student has been reallocated to another lecturer:</p>
    <p>Student Name: {{ $student->user->name }}</p>
    <p>New Lecturer: {{ $newLecturer->user->name }}</p>
    <p>Thank you for your previous supervision.</p>

    <p>If you have any questions, please contact the administration.</p>
    <x-mail::button :url="''">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
