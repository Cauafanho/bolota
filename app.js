/*const estacioSeats = [

    false,
    false,
    false,
    false,
    false,
    false
];

let busySeats = 0;

const createSeats = (array) =>{

    const containerSeats = document.getElementById("seats");

    for (let i in array) {
        let seat = document.createElement("div");
        seat.className = "seats";
        if (i <4) {
            seat.style.backgroundColor = "gray";
        }

        else{
            seat.style.backgroundColor = "yellow"; 
        }

        containerSeats.appendChild(seat);

    }
}


const reserve = () => {
    const reserveBtn = document.getElementById("reserve-btn");
    reserveBtn.addEventListener("click", chooseZone);
}

const chooseZone = () =>{

    const choice = parseInt(prompt("Que vaga você deseja reservar ? "));

    if(choice == 1){
        checkFirtVaga();
    }
    else{
        checkSecondVaga();
    }
}


const checkFirtVaga = () =>{
    for (let i = 0;i < 4; i++) {
        if(estacioSeats[i] == false){
            estacioSeats[i] = true;
            break;
        }
    }
}

const checkSecondVaga = () =>{
    for (let i = 4;i < 6; i++) {
        if(estacioSeats[i] == false){
            estacioSeats[i] = true;
            break;
        }
    }
}

reserve();

createSeats(estacioSeats); */

/* começar */

const vaga01 = [false];
const vaga02 = [false];
const vaga03 = [false];

function reservarVaga(){
    alert("testando !!!!");
}



