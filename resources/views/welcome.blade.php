<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Technical Test</title>
</head>

<body>
    @include('partials.navbar')
<div class="row">

    @foreach($news['articles'] as $article)
    <div class="cold-sm-3 mr-3 ml-3">
    <div class="card mt-3 mb-3" style="width: 18rem;">
    <img src="{{ $article['urlToImage'] }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $article['title'] }}</h5>
        <p class="card-text">{{ $article['author'] }}</p>
        <p class="card-text">{{ $article['description'] }}</p>
        <p class="card-text"><a href="{{ $article['url'] }}" target="_blank">Read More</a></p>
    </div>
    </div>
    </div>
    @endforeach




</div>

    @include('partials.footer')
</body>

</html>
