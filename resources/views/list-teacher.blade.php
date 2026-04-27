<div
    style="padding: 20px; font-family: Arial, sans-serif; background-color: #f4f6f9; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <h1 style="text-align: center; color: #2C3E50; margin-bottom: 20px;">List All Teachers</h1>

    <table
        style="width: 100%; border-collapse: collapse; margin-top: 20px; border-radius: 8px; overflow: hidden; background-color: white;">
        <thead>
            <tr style="background-color: #34495E; color: white; text-align: left;">
                <th style="padding: 15px; font-size: 16px;">Name</th>
                <th style="padding: 15px; font-size: 16px;">Email</th>
                <th style="padding: 15px; font-size: 16px;">Phone</th>
                <th style="padding: 15px; font-size: 16px;">Created At</th>
                <th style="padding: 15px; font-size: 16px;">Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Teachers as $teacher)
                <tr style="border-bottom: 1px solid #ddd; transition: background-color 0.3s;">
                    <td style="padding: 10px; text-align: left;">{{ $teacher->name }}</td>
                    <td style="padding: 10px; text-align: left;">{{ $teacher->email }}</td>
                    <td style="padding: 10px; text-align: left;">{{ $teacher->phone }}</td>
                    <td style="padding: 10px; text-align: left;">{{ $teacher->created_at }}</td>
                    <<td style="padding: 10px; text-align: left;">
                        <!-- Delete Button -->
                        <a href="{{ 'delete/' . $teacher->id }}"
                            style="text-decoration: none; color: white; background-color: #e74c3c; padding: 10px 20px; border-radius: 5px; font-weight: bold; 
              transition: background-color 0.3s ease, transform 0.3s ease; display: inline-block; margin-right: 10px; 
              box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); cursor: pointer;">
                            Delete
                        </a>

                        <!-- Edit Button -->
                        <a href="{{ 'edit/' . $teacher->id }}"
                            style="text-decoration: none; color: white; background-color: #3498db; padding: 10px 20px; border-radius: 5px; font-weight: bold; 
              transition: background-color 0.3s ease, transform 0.3s ease; display: inline-block; 
              box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); cursor: pointer;">
                            Edit
                        </a>
                        </td>

                        
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Add a responsive design for small screens -->
<style>
    @media (max-width: 768px) {

        table,
        th,
        td {
            display: block;
            width: 100%;
        }

        th {
            text-align: center;
        }

        td {
            padding: 12px 20px;
        }

        td:before {
            content: attr(data-label);
            font-weight: bold;
            display: inline-block;
            width: 120px;
        }

        td a {
            display: inline-block;
            width: 100%;
            text-align: center;
        }
    }

    /* Hover effect for rows */
    table tbody tr:hover {
        background-color: #f1f1f1;
    }

    /* Optional: Button hover effect */
    a:hover {
        background-color: #c0392b;
    }
</style>
