<?php

namespace App\Http\Controllers;

use App\Models\room;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoomsController extends Controller
{
    public function index()
    {
        $data['room'] = room::all();
        return view('room.index', $data);
    }

    public function create()
    {
        $data['students'] = Students::pluck('fio', 'id')->toArray();
        return view('room.create',$data);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'number' => 'required',
            'section' => 'required',
            'place' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect((route('room.create')))->withInput();
        } else {
            $newRoom = [
                'number' => $input['number'],
                'section' => $input['section'],
                'place' => $input['place'],
            ];
            room::create($newRoom);
            return redirect(route('room.index'));
        } // else if ($validator->fails())
    }

    public function show(Request $request, $id)
    {
        $room_id = $id;
        $data['room'] = room::find($room_id);
        return view('room.show', $data);
    }

    public function edit(Request $request, $id)
    {
        $room = room::find($id);
        if (is_null($room)) {
            return redirect(route('room.index'));
        } else {
            $data['room'] = $room;
            $data['students'] = Students::pluck('fio', 'id')->toArray();
            $data['room_students'] = $room->students->pluck('id')->toArray();
            return view('room.edit', $data);
        } // else if (is_null($news))
    }

    public function update(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'number' => 'required',
            'section' => 'required',
            'place' => 'required',
        ]);

        if ($validator->fails()) {
            request()->session('Не введены все неоходимые данные');
            return redirect((route('room.edit', ['id' => $input['id']])))->withInput();
        } else {
            $one_room = room::find($input['id']);
            $one_room->fill($input)->save();
            if (isset($input['students_list'])) {
                $one_room->students()->sync($input['students_list']);
            } else {
                $one_room->students()->sync([]);
            }
            return redirect(route('room.index'));
        } // else  if ($validator->fails())
    }

    public function destroy(Request $request, $id)
    {
        $room = room::find($id);
        $room->delete();
        return redirect(route('room.index'))->with('success', 'удалена!');
    }
}
