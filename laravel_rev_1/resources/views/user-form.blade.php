<div>
    <h2>Add new User</h2>
    <form action="adduser" method="POST">
        @csrf
        <div>
            <input type="text" placeholder="Enter Username" name="username">
        </div>
        <br>
        <div>
            <input type="text" placeholder="Enter User Email" name="email">
        </div>
        <br>
        <div>
            <input type="text" placeholder="Enter User City" name="city">
        </div>
        <br>
        <button>Add New User</button>
    </form>
</div>

{{-- used post request to send data to the controller function via the post route for the controller we made and the @csrf token in this form is a token need to bypass the laravel security to send its data. --}}