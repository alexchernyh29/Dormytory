@extends('main')

@section('content')
    <div class="promo">
        <div class="promo_text">
            <p class="text">MY DORM – это простой и удобный WEB-сервис для анализа и моделирования заселенности общежития. Данный сервис значительно облегчает работу коменданта, он позволяет заселять, выселять и переселять студентов пользуясь интерактивной схемой секций общежития. Также с помощью этого продукта вы можете быстро узнать информацию о любом студенте проживающем в общежитии.</p>
            <img src="../images/1.png" class="img-1">
        </div>
        <div class="card-list">
            <div class="card-item">
                <img src="../images/2.png" class="img-2">
                <a href="{{route('room.index')}}" class="btn-card">Комнаты</a>
            </div>
            <div class="card-item">
                <img src="../images/3.png" class="img-2">
                <a href="{{route('students.index')}}" class="btn-card">Студенты</a>
            </div>
            <div class="card-item">
                <img src="../images/4.png" class="img-2">
                <a href="/tower" class="btn-card">Секции</a>
            </div>
        </div>
    </div>
@endsection
