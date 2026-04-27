<div style="padding: 20px; font-family: Arial, sans-serif;">
    <h1 style="text-align: center; color: #2C3E50;">List all Teachers</h1>

    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
            <tr style="background-color: #34495E; color: white; text-align: left;">
                <th style="padding: 10px; font-size: 16px;">Name</th>
                <th style="padding: 10px; font-size: 16px;">Email</th>
                <th style="padding: 10px; font-size: 16px;">Phone</th>
                <th style="padding: 10px; font-size: 16px;">Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Teachers as $teacher)
                <tr style="border-bottom: 1px solid #ddd;">
                    <td style="padding: 10px; text-align: left;">{{ $teacher->name }}</td>
                    <td style="padding: 10px; text-align: left;">{{ $teacher->email }}</td>
                    <td style="padding: 10px; text-align: left;">{{ $teacher->phone }}</td>
                    <td style="padding: 10px; text-align: left;">{{ $teacher->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>