<div>
    <h1>Add new User</h1>

    <form action="adduser" method="post">
        @csrf
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
            <h4>City</h4>
            <select name="city" id="">
                <option value="Delhi">Delhi</option>
                <option value="Snr">SNR</option>
                <option value="Noida">Noida</option>
                <option value="Gurgaon">Gurgaon</option>
            </select>
        </div>
        <div>
            <h4>Age</h4>
            <input type="range" name="age" min="18" max="100">
        </div>
        <br></br>
        <button>Add New User</button>
    </form>
</div>
