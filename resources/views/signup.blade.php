<!DOCTYPE html>
<html>
    <head>
        <title>Signup Visitor</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/style.css')}}" rel="stylesheet" type="text/css"}}
    </head>
    <body>
        <div class="container">
            <div class="content">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="/signup" method="POST">
                    <div class="form-group">
                        <label>Name: (*)</label>
                        <input type="text" name="name" class="textfield">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                    <div class="form-group">
                        <label>Email: (*)</label>
                        <input type="text" name="email" class="textfield">
                    </div>
                    <div class="form-group">
                        <label>Phone: </label>
                        <input type="text" name="phone" class="textfield">
                    </div>
                    <div class="form-group">
                        <label>Occupation: </label>
                        <input type="text" name="occupation" class="textfield">
                    </div>
                    <div class="form-group">
                       <input type="submit" value="Signup" class="btn-submit">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
