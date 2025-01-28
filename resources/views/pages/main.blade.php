@extends ('layout/app')

@section ('style')
	<link rel="stylesheet" href="{{ URL::asset('style/style.css') }}">
@endsection

@section ('script')
	<script src="{{ URL::asset('scripts/script.js') }}" charset="utf-8"></script>
@endsection

@section ('content')


<div class="app-wrapper">
    <div class ="input-group" action="DogController.php" method="POST">
        <input type="text" class="search-box" id="search-box"> </input>
        <button type="submit" class="generate-dog">Generate Dog</button>
    </div>

    <!--Image will be placed below-->
    <div id="image-container">

    </div>
</div>
@endsection