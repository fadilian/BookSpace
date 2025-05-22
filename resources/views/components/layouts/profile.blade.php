<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0 auto;
        }

        navbar {
            position: sticky;
            top: 0;
            z-Index: 1000;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-Content: space-between;
            padding: 10px 50px;
            box-Shadow: 0 7px 10px rgba(0, 0, 0, 0.1);
        }

        .button {
            text-Align: center;
            color: black;
            text-Decoration: none;
            padding: 3px 0px;
            margin: 0px 10px;
            background-color: #f4f4f4;
            border-Radius: 10px;
            border: 2px solid black;
            display: inline-block;
            width: 150px;
        }

        :hover.button {
            background-color: #cccccc;
            text-decoration: none;
            color: black;
        }

        .button2 {
            text-Align: center;
            color: #f4f4f4;
            text-Decoration: none;
            padding: 3px 0px;
            margin: 0px 10px;
            background-Color: #d30000;
            border-Radius: 10px;
            border: 2px solid black;
            display: inline-block;
            width: 150px;
        }

        :hover.button2 {
            background-color: #b80f0a;
            color: #f4f4f4;
            text-decoration: none;
        }

        .button-edit {
            text-Align: center;
            color: #f4f4f4;
            text-Decoration: none;
            padding: 3px 0px;
            margin: 0px 10px;
            background-color: #1a8068;
            border-Radius: 10px;
            border: 2px solid black;
            display: inline-block;
            width: 150px;
        }

        :hover.button-edit {
            background-color: #135e4d;
        }

        .main-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100%;
            width: 90%;
            margin: 0 auto;
        }

        .tittle {
            margin-top: 40px;
            margin-bottom: 20px;
            background-color: #fff;
            text-align: center;
            width: 100%;
        }

        .card-profile {
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            margin-bottom: 20px;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: #fff;
            text-align: center;
        }

        .card-inside {
            width: 100%;
        }

        .card-history {
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            margin-bottom: 20px;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: #fff;
            text-align: center;
        }
    </style>
    @livewireStyles
</head>

<body>
    <navbar>
        <div>
            <img src="{{asset('assets/bookspace-icon.png')}}" alt="Library Logo" height="100px">
        </div>
        <div>
            <a href="{{ route('homepage') }}" class="button">HOME</a>
            <button class="button-edit" data-toggle="modal" data-target="#editPage" wire:click="edit">EDIT</button>
            <a href="{{ route('logout') }}" class="button2" onclick="return confirmLogout(event)">LOGOUT</a>
        </div>
    </navbar>


    {{$slot}}

    <script>
        function confirmLogout(event) {
            event.preventDefault(); // Mencegah tindakan default (navigasi langsung)
            const confirmed = confirm("Are you sure you want to logout?");
            if (confirmed) {
                // Jika user mengonfirmasi, lanjutkan logout
                window.location.href = event.target.href;
            }
            // Jika tidak, tidak ada tindakan
            return false;
        }
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();

        document.querySelector('.menu-toggle').addEventListener('click', function () {
            document.querySelector('.sidebar').classList.toggle('open');
        });
    </script>
    @livewireScripts
</body>

</html>