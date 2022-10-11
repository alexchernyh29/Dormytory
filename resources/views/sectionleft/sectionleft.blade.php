@extends('main')

@section('content')
    <div class="section-1">
        <div class="section-swap">
            <a href="/sectionleft" class="section-level">2 этаж</a>
            <a href="/sectionleft-1" class="section-level">3 этаж</a>
            <a href="/sectionleft-2" class="section-level">4 этаж</a>
            <a href="/sectionleft" class="section-level">5 этаж</a>
            <a href="/sectionleft" class="section-level">6 этаж</a>
            <a href="/sectionleft" class="section-level">7 этаж</a>
            <a href="/sectionleft" class="section-level">8 этаж</a>
        </div>
    </div>
    <div id="root"></div>
{{--    <div class="section-level-1">--}}
{{--        <img src="../images/level-2.png" class="img-level">--}}
{{--        <div class="levelup">--}}
{{--            <div class="levelup124">--}}
{{--                <div class="room-121" onclick="myFunction()" idx ="121">--}}
{{--                    <div class="up-level">--}}
{{--                        <div class="circle-1"></div>--}}
{{--                        <div class="circle-2"></div>--}}
{{--                    </div>--}}
{{--                    <div class="down-level">--}}
{{--                        <div class="circle"></div>--}}
{{--                        <div class="circle"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="room-122">--}}
{{--                    <div class="up-level">--}}
{{--                        <div class="circle-1"></div>--}}
{{--                        <div class="circle"></div>--}}
{{--                    </div>--}}
{{--                    <div class="down-level">--}}
{{--                        <div class="circle"></div>--}}
{{--                        <div class="circle"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="room-123">--}}
{{--                    <div class="up-level">--}}
{{--                        <div class="circle-1"></div>--}}
{{--                        <div class="circle-2"></div>--}}
{{--                    </div>--}}
{{--                    <div class="down-level">--}}
{{--                        <div class="circle-1"></div>--}}
{{--                        <div class="circle"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="room-124">--}}
{{--                    <div class="up-level">--}}
{{--                        <div class="circle-1"></div>--}}
{{--                        <div class="circle-2"></div>--}}
{{--                    </div>--}}
{{--                    <div class="down-level">--}}
{{--                        <div class="circle-1"></div>--}}
{{--                        <div class="circle-2"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="levelup221">--}}
{{--                <div class="room-121">--}}
{{--                    <div class="up-level">--}}
{{--                        <div class="circle-1"></div>--}}
{{--                        <div class="circle"></div>--}}
{{--                    </div>--}}
{{--                    <div class="down-level">--}}
{{--                        <div class="circle"></div>--}}
{{--                        <div class="circle"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="room-122">--}}
{{--                    <div class="up-level">--}}
{{--                        <div class="circle-1"></div>--}}
{{--                        <div class="circle-2"></div>--}}
{{--                    </div>--}}
{{--                    <div class="down-level">--}}
{{--                        <div class="circle"></div>--}}
{{--                        <div class="circle"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="room-123">--}}
{{--                    <div class="up-level">--}}
{{--                        <div class="circle"></div>--}}
{{--                        <div class="circle"></div>--}}
{{--                    </div>--}}
{{--                    <div class="down-level">--}}
{{--                        <div class="circle"></div>--}}
{{--                        <div class="circle"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="room-124">--}}
{{--                    <div class="up-level">--}}
{{--                        <div class="circle-1"></div>--}}
{{--                        <div class="circle"></div>--}}
{{--                    </div>--}}
{{--                    <div class="down-level">--}}
{{--                        <div class="circle"></div>--}}
{{--                        <div class="circle"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="leveldown">--}}
{{--            <div class="leveldown124">--}}
{{--                <div class="room-121">--}}
{{--                    <div class="up-level">--}}
{{--                        <div class="circle-1"></div>--}}
{{--                        <div class="circle-2"></div>--}}
{{--                    </div>--}}
{{--                    <div class="down-level">--}}
{{--                        <div class="circle-1"></div>--}}
{{--                        <div class="circle-2"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="room-121">--}}
{{--                    <div class="up-level">--}}
{{--                        <div class="circle-1"></div>--}}
{{--                        <div class="circle-2"></div>--}}
{{--                    </div>--}}
{{--                    <div class="down-level">--}}
{{--                        <div class="circle"></div>--}}
{{--                        <div class="circle"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="room-121">--}}
{{--                    <div class="up-level">--}}
{{--                        <div class="circle-1"></div>--}}
{{--                        <div class="circle"></div>--}}
{{--                    </div>--}}
{{--                    <div class="down-level">--}}
{{--                        <div class="circle"></div>--}}
{{--                        <div class="circle"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="room-121">--}}
{{--                    <div class="up-level">--}}
{{--                        <div class="circle-1"></div>--}}
{{--                        <div class="circle-2"></div>--}}
{{--                    </div>--}}
{{--                    <div class="down-level">--}}
{{--                        <div class="circle"></div>--}}
{{--                        <div class="circle"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="leveldown224">--}}
{{--                <div class="room-121">--}}
{{--                    <div class="up-level">--}}
{{--                        <div class="circle-1"></div>--}}
{{--                        <div class="circle"></div>--}}
{{--                    </div>--}}
{{--                    <div class="down-level">--}}
{{--                        <div class="circle"></div>--}}
{{--                        <div class="circle"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="room-121">--}}
{{--                    <div class="up-level">--}}
{{--                        <div class="circle"></div>--}}
{{--                        <div class="circle"></div>--}}
{{--                    </div>--}}
{{--                    <div class="down-level">--}}
{{--                        <div class="circle"></div>--}}
{{--                        <div class="circle"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="room-121">--}}
{{--                    <div class="up-level">--}}
{{--                        <div class="circle-1"></div>--}}
{{--                        <div class="circle-2"></div>--}}
{{--                    </div>--}}
{{--                    <div class="down-level">--}}
{{--                        <div class="circle-1"></div>--}}
{{--                        <div class="circle-2"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="room-121">--}}
{{--                    <div class="up-level">--}}
{{--                        <div class="circle-1"></div>--}}
{{--                        <div class="circle"></div>--}}
{{--                    </div>--}}
{{--                    <div class="down-level">--}}
{{--                        <div class="circle"></div>--}}
{{--                        <div class="circle"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <script>

    </script>
{{--    <table class="table">--}}
{{--        <thead class="thead-light">--}}
{{--        <tr>--}}
{{--            <th scope="col">Номер комнаты</th>--}}
{{--            <th scope="col">Заселённые студенты</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--            @foreach ($room as $one_room)--}}
{{--            <tbody>--}}
{{--            <tr>--}}
{{--                <td>--}}
{{--                    {{$one_room->number}}--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    @foreach($one_room->students as $students)--}}
{{--                        {{$students->fio}}<br>--}}
{{--                    @endforeach--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            </tbody>--}}
{{--            @endforeach--}}
{{--    </table>--}}
@endsection
