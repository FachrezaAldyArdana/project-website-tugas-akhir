<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Perubahan Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        

        
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Pengubah Buku</h2>
        <form action="/dashboard/{{$tembuk->id}}" method="POST">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="judul">Judul Buku:</label>
                <input type="text" id="judul" name="judul_Buku" value="{{$tembuk->Judul_Buku}}">
            </div>
            <div class="form-group">
                <label for="penulis">Penulis:</label>
                <input type="text" id="penulis" name="Penulis" value="{{$tembuk->Penulis}}">
            </div>
            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit:</label>
                <input type="text"  name="Tahun_Terbit" value="{{$tembuk->Tahun_Terbit}}" >
            </div>
            
            <div class="form-group">
                <label for="tahun_terbit">Genre:</label>
                <input type="text"  name="Genre" value="{{$tembuk->Genre}}" >
            </div>
            
            <button type="submit" class="btn btn-warning">Edit</button>
        </form>
    </div>
</body>
</html>
