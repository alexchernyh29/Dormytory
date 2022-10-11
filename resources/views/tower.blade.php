@extends('main')

@section('content')
    <div class="tower-wrap">
        <div class="tower-item">
            <img src="../images/tower-img-1.png" class="tower-img-1">
            <a href="/sectionleft" class="tower-btn">Левая башня</a>
        </div>
        <div class="tower-item">
            <img src="../images/tower-img-2.png" class="tower-img-1">
            <a href="/sectionright" class="tower-btn">Правая башня</a>
        </div>
    </div>
@endsection
