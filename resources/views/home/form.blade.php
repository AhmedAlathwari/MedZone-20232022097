<form action="/save" method="POST">

    @csrf

    <input type="text"
           name="first_name"
           placeholder="First Name">

    <br><br>

    <input type="text"
           name="last_name"
           placeholder="Last Name">

    <br><br>

    <button type="submit">
        Save
    </button>

</form>