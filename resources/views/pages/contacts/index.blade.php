<?php

use App\Models\Contact;

$contacts = Contact::all();

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
    <h1>Contacts 123</h1>
    <table class="table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>City</th>
                <th>Country</th>
                <th>Job Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->first_name }}</td>
                    <td>{{ $contact->last_name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->city }}</td>
                    <td>{{ $contact->country }}</td>
                    <td>{{ $contact->job_title }}</td>
                    <td>
                        <a href="{{ URL('contacts/show', $contact->id) }}" class="btn btn-success">Show</a>
                        <a href="{{ URL('contacts/edit', $contact->id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ URL('contact/destroy', $contact->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-success">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
