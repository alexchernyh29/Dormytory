@extends('main')

@section('content')
    <div class="container">
        <h3>Добавление Студента!</h3>
        {!! Form::open(['route' => ['students.store']]) !!}
        <div class="form-group">
            {{Form::label('fio', 'Фамилия Имя Отчество')}}
            {{Form::text('fio', null, ['placeholder'=> 'Введите Ф.И.О.', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('gender', 'Пол')}}
            {{Form::text('gender', null,['placeholder'=> 'Введите Пол', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('date', 'Дата рождения')}}
            {{Form::text('date', null, ['placeholder'=> 'Введите Дату рождения', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('group', 'Группа')}}
            {{Form::text('group', null, ['placeholder'=> 'Введите Группу', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('foreigns', 'Иностранный студент')}}
            {{Form::text('foreigns', null, ['placeholder'=> '', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('country', 'Страна')}}
            {{Form::text('country', null, ['placeholder'=> 'Введите Страну Рождения', 'class' => 'form-control'])}}
        </div>

        {{Form::submit('Добавить', ['class' => 'btn btn-success'])}}
        {!! Form::close() !!}
    </div>


@endsection
