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
    <h1>Edit Contact</h1>

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" value="{{ $contact->first_name }}">
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" value="{{ $contact->last_name }}">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $contact->email }}">
        <label for="city">City:</label>
        <input type="text" id="city" name="city" value="{{ $contact->city }}">
        <label for="country">Country:</label>
        <input type="text" id="country" name="country" value="{{ $contact->country }}">
        <label for="job_title">Job Title:</label>
        <input type="text" id="job_title" name="job_title" value="{{ $contact->job_title }}">
        <button type="submit">Update</button>
    </form>
</body>

</html>
