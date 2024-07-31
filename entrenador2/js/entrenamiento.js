// Obtener elementos del DOM
const modal = document.getElementById("modal");
const closeModal = document.querySelector(".close");
const exerciseButtons = document.querySelectorAll(".exercise-button");
const exerciseTitle = document.getElementById("exercise-title");
const exerciseImage = document.getElementById("exercise-image");
const exerciseDescription = document.getElementById("exercise-description");
const timerDisplay = document.getElementById("timer");
const startTimerButton = document.getElementById("start-timer");
const pauseTimerButton = document.getElementById("pause-timer");
const resetTimerButton = document.getElementById("reset-timer");

let timer;
let seconds = 0;
let isPaused = false;

// Datos de los ejercicios
const exercises = [
    {
        title: "Ejercicio 1",
        image: "./img/workout1.jpg",
        description: "Descripción del ejercicio 1."
    },
    {
        title: "Ejercicio 2",
        image: "../img/workout2.jpg",
        description: "Descripción del ejercicio 2."
    },
    {
        title: "Ejercicio 3",
        image: "../img/workout3.jpg",
        description: "Descripción del ejercicio 3."
    },
    {
        title: "Ejercicio 4",
        image: "../img/workout4.jpg",
        description: "Descripción del ejercicio 4."
    },
    {
        title: "Ejercicio 5",
        image: "../img/workout5.jpg",
        description: "Descripción del ejercicio 5."
    }
];

// Función para abrir el modal con los datos del ejercicio
function openModal(exercise) {
    exerciseTitle.textContent = exercise.title;
    exerciseImage.src = exercise.image;
    exerciseDescription.textContent = exercise.description;
    modal.style.display = "block";
}

// Función para cerrar el modal
closeModal.onclick = function() {
    modal.style.display = "none";
    clearInterval(timer);
    resetTimer();
}

// Función para iniciar el cronómetro
startTimerButton.onclick = function() {
    if (isPaused) {
        isPaused = false;
    } else {
        timer = setInterval(() => {
            seconds++;
            timerDisplay.textContent = formatTime(seconds);
        }, 1000);
    }
}

// Función para pausar el cronómetro
pauseTimerButton.onclick = function() {
    isPaused = true;
    clearInterval(timer);
}

// Función para reiniciar el cronómetro
resetTimerButton.onclick = function() {
    clearInterval(timer);
    seconds = 0;
    timerDisplay.textContent = "00:00";
}

// Función para formatear el tiempo en minutos y segundos
function formatTime(seconds) {
    const minutes = Math.floor(seconds / 60);
    const secs = seconds % 60;
    return `${String(minutes).padStart(2, '0')}:${String(secs).padStart(2, '0')}`;
}

// Agregar evento a los botones de ejercicio
exerciseButtons.forEach(button => {
    button.onclick = function() {
        const exerciseIndex = this.getAttribute("data-exercise");
        openModal(exercises[exerciseIndex - 1]);
    };
});

// Cerrar el modal al hacer clic fuera de él
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        clearInterval(timer);
        resetTimer();
    }
};
