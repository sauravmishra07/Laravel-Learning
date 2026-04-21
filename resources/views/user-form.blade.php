<div>
    <h1>Add new user form</h1>

   <form action="{{ route('adduser') }}" method="POST">
    @csrf

        <!-- Skills (Checkboxes) -->
        <div>
            <label>Skills:</label><br>

            <input type="checkbox" name="skills[]" value="PHP" id="php"> <label for="php">PHP</label> 
            <input type="checkbox" name="skills[]" value="Laravel" id="laravel"> <label for="laravel">Laravel</label>
            <input type="checkbox" name="skills[]" value="JavaScript" id="js"> <label for="js">Javascript</label> 
            <input type="checkbox" name="skills[]" value="Python" id="py"> <label for="py">Python</label>
        </div>

        <br>

        <!-- Gender (Radio Buttons) -->
        <div>
            <label>Gender:</label><br>

            <input type="radio" name="gender" value="male" id="male"> <label for="male">Male</label>
            <input type="radio" name="gender" value="female" id="female"> <label for="female">Female</label>
            <input type="radio" name="gender" value="other" id="other"> <label for="other">Others</label>
        </div>

        <br>

        <!-- Age (Range Slider) -->
        <div>
            <label>Age:</label><br>

            <input type="range" name="age" min="18" max="60" value="25" 
                   oninput="this.nextElementSibling.value = this.value">
            <output>25</output>
        </div>

        <br>

        <!-- City (Dropdown) -->
        <div>
            <label>City:</label><br>

            <select name="city">
                <option value="">Select City</option>
                <option value="Delhi">Delhi</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Chennai">Chennai</option>
            </select>
        </div>

        <br>

        <button type="submit">Submit</button>
    </form>
</div>