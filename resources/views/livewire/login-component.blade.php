<div class="login-container">
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
    <div class="login-header">
        <img src="{{asset('assets/bookspace-icon.png')}}" alt="Library Logo" height="100px"
        style="display:block; margin:0 auto;">
    </div>
    <form wire:submit.prevent="proses">
        @if ($errors->has('login_error'))
            <div class="alert alert-danger">
                {{ $errors->first('login_error') }}
            </div>
        @endif
        <div class="form-group">
            <label for="email" class="form-label">Email address</label>
            <input type="text" wire:model="email" class="form-control" id="email" placeholder="Email Address">
            @error('email') 
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" wire:model="password" class="form-control" id="password" placeholder="Password">
            @error('password') 
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <!-- <a href="#" data-toggle="modal" data-target="#forgotPassword">*Forgot Password</a> -->
        </div>
        <button type="submit" class="button-login">Login</button>
    </form>
    <div class="text-center">
        Don't have an account?<a href="#" data-toggle="modal" data-target="#register"> Register</a>
    </div>

    <!-- Register -->
    <div wire:ignore.self class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" wire:model="name" value="{{@old('name')}}">
                            @error('name')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" wire:model="phone" value="{{@old('phone')}}">
                            @error('phone')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" wire:model="email" value="{{@old('email')}}">
                            @error('email')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
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
                    <button type="button" wire:click="register" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>


</div>

