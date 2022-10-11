@extends('main')

@section('content')

    <h3>Комнаты</h3>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">Номер комнаты</th>
            <th scope="col">Башня</th>
            <th scope="col">Количество койко-мест</th>
            <th scope="col">Заселённые студенты</th>
        </tr>
        </thead>
        @foreach ($room as $one_room)
            <tbody>
            <tr>
                <td>
                    {{$one_room->number}}
                </td>
                <td>
                    {{$one_room->section}}
                </td>
                <td>
                    {{$one_room->place}}
                </td>
                <td>
                    @foreach($one_room->students as $students)
                        {{$students->fio}}<br>
                    @endforeach
                </td>
                <td>
                    <a href="{{route('room.destroy', ['id' => $one_room->id])}}" class="btn btn-block btn-danger"> Удалить</a> <br> <br> <a class="btn btn-block btn-warning" href="{{ route('room.edit' ,$one_room->id) }}">Редактировать</a>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
    <a href="{{ route('room.create') }}" class="btn btn-success">Create</a>

@endsection
