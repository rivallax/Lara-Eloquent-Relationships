<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LARA || RELATIONSHIPS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
        }

        .content {
            flex: 1;
        }

        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #0d6efd;
            color: white;
        }

        .footer {
            background-color: #0d6efd;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        .footer a {
            color: #ffc107;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="container my-5">
            <div class="card">
                <div class="card-header text-center bg-secondary">
                    <h3 class="mb-0 text-warning">Laravel Eloquent Relationship</h3>
                    <p class="mb-0">MANNY To MANNY Example</p>
                </div>
                <div class="card-body">
                    <h4 class="text-center mb-4 text-primary">TABLE USER  <strong>|| MANNY TO MANNY & ONE TO ONE </strong></h4>
                    <table class="table table-bordered table-hover">
                        <thead class="table-primary text-center">
                            {{-- SEED USER --}}
                            <tr>
                                <th>Nama User</th>
                                <th>Nomor Telepon</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>
                                    @if($user->phone) 
                                        {{ $user->phone->phone }}
                                    @else 
                                        No phone
                                    @endif<td>
                                        @foreach ($user->roles as $role)
                                            <button class="btn btn-sm btn-primary me-2">{{ $role->name }}</button>
                                        @endforeach
                                    </td>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- footer style --}}
    <footer class="footer">
        <p>© 2025 <strong>Muhammad Rivaldi akbar</strong>. All rights reserved. Visit us at <a href="https://www.santrikoding.com">rival</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
