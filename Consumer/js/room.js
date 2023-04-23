// const roomlist = document.querySelector(".room-list");
// const roomInput = document.querySelector("#room-name");
// const form = document.querySelector("#myForm");
// const btn1 = document.querySelector("#addbtn");


// btn1.onclick = function() {
//     var div= document.createElement("div");
//     var content = roomInput.value.trim();
//     div.innerHTML= content;
//     div.classList="room";
//     panel.appendChild(div);
// }
// function getRoomsFromStorage(){
//     let rooms;
//     if(localStorage.getItem("rooms") === null){
//         rooms = [];
//     }
//     else{
//         rooms = JSON.parse(localStorage.getItem("rooms"));
//     }
//     return rooms;

// }
// function addRoomToStorage(newRoom) {
//     let rooms = getRoomsFromStorage();

//     rooms.push(newRoom);

//     localStorage.setItem("rooms",JSON.stringify(rooms));

// }
function showAlert(type, message){
    const alert = document.createElement("div");
    alert.className = `alert alert-${type} mt-2`;
    alert.textContent = message;
    todoBody.appendChild(alert);

    setTimeout(function(){
        alert.remove();
    },2000)
}

function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }