<?php

use App\Models\Contact;

$contact = Contact::findorfail($id);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>{{ $contact->first_name }} {{ $contact->last_name }}</h1>

    <p>Email: {{ $contact->email }}</p>
    <p>City: {{ $contact->city }}</p>
    <p>Country: {{ $contact->country }}</p>
    <p>Job Title: {{ $contact->job_title }}</p>
</body>

</html>
