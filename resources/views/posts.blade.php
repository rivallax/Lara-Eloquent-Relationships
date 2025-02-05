<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LARA || RELATIONSHIPS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="icon" href="https://laravel.com/img/logomark.min.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" referrerpolicy="no-referrer" />
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
            background-color: purple;
            color: white;
        }

        .table thead {
            background-color: #e9ecef;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f3f5;
        }

        .comment-card {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
        }

        .comment-card .card-body {
            padding: 10px;
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
                <div class="card-header text-center">
                    {{-- MANNY EXAMPLE --}}
                    <h3 class="mb-0">Laravel Eloquent Relationship</h3>
                    <p class="mb-0">One To Many Example</p>
                </div>
                <div class="card-body">
                    <h4 class="text-center mb-4 text-secondary">
                        TABLE POST || <strong>ONE TO MANNY</strong>
                    </h4>
                    <table class="table table-bordered table-hover">
                        <thead class="text-center">
                            <tr>
                                <th>Judul Post</th>
                                <th>Komentar</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td class="align-middle">{{ $post->title }}</td>
                                <td>
                                    @foreach($post->comments()->get() as $comment)
                                    <div class="card comment-card shadow-sm mb-2">
                                        <div class="card-body">
                                            <i class="fa fa-comments text-primary me-2"></i>{{ $comment->comment }}
                                        </div>
                                    </div>
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <p>© 2025 <strong>SantriKoding</strong>. All rights reserved. Visit us at <a href="https://santrikoding.com">rival_ax06</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
