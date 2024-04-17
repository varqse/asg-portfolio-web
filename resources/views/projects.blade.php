@extends('layout.master')

@section('container')
<head>
    <style>
        .container {
            background: url('{{asset('img/binusmlg.jpeg')}}');
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
        }
        h2 {
            text-align: center;
        }
        #project-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between; /* Membuat jarak yang sama antar kotak proyek */
        }

        .project-box {
            max-width: 300px; /* Atur lebar maksimum kotak proyek */
            margin-top: 20px;
            margin-bottom: 20px;
            margin-right: 20px;
            padding: 20px;
            background-color: #B2B2B2;
            border: 5px solid #161A30;
            border-radius: 10px;
            box-sizing: border-box;
            word-wrap: break-word; /* Memaksa kata-kata untuk beralih ke baris baru jika melebihi lebar maksimum */
        }


        #add-project-form {
            max-width: 400px;
            margin-top: 20px;
            margin-bottom: 80px;
            padding: 20px;
            background-color: #B2B2B2;
            border: 5px solid #161A30;
            border-radius: 10px;
            box-sizing: border-box;
            flex-grow: 1; /* Memungkinkan kotak untuk menyesuaikan lebar */
        }



        .project-box h3 {
            margin-top: 0;
        }

        .project-box p {
            margin-bottom: 10px;
        }

        .project-box a {
            display: block;
            margin-bottom: 10px;
            word-break: break-all;
        }

        .delete-project {
            display: block;
            margin-top: 10px;
            background-color: #161A30;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>
<div class="container">
    <div>
        <h1>Projects</h1>
    </div>
    
            <!-- Daftar proyek -->
        <div id="project-list">
            @foreach($projects as $project)
                <div class="project-box">
                    <h3>{{ $project->title }}</h3>
                    <p>{{ $project->description }}</p>
                    <a href="https://{{ $project->link }}" target="_blank">Link</a>
                    <form action="{{ route('delete-project', ['id' => $project->id]) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-project">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>

        <!-- Form untuk menambahkan proyek baru -->
        <div id="add-project-form">
            <h2>Add New Project</h2>
            <form id="project-form" action="{{ route('add-project') }}" method="POST">
                @csrf
                <label for="title">Title:</label><br>
                <input type="text" id="title" name="title" required><br>
                <label for="description">Description:</label><br>
                <textarea id="description" name="description" required></textarea><br>
                <label for="link">Link:</label><br>
                <input type="text" id="link" name="link" required><br>
                <input type="submit" value="Add Project">
            </form>
        </div>
    
    
</div>
@stop
