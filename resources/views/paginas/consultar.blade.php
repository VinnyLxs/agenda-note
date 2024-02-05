<x-layout title="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <div class="container">
        @foreach($dados as $dado)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{$dado->cadastrar}}</h5>
                    <p class="card-text">{{$dado->tarefa}}</p>
                    <p class="card-text"><small class="text-muted">{{$dado->data_hora}}</small></p>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>