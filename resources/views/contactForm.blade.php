<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <h4>Contact us</h4> 
                <form action="{{route('send.email')}}" method="POST">
                    @csrf

                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            {{Session::get('error')}}
                        </div>
                    @endif
                    @if(Session::has('success'))
                        <div class="alert alert-succes">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{old('name')}}">
                        @error('name')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email" value="{{old('email')}}">
                        @error('email')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                    </div>

                    
                    <div class="form-group">
                        <label for="">Subject</label>
                        <input type="text" class="form-control" name="subject" placeholder="Enter subject" value="{{old('subject')}}">
                        @error('subject')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Message</label>
                        <textarea type="text-area" class="form-control" name="message" cols="4" row="4" placeholder="Enter Message" value="{{old('message')}}"></textarea>
                        @error('message')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                    </div>

                    <button class="btn btn-primary">send</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>