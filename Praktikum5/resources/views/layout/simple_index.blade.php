{{-- Kode program untuk tampilan daftar buku  --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book List</title>
</head>
<body>
    <div style="background: #388BF2; font-size: 24px; color: white">
        Simple library app
    </div>
    
    <div style="margin-top: 20px; margin-bottom: 20px">
        <table border="1">
            <a href="/books/add"> Add new book</a>
    
            <thead>
                <td> No </td>
                <td> Title </td>
                <td> Author </td>
                <td> Publication </td>
                <td> Year </td>
                <td colspan="2"> Action </td>
            </thead>
            <tbody>
                @foreach($books as $index => $book)
                    <tr>
                        <td> {{ $index + 1 }}</td>
                        <td> <a href="{{ url("/books", $book->id) }}" > {{ $book->title }} </a> </td>
                        <td> {{ $book->author }} </td>
                        <td> {{ $book->publication }} </td>
                        <td> {{ $book->year }}</td>
                        <td> <a href="{{ url("/books/edit", $book->id) }}"> Edit </a> </td>
                        <td>
                            <form method="POST" action="/books/{{$book->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
    
                                <div>
                                    <input type="submit" value="Delete">
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div style="background: #31B057; font-size: 20px; color: white">
        Created with love and willingness to learn
    </div>
</body>
</html> 


{{-- Kode program untuk tampilan form penambahan buku --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add book</title>
</head>
<body>
    <div style="background: #388BF2; font-size: 24px; color: white">
        Simple library app
    </div>
    
    <div style="margin-top: 20px; margin-bottom: 20px">
        <h3> Please fill the book detail </h3>
        <div>
            <form method="post" action="{{ url("/books") }}">
                {{ csrf_field() }}
                <div>
                    <label>
                        Title
                        <input name="title"/>
                    </label>
                </div>
    
                <div>
                    <label>
                        Publication
                        <input name="publication"/>
                    </label>
                </div>
    
                <div>
                    <label>
                        Author
                        <input name="author"/>
                    </label>
                </div>
    
                <div>
                    <label>
                        Year
                        <input name="year" type="date"/>
                    </label>
                </div>
    
                <button type="submit"> Add </button>
            </form>
        </div>
    </div>
    
    <div style="background: #31B057; font-size: 20px; color: white">
        Created with love and willingness to learn
    </div>
</body>
</html>

{{-- Kode program untuk tampilan detail buku --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Detail<</title>
</head>
<body>
    <div style="background: #388BF2; font-size: 24px; color: white">
        Simple library app
    </div>
    
    <div style="margin-top: 20px; margin-bottom: 20px">
        <a href="/books"> Book list </a>
    
        <p> Here is the book detail </p>
        <p> Title <b> {{ $book->title }} </b> </p>
        <p> Publication <b> {{ $book->publication }} </b> </p>
        <p> Author <b> {{ $book->author }} </b> </p>
        <p> Year <b> {{ $book->year }} </b> </p>
    </div>
    
    <div style="background: #31B057; font-size: 20px; color: white">
        Created with love and willingness to learn
    </div>
</body>
</html>

{{-- Kode program untuk tampilan form pengubahan data buku --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit book</title>
</head>
<body>
        <div style="background: #388BF2; font-size: 24px; color: white">
            Simple library app
        </div>
        
        <div style="margin-top: 20px; margin-bottom: 20px">
            <a href="/books"> Book list </a>
        
            <h3> Please change the data you want yo update </h3>
            <div>
                <form method="post" action="{{ url("/books", $book->id) }}">
                    {{ method_field('PUT') }}
                    <div>
                        <label>
                            Title
                            <input name="title" value="{{ $book->title }}"/>
                        </label>
                    </div>
        
                    <div>
                        <label>
                            Publication
                            <input name="publication" value="{{ $book->publication }}"/>
                        </label>
                    </div>
        
                    <div>
                        <label>
                            Author
                            <input name="author" value="{{ $book->author }}"/>
                        </label>
                    </div>
        
                    <div>
                        <label>
                            Year
                            <input name="year" type="date" value="{{ $book->year }}"/>
                        </label>
                    </div>
        
                    <button type="submit"> Update </button>
                </form>
            </div>
        </div>
        
        <div style="background: #31B057; font-size: 20px; color: white">
            Created with love and willingness to learn
        </div>
</body>
</html> --}}