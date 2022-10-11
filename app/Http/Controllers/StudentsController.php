<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\room;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentsController extends Controller
{
    public function index()
    {
        $data['students'] = Students::all();
        return view('students.index', $data);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'fio' => 'required',
            'gender' => 'required',
            'date' => 'required',
            'group' => 'required',
            'foreigns' => 'required',
            'country' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect((route('students.create')))->withInput();
        } else {
            $newStudents = [
                'fio' => $input['fio'],
                'gender' => $input['gender'],
                'date' => $input['date'],
                'group' => $input['group'],
                'foreigns' => $input['group'],
                'country' => $input['group'],
            ];
            Students::create($newStudents);
            return redirect(route('students.index'));
        } // else if ($validator->fails())
    }

    public function show(Request $request, $id)
    {
        $students_id = $id;
        $data['students'] = Students::find($students_id);
        return view('students.show', $data);
    }

        public function edit(Request $request, $id)
    {
        $students = Students::find($id);
        if (is_null($students)) {
            return redirect(route('students.index'));
        } else {
            $data['students'] = $students;
//            $data['room'] = room::pluck('fio', 'id')->toArray();
//            $data['room_students'] = $students->room->pluck('id')->toArray();
            return view('students.edit', $data);
        } // else if (is_null($news))
    }

    public function update(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'fio' => 'required',
            'gender' => 'required',
            'date' => 'required',
            'group' => 'required',
            'foreigns' => 'required',
            'country' => 'required',
        ]);

        if ($validator->fails()) {
            request()->session('Не введены все неоходимые данные');
            return redirect((route('students.edit', ['id' => $input['id']])))->withInput();
        } else {
            $one_students = Students::find($input['id']);
            $one_students->fill($input)->save();
            if (isset($input['room_list'])) {
                $one_students->room()->sync($input['room_list']);
            } else {
                $one_students->room()->sync([]);
            }
            return redirect(route('students.index'));
        } // else  if ($validator->fails())
    }

    public function destroy(Request $request, $id)
    {
        $students = Students::find($id);
        $students->delete();
        return redirect(route('students.index'))->with('success', 'удалена!');
    }

}


