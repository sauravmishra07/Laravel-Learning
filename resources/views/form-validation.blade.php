<div>
    <h1>Form Validations</h1>

    <!-- Show all errors at top (optional but useful) -->
    {{-- @if ($errors->any())
        <div style="color:red; margin-bottom:10px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form action="{{ route('formdata') }}" method="POST">
        @csrf

        <!-- Name -->
        <div>
            <label for="name">Name:</label><br>
            <input type="text" name="name" id="name" placeholder="Enter your name"
                value="{{ old('name') }}">

            @error('name')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>

        <br>

        <!-- Email -->
        <div>
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" placeholder="Enter your email"
                value="{{ old('email') }}">

            @error('email')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>

        <br>

        <!-- Gender -->
        <div>
            <label>Gender:</label><br>

            <input type="radio" name="gender" value="male" id="male"
                {{ old('gender') == 'male' ? 'checked' : '' }}>
            <label for="male">Male</label>

            <input type="radio" name="gender" value="female" id="female"
                {{ old('gender') == 'female' ? 'checked' : '' }}>
            <label for="female">Female</label>

            <input type="radio" name="gender" value="other" id="other"
                {{ old('gender') == 'other' ? 'checked' : '' }}>
            <label for="other">Other</label>

            @error('gender')
                <br>
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>

        <br>

        <!-- Skills -->
        <div>
            <label>Skills:</label><br>

            <input type="checkbox" name="skills[]" value="PHP"
                {{ is_array(old('skills')) && in_array('PHP', old('skills')) ? 'checked' : '' }}>
            <label>PHP</label>

            <input type="checkbox" name="skills[]" value="Laravel"
                {{ is_array(old('skills')) && in_array('Laravel', old('skills')) ? 'checked' : '' }}>
            <label>Laravel</label>

            <input type="checkbox" name="skills[]" value="JavaScript"
                {{ is_array(old('skills')) && in_array('JavaScript', old('skills')) ? 'checked' : '' }}>
            <label>JavaScript</label>

            <input type="checkbox" name="skills[]" value="Python"
                {{ is_array(old('skills')) && in_array('Python', old('skills')) ? 'checked' : '' }}>
            <label>Python</label>

            <br>

            @error('skills')
                <span style="color:red">{{ $message }}</span>
            @enderror

            @error('skills.*')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>

        <br>

        <button type="submit">Submit</button>
    </form>
</div>