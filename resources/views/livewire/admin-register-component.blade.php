<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main {
            display: flex;
            margin: 0 auto;
            align-items: center;
            gap: 100px;
        }

        .button {
            text-Align: center;
            color: #f4f4f4;
            text-Decoration: none;
            padding: 3px 0px;
            background-color: #1a8068;
            border-Radius: 10px;
            border: 2px solid black;
        }

        :hover.button {
            background-color: #135e4d;
        }
    </style>
</head>

<body>
    <div class="main">
        <div clas="text">
            <h1>Hello, Admin!</h1>
            Welcome to the register page. Please fill the form correctly >.<
        </div>
        <div clas="register">
            <div>
                <h1>Register</h1>
            </div>
            <form wire:submit.prevent="register">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" wire:model="name" value="{{ old('name') }}" placeholder="insert name">
                    @error('name')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" wire:model="email" value="{{ old('email') }}" placeholder="email@gmail.com">
                    @error('email')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" wire:model="password"
                        value="{{ old('password') }}" placeholder="insert password">
                    @error('password')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="button" style="width:100%;">Register</button>
            </form>
        </div>

    </div>

</body>

</html>