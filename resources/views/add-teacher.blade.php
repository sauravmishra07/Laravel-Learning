<div style="width: 100%; display: flex; justify-content: center; padding: 20px; background-color: #ecf0f1;">
    <div style="width: 400px; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <h2 style="text-align: center; color: #34495e; margin-bottom: 20px;">Add Teacher Form</h2>

        <form style="display: flex; flex-direction: column;" action="" method="POST">
            @csrf

            <!-- Name Field -->
            <input type="text" name="name" placeholder="Enter Name" style="padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px; outline: none; transition: border-color 0.3s;">
            
            <!-- Email Field -->
            <input type="email" name="email" placeholder="Enter Email" style="padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px; outline: none; transition: border-color 0.3s;">
            
            <!-- Phone Field -->
            <input type="text" name="phone" placeholder="Enter Phone" style="padding: 10px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px; outline: none; transition: border-color 0.3s;">

            <!-- Submit Button -->
            <button type="submit" style="padding: 12px 20px; font-size: 16px; color: white; background-color: #3498db; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s;">
                Add Teacher
            </button>
        </form>
    </div>
</div>

<!-- CSS for Input Hover Effects and Button Hover -->
<style>
    /* Input field focus effect */
    input:focus {
        border-color: #3498db;
        box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
    }

    /* Button hover effect */
    button:hover {
        background-color: #2980b9;
    }
</style>