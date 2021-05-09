<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
        <link href="/css/main.css" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                <h5>Bible Study Request table</h5>
                </div>

                <table id="bsrequest" class="display">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full name</th>
                            <th>Email Address</th>
                            <th>Contact Number</th>
                            <th>Birthdate</th>
                            <th>Religious Affiliation</th>
                            <th>Bible Study Date</th>
                            <th>Bible Study Time</th>
                            <th>Bible Study Location / Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bsrequest as $bsrequest)
                        <tr>
                            <td style=" background-color: rgb(7, 8, 34);">{{ $bsrequest->id }}</td>
                            <td>{{ $bsrequest->fullname }}</td>
                            <td>{{ $bsrequest->email }}</td>
                            <td>{{ $bsrequest->contactnumber }}</td>
                            <td>{{ $bsrequest->birthdate }}</td>
                            <td>{{ $bsrequest->religion }}</td>
                            <td>{{ $bsrequest->bsdate }}</td>
                            <td>{{ $bsrequest->bstime }}</td>
                            <td>{{ $bsrequest->address }}</td>
                        </tr>
                        @endforeach
                    </tbody>    
                </table> 
                
                <a href="/">
                    <button type="submit" class="choice">HOMEPAGE</button>
                    </a>
                    <a href="/bible-study-request-form">
                    <button type="submit"class="choice">ANOTHER BIBLE STUDY REQUESTS FORM</button>
                  </a>

            </div>  
        </div>
        
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script>
        jQuery(document).ready(function(){
            jQuery('#bsrequest').DataTable();
        });
        </script>
    <footer>
            Copyright 2021 Jordan Earl Pascua
    </footer>
</html>

