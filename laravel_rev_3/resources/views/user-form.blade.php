<div>
    <h1>Add new User</h1>

    @if($errors->any())
    @foreach($errors->all() as $error)
    <div>
        {{$error}}
    </div>
    @endforeach
    @endif

    <form action="add-user" method="post">
        @csrf
        <div>
            {{-- every time we put something that is not validationg it resets the whole form here's the fix add the following to the value section --}}
            <input type="text" name="username" placeholder="Enter User Name" value="{{old('username')}}">
            <input type="text" name="email" placeholder="Enter User Email" value="{{old('email')}}">
            <input type="password" name="password" placeholder="Enter User Password" value="{{old('password')}}">
        </div>
        <div>
            <h4>User Skills</h4>
            <input type="checkbox" name="skill[]" value="PHP" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value="Node" id="node">
            <label for="node">Node</label>
            <input type="checkbox" name="skill[]" value="Java" id="java">
            <label for="java">Java</label>
        </div>
        <div>
            <h4>Gender</h4>
            <input type="radio" name="gender" value="Male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="Female" id="female">
            <label for="female">Female</label>
        </div>
        <div>
            <h4>Age</h4>
            <input type="range" name="age" min="18" max="100">
        </div>
        <br></br>
        <button>Add New User</button>
    </form>
</div>
