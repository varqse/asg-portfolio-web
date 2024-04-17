@extends('layout.master')
@section('container')
<head>
    <style>
        .box {
            max-width: 800px; /* Menyesuaikan lebar maksimum */
            margin: 50px auto; /* Menengahkan kotak dan memberi ruang atas */
            padding: 40px; /* Menambahkan ruang di dalam kotak */
            background-color: #B2B2B2; /* Warna latar belakang */
            border: 15px solid #161A30; /* Warna border */
            border-radius: 15px;
            overflow: hidden; /* Mengatasi lekukan border */
        }

        .box label {
            display: block;
            margin-bottom: 15px;
        }

        .box input[type="text"],
        .box textarea {
            width: calc(100% - 20px); /* Mengurangi lebar input dengan padding */
            padding: 10px;
            margin-bottom: 20px; /* Menambahkan ruang antara input */
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .box input[type="submit"] {
            width: 100%; /* Memenuhi lebar kotak */
            padding: 10px 20px;
            background-color: #161A30; /* Warna tombol submit */
            color: #fff; /* Warna teks */
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .box input[type="submit"]:hover {
            background-color: #333; /* Warna tombol submit saat dihover */
        }

    </style>
</head>
<div class="box">
    <form action="{{ route('update-profile') }}" method="POST">
        @csrf
        <input type="hidden" name="username" value="{{ $data->username }}">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{ $data->name }}"><br>
        <label for="fullname">Full Name:</label><br>
        <input type="text" id="fullname" name="fullname" value="{{ $data->fullname }}"><br>
        <label for="text">Text:</label><br>
        <textarea id="text" name="text">{{ $data->text }}</textarea><br><br>
        <input type="submit" value="Submit">
    </form> 
</div>
@stop
