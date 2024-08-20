<x-mail::message>
    # Hello {{ $student->user->name }},

    We are pleased to inform you that you have been allocated a supervisor for your attachment. Below are the details:

    **Supervisor Name:** {{ $lecturer->user->name }}
    **Supervisor Email:** {{ $lecturer->user->email }}

    Please get in touch with your supervisor to discuss your attachment details and any further steps.

    <x-mail::button :url="''">
        Contact Supervisor
    </x-mail::button>

    Thank you,<br>
    {{ config('app.name') }}
</x-mail::message>
