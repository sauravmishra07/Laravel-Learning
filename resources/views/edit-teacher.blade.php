<div style="width: 100%; display: flex; justify-content: center; padding: 20px; background-color: #ecf0f1;">
    <div style="width: 400px; padding: 30px; background-color: white; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <h1 style="text-align: center; color: #34495e; margin-bottom: 20px;">Edit Teacher Information</h1>

        <form action="{{ route('teacher.update', $data->id) }}" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
            @csrf
            @method('PUT') <!-- This tells Laravel to treat the request as a PUT request -->

            <!-- Name Field -->
            <input type="text" name="name" value="{{ $data->name }}" placeholder="Edit Name" style="padding: 10px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px; outline: none; transition: border-color 0.3s;">
            
            <!-- Email Field -->
            <input type="email" name="email" value="{{ $data->email }}" placeholder="Edit Email" style="padding: 10px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px; outline: none; transition: border-color 0.3s;">
            
            <!-- Phone Field -->
            <input type="text" name="phone" value="{{ $data->phone }}" placeholder="Edit Phone" style="padding: 10px; font-size: 14px; border: 1px solid #ccc; border-radius: 4px; outline: none; transition: border-color 0.3s;">
            
            <div style="display: flex; justify-content: space-between;">
                <!-- Update Button -->
                <button type="submit" style="padding: 12px 20px; font-size: 16px; color: white; background-color: #3498db; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s;">
                    Update
                </button>

                <!-- Cancel Link -->
                <a href="/list" style="text-decoration: none; color: #e74c3c; padding: 12px 20px; border: 1px solid #e74c3c; border-radius: 4px; font-size: 16px; line-height: 36px; cursor: pointer; transition: background-color 0.3s;">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>

<!-- Additional Styling for Input Focus and Button Hover -->
<style>
    /* Input focus effect */
    input:focus {
        border-color: #3498db;
        box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
    }

    /* Button hover effect */
    button:hover {
        background-color: #2980b9;
    }

    /* Cancel link hover effect */
    a:hover {
        background-color: #ecf0f1;
    }
</style>