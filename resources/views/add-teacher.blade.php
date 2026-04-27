<div style="width: 400px; padding:10px">
    <h2>Add Teacher Form</h2>
    <form style="display: flex; flex-direction: column;" action="" method="POST">
        @csrf
        <input type="text" name='name' placeholder='Enter Name'>
        <input type="text" name='email' placeholder="Enter Email">
        <input type="text" name='phone' placeholder="Enter Phone">
        <br><br>
        <button>Add Teacher</button>
    </form>
</div>