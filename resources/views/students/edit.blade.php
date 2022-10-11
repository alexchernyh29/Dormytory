@extends('main')

@section('content')
    <div class="container">
        <h3>Edit</h3>

        {!! Form::open(['route' => ['students.update']]) !!}
        {{Form::hidden('id', $students->id)}}
        <div class="form-group">
            {{Form::label('fio', 'Фамилия Имя Отчество')}}
            {{Form::text('fio', $students->fio,['placeholder'=> '', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('gender', 'Пол')}}
            {{Form::text('gender', $students->gender,['placeholder'=> '', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('date', 'Дата пождения')}}
            {{Form::text('date',  $students->date,['placeholder'=> '', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('group', 'Группа')}}
            {{Form::text('group',  $students->group,['placeholder'=> '', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('foreigns', 'Иностранный студент')}}
            {{Form::text('foreigns',  $students->foreigns,['placeholder'=> '', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('country', 'Введите Страну Рождения')}}
            {{Form::text('country',  $students->country,['placeholder'=> '', 'class' => 'form-control'])}}
        </div>

        {{Form::submit('Сохранить изменения', ['class' => 'btn-success'])}}
        {!! Form::close() !!}
    </div>

    <script>
        $('select').select2();
    </script>
@endsection
