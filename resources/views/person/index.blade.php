<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>slam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<h1>slam</h1>
<hr>
<div class="container">
    <div class="col-12">
        @foreach($persons as $person)
            <div class="row mb-2 pb-2" style="border-bottom: 1px solid #333;">
                <div class="col-1">{{$person->id}}</div>
                <div class="col-2">{{$person->first_name}}</div>
                <div class="col-2">{{$person->last_name}}</div>
                <div class="col-1">{{$person->age}}</div>
                <div class="col-2">{{$person->created_at->format("Y, M d")}}</div>
                <div class="col-2">{{$person->updated_at->format("y/m/d")}}</div>
                <div class="col-2">
                    <a class="btn btn-sm btn-warning" href="{{route("person.edit", $person)}}">Edit</a>
                    <a class="btn btn-sm btn-danger" href="{{route("person.destroy", $person)}}">Delete</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
