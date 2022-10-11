@extends('main')

@section('content')
    <div class="container">
        <h3>Заселение студентов</h3>

        {!! Form::open(['route' => ['room.update']]) !!}
        {{Form::hidden('id', $room->id)}}
        <div class="form-group">
            {{Form::label('number', 'Номер комнаты')}}
            {{Form::text('number', $room->number,['placeholder'=> '', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('section', 'Секция')}}
            {{Form::text('section', $room->section,['placeholder'=> '', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('place', 'Количество койко мест')}}
            {{Form::text('place',  $room->place,['placeholder'=> '', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('students_id', 'Студенты')}}
            {{Form::select('students_list[]', $students, $room_students, ['class' => 'form-control', 'multiple' => true])}}
        </div>

        {{Form::submit('Сохранить изменения', ['class' => 'btn-success'])}}
        {!! Form::close() !!}
    </div>

    <script>
        $('select').select2();
    </script>
@endsection
