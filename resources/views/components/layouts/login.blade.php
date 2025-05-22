<div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }

            .login-container {
                border-radius: 15px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                width: 100%;
                margin-top: 35px;
                padding: 20px 50px;
                background-color: #fff;
            }

            .button-login {
                text-Align: center;
                color: #f4f4f4;
                text-Decoration: none;
                padding: 3px 0px;
                margin-top: 15px;
                background-Color: #1a8068;
                border-Radius: 10px;
                border: 2px solid black;
                display: inline-block;
                width: 100%;
            }

            :hover.button-login {
                background-color: #135e4d;
                color: #f4f4f4;
                text-decoration: none;
            }
        </style>
    </head>

    <body>
        {{ $slot }}

        

        <!-- forgot password -->
        <div wire:ignore.self class="modal fade" id="forgotPassword" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Forgot Password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" wire:model="email" value="{{@old('email')}}">
                                @error('email')
                                    <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-target="#editPassword">Next</button>
                    </div>
                </div>
            </div>
        </div>

        <div wire:ignore.self class="modal fade" id="editPassword" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Forgot Password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" wire:model="password" value="{{@old('password')}}">
                                @error('password')
                                    <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click="update" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

    </html>
</div>