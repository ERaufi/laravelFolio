<!DOCTYPE html>
<html>

<head>
    <title>Create Contact</title>
</head>

<body>
    <h1>Create Contact</h1>

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name">
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <label for="city">City:</label>
        <input type="text" id="city" name="city">
        <label for="country">Country:</label>
        <input type="text" id="country" name="country">
        <label for="job_title">Job Title:</label>
        <input type="text" id="job_title" name="job_title">
        <button type="submit">Create</button>
    </form>
</body>

</html>
