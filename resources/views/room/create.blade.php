@extends('main')

@section('content')
    <div class="container">
        <h3>Добавление Комнаты!</h3>
        {!! Form::open(['route' => ['room.store']]) !!}
        <div class="form-group">
            {{Form::label('number', 'Номер комнаты')}}
            {{Form::text('number', null, ['placeholder'=> 'Введите номер комнаты', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('section', 'Башня')}}
            {{Form::text('section', null,['placeholder'=> 'Выберите Башню', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('place', 'Количество мест в Комнате')}}
            {{Form::text('place', null, ['placeholder'=> 'Введите количество мест', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('students_id', 'Выберите Студента')}}
            {{Form::select('students_id',  ['placeholder' => '', "onclick"=>"myFunc()"] + $students)}}
        </div>

        {{Form::submit('Добавить', ['class' => 'btn btn-success'])}}
        {!! Form::close() !!}
    </div>


@endsection
