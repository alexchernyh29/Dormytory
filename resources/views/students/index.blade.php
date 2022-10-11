@extends('main')

@section('content')

    <h3>Студенты</h3>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">ФИО</th>
                <th scope="col">Пол</th>
                <th scope="col">Дата рождения</th>
                <th scope="col">Группа</th>
                <th scope="col">Инностранный студент</th>
                <th scope="col">Страна рождения</th>
                <th scope="col">Действия</th>
            </tr>
        </thead>
        @foreach ($students as $one_students)
        <tbody>
            <tr>
                <td>
                    {{$one_students->fio}}
                </td>
                <td>
                    {{$one_students->gender}}
                </td>
                <td>
                    {{$one_students->date}}
                </td>
                <td>
                    {{$one_students->group}}
                </td>
                <td>
                    {{$one_students->foreigns}}
                </td>
                <td>
                    {{$one_students->country}}
                </td>
                <td>
                    <a href="{{route('students.destroy', ['id' => $one_students->id])}}" class="btn btn-block btn-danger"> Удалить</a> <br> <a class="btn btn-block btn-warning" href="{{ route('students.edit' ,$one_students->id) }}">Редактировать</a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <a href="{{ route('students.create') }}" class="btn btn-success">Create</a>

@endsection
