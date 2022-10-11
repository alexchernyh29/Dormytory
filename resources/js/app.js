require('./bootstrap');

function myFunc(elem){
    var students = document.getElementById('students_list[]');
    var countSelected = 0;
    //Считаем
    for (var i = 0; i < students.options.length; i++){
        if (students.options[i].selected)
            countSelected++;
    }
    if (countSelected > 3){//Отменяем последнее выделение
        elem.selected = false;
        alert('Больше выбирать нельзя');
    }
}

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("action-3");
}
// Закрыть раскрывающийся список, если пользователь щелкнет за его пределами.
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

const DATA = [
    {
        sectionId: 1,
        up: [
            {
                levelId: 124,
                rooms: [
                    {
                        roomId: 121,
                        tenants: 3,
                    },
                    {
                        roomId: 122,
                        tenants: 1,
                    },
                    {
                        roomId: 123,
                        tenants: 4,
                    },
                    {
                        roomId: 123,
                        tenants: 0,
                    },
                ],
            },
            {
                levelId: 221,
                rooms: [
                    {
                        roomId: 121,
                        tenants: 3,
                    },
                    {
                        roomId: 122,
                        tenants: 1,
                    },
                    {
                        roomId: 123,
                        tenants: 4,
                    },
                    {
                        roomId: 123,
                        tenants: 0,
                    },
                ],
            },
        ],
        down: [
            {
                levelId: 124,
                rooms: [
                    {
                        roomId: 121,
                        tenants: 3,
                    },
                    {
                        roomId: 122,
                        tenants: 1,
                    },
                    {
                        roomId: 123,
                        tenants: 4,
                    },
                    {
                        roomId: 123,
                        tenants: 0,
                    },
                ],
            },
            {
                levelId: 224,
                rooms: [
                    {
                        roomId: 121,
                        tenants: 3,
                    },
                    {
                        roomId: 122,
                        tenants: 1,
                    },
                    {
                        roomId: 123,
                        tenants: 4,
                    },
                    {
                        roomId: 123,
                        tenants: 4,
                    },
                ],
            },
        ],
    },
];
//
// function decodeHtml(str)
// {
//     var map =
//         {
//             '&amp;': '&',
//             '&lt;': '<',
//             '&gt;': '>',
//             '&quot;': '"',
//             '&#039;': "'"
//         };
//     return str.replace(/&amp;|&lt;|&gt;|&quot;|&#039;/g, function(m) {return map[m];});
// }
//
// async function query(url) {
//     try {
//         const request = new Request(url, {
//             method: 'get',
//             headers: {
//                 'Content-Type': 'application/json',
//             }
//         })
//
//         let response = await useRequest(request)
//         response = decodeHtml(response)
//         console.log(response)
//         console.log(JSON.parse(response))
//         return response
//     } catch (error) {
//         console.error(error)
//     }
// }
//
// async function useRequest(request) {
//     const response = await fetch(request)
//     return await response.text()
// }
//
// query('http://dormitory/room/show/1');

function renderLevel(key, level) {
    const node = document.createElement("div");
    node.className = `level${key}`;
    level.forEach((lvl) => {
        const nodeLvl = document.createElement("div");
        nodeLvl.className = `level${key}${lvl.levelId}`;
        lvl.rooms.forEach((room) => {
            const nodeRoom = document.createElement("div");
            nodeRoom.className = `room-${room.roomId}`;
            const nodeUpLevel = document.createElement("div");
            nodeUpLevel.className = "up-level";
            const nodeDownLevel = document.createElement("div");
            nodeDownLevel.className = "down-level";
            for (let i = 0; i < 4; i++) {
                const circle = document.createElement("div");
                circle.className = "circle";
                if (i < room.tenants) {
                    circle.classList.add("is-active");
                }
                if (i < 2) {
                    nodeUpLevel.appendChild(circle);
                } else {
                    nodeDownLevel.appendChild(circle);
                }
            }
            nodeRoom.appendChild(nodeUpLevel);
            nodeRoom.appendChild(nodeDownLevel);
            nodeLvl.appendChild(nodeRoom);
        });
        node.appendChild(nodeLvl);
    });
    return node;
}

function renderSection(sec) {
    const node = document.createElement("div");
    node.className = `section-level-${sec.sectionId}`;
    const up = renderLevel("up", sec.up);
    const down = renderLevel("down", sec.down);
    node.appendChild(up);
    node.appendChild(down);
    return node;
}

function renderApp() {
    const root = document.getElementById("root");
    // const DATA = await query('http://dormitory/room/show/1')
    DATA.forEach((section) => {
        const sec = renderSection(section);
        root.appendChild(sec);
    });
}

renderApp();
