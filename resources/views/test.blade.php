<!-- <!DOCTYPE html>
<html>
<head>
    <title>Users with Posts and Comments</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Users with Posts and Comments</h1>
    <table>
        <thead>
            <tr>
                <th>User</th>
                <th>Posts</th>
                <th>Comments</th>
                <th>Roles</th>
                <th>Tags</th>
                <th>Categories</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>
                        <ul>
                            @foreach ($user->posts as $post)
                                <li>{{ $post->title }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul>
                            @foreach ($user->posts as $post)
                                @foreach ($post->comments as $comment)
                                    <li>{{ $comment->body }} (Post: {{ $post->title }})</li>
                                @endforeach
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul>
                            @foreach ($user->roles as $role)
                                <li>{{ $role->name }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul>
                            @foreach ($user->posts as $post)
                                @foreach ($post->tags as $tag)
                                    <li>{{ $tag->name }} (Post: {{ $post->title }})</li>
                                @endforeach
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul>
                            @foreach ($user->posts as $post)
                                @if($post->category)
                                    <li>{{ $post->category->name }} (Post: {{ $post->title }})</li>
                                @endif
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>Users with Posts and Comments</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Users with Posts and Comments</h1>
    <table>
        <thead>
            <tr>
                <th>User</th>
                <th>Posts</th>
                <th>Comments</th>
                <th>Roles</th>
                <th>Tags</th>
                <th>Categories</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>
                        <ul>
                            @foreach ($user->posts as $post)
                                <li>{{ $post->title }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul>
                            @foreach ($user->posts as $post)
                                @foreach ($post->comments as $comment)
                                    <li>{{ $comment->body }} (Post: {{ $post->title }})</li>
                                @endforeach
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul>
                            @foreach ($user->roles as $role)
                                <li>{{ $role->name }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul>
                            @foreach ($user->posts as $post)
                                @foreach ($post->tags as $tag)
                                    <li>{{ $tag->name }} (Post: {{ $post->title }})</li>
                                @endforeach
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul>
                            @foreach ($user->posts as $post)
                                @if($post->category)
                                    <li>{{ $post->category->name }} (Post: {{ $post->title }})</li>
                                @endif
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

