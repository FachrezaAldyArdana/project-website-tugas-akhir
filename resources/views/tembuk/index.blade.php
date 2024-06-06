<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dashboard</title>
    <style>
        body {
            display: flex;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f5f7;
        }
        .sidebar {
            width: 250px;
            height:750px;
            background-color: #2d2f3e;
            color: white;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            font-family: Times New Roman;
            display: block;
        }
        .sidebar-header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .sidebar-menu {
            list-style-type: none;
            padding: 0;
        }
        .sidebar-menu li {
            margin: 10px 0;
        }
        .sidebar-menu a {
            color: white;
            text-decoration: none;
        }
        .main-content {
            flex-grow: 1;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .welcome-message {
            font-size: 24px;
            color: grey;
            padding: 20px;
            flex-grow: 1;
            margin: 0 10px;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);

        }
        .user-menu {
            display: flex;
            align-items: center;
        }
        .user-icon {
            font-size: 24px;
            margin-right: 10px;
        }
        .summary {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .summary-box {
            background-color: #ffffff;
            padding: 20px;
            flex-grow: 1;
            margin: 0 10px;
            text-align: center;
            font-size: 18px;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .earnings-summary {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .stats div {
            text-align: center;
        }
        .growth {
            display: flex;
            justify-content: space-between;
        }
        .styled-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 18px;
        min-width: 400px;
        width: 80%;
        
        margin: auto;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .styled-table thead tr {
        background-color: grey;
        color: #ffffff;
        text-align: left;
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }

    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

    .styled-table tbody tr.active-row {
        font-weight: bold;
        color: #009879;
    }

    @media (max-width: 600px) {
        .styled-table thead {
            display: none;
        }
        .styled-table, .styled-table tbody, .styled-table tr, .styled-table td {
            display: block;
            width: 100%;
        }
        .styled-table tr {
            margin-bottom: 15px;
        }
        .styled-table td {
            text-align: right;
            padding-left: 50%;
            position: relative;
        }
        .styled-table td::before {
            content: attr(data-label);
            position: absolute;
            left: 0;
            width: 50%;
            padding-left: 15px;
            font-weight: bold;
            text-align: left;
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

}

    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">Perpustakaan Online</div>
        <ul class="sidebar-menu">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="/create">Tambah Buku</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="header">
            <div class="welcome-message">Main Dashboard<br>Welcome Admin, everything looks great.</div>
            <div class="user-menu">
                <div class="user-icon">👤</div>
                <div class="user-name">Admin</div>
                <!-- <div class="user-name">Admin</div> -->
               
            </div>
        </div>
        
        <div class="earnings-summary">
            <h2>List Buku</h2>
            <div class="stats">
                <table class="styled-table">
                    <thead>
                        <th>NO</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Tahun Terbit</th>
                        <th>Genre</th>
                        <th>Ubah</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @foreach ($tembuk as $b)
                        <tr>
                            
                            <td>{{$b->id}}</td>
                            <td>{{$b->Judul_Buku}}</td>
                            <td>{{$b->Penulis}}</td>
                            <td>{{$b->Tahun_Terbit}}</td>
                            <td>{{$b->Genre}}</td>
                            <td><a href="/dashboard/{{$b->id}}/edit"><button type="button" class="btn btn-outline-warning">Edit</button></a></td>
                            <td>
                                <form action="/dashboard/{{$b->id}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" class="btn btn-outline-danger">
                                </form>
                            </td>
                            

                  
                        </tr>
                        
                        @endforeach
                        
                    </tbody>
                

                </table>
               

            </div>
                
        </div>
    </div>
</body>
</html>
