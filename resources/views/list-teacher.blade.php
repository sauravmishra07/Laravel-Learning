<div
    style="padding: 20px; font-family: Arial, sans-serif; background-color: #f4f6f9; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">

    <h1 style="text-align: center; color: #2C3E50; margin-bottom: 20px;">
        List All Teachers
    </h1>

    <!-- SEARCH FORM -->
    <form action="search" method="get"
        style="display: flex; justify-content: center; margin-top: 20px;">

        <div style="display: flex; gap: 10px; background: #fff; padding: 10px;
                    border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">

            <input type="text"
                placeholder="Search teacher by name..."
                name="search"
                value="{{ @$search }}"
                style="padding: 10px 14px; width: 250px;
                       border: 1px solid #ccc; border-radius: 6px;
                       outline: none; font-size: 14px;">

            <button type="submit"
                style="padding: 10px 18px;
                       background-color: #3498db;
                       color: white;
                       border: none;
                       border-radius: 6px;
                       font-weight: bold;
                       cursor: pointer;">
                Search
            </button>

        </div>
    </form>

    <!-- BULK DELETE FORM -->
    <form action="{{ url('delete-multiple') }}" method="POST">
        @csrf

        <!-- DELETE SELECTED BUTTON -->
        <button type="submit"
            style="margin-top: 15px;
                   background-color: #e74c3c;
                   color: white;
                   padding: 10px 15px;
                   border: none;
                   border-radius: 6px;
                   cursor: pointer;">
            Delete Selected
        </button>

        <!-- TABLE -->
        <table
            style="width: 100%; border-collapse: collapse; margin-top: 20px;
                   border-radius: 8px; overflow: hidden; background-color: white;">

            <thead>
                <tr style="background-color: #34495E; color: white; text-align: left;">

                    <th style="padding: 15px; font-size: 16px;">
                        Select
                    </th>

                    <th style="padding: 15px; font-size: 16px;">Name</th>
                    <th style="padding: 15px; font-size: 16px;">Email</th>
                    <th style="padding: 15px; font-size: 16px;">Phone</th>
                    <th style="padding: 15px; font-size: 16px;">Created At</th>
                    <th style="padding: 15px; font-size: 16px;">Operations</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($Teachers as $teacher)
                    <tr style="border-bottom: 1px solid #ddd;">

                        <!-- CHECKBOX -->
                        <td style="padding: 10px;">
                            <input type="checkbox" name="ids[]" value="{{ $teacher->id }}">
                        </td>

                        <td style="padding: 10px;">{{ $teacher->name }}</td>
                        <td style="padding: 10px;">{{ $teacher->email }}</td>
                        <td style="padding: 10px;">{{ $teacher->phone }}</td>
                        <td style="padding: 10px;">{{ $teacher->created_at }}</td>

                        <td style="padding: 10px;">

                            <!-- DELETE -->
                            <a href="{{ 'delete/' . $teacher->id }}"
                                style="text-decoration: none; color: white; background-color: #e74c3c;
                                       padding: 8px 14px; border-radius: 5px;">
                                Delete
                            </a>

                            <!-- EDIT -->
                            <a href="{{ 'edit/' . $teacher->id }}"
                                style="text-decoration: none; color: white; background-color: #3498db;
                                       padding: 8px 14px; border-radius: 5px; margin-left: 5px;">
                                Edit
                            </a>

                        </td>

                    </tr>
                @endforeach
            </tbody>

        </table>

    </form>

    <!-- PAGINATION -->
    <div style="display:flex; justify-content:center; margin-top:20px;">
        {{ $Teachers->links() }}
    </div>

</div>

<!-- Add a responsive design for small screens -->
<style>
    .w-5.h-5 {
        width: 18px;
        height: 18px;
    }

    /* Optional improvement for pagination links */
    .pagination {
        display: flex;
        gap: 5px;
        list-style: none;
        padding: 0;
    }

    .pagination li {
        padding: 6px 10px;
        border-radius: 6px;
    }

    .pagination li a,
    .pagination li span {
        text-decoration: none;
        color: #2c3e50;
    }

    .pagination .active span {
        background: #3498db;
        color: white;
        padding: 6px 10px;
        border-radius: 6px;
    }

    .pagination li:hover {
        background: #ecf0f1;
    }

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
