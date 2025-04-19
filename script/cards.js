console.log("cargando cards.");

document.addEventListener("DOMContentLoaded", function () {
    const equipo = [
        {
            nombre: "MARCOS",
            especialidad: "Fitness - Pilates - Yoga",
            imagen: "img/e1.png",
            facebook: "https://www.facebook.com",
            instagram: "https://www.instagram.com"
        },
        {
            nombre: "Natasha",
            especialidad: "Fitness - Crossfit - Yoga",
            imagen: "img/natasha1.png",
            facebook: "https://www.facebook.com",
            instagram: "https://www.instagram.com"
        },
        {
            nombre: "JUAN",
            especialidad: "Fitness -Defensa Personal- Boxeo",
            imagen: "img/e3.png",
            facebook: "https://www.facebook.com",
            instagram: "https://www.instagram.com"
        }
    ];

    const contenedor = document.getElementById("equipo-cards");

    equipo.forEach(persona => {
        const col = document.createElement("div");
        col.classList.add("col");

        // Aquí agregamos las tarjetas
        col.innerHTML = `
            <img src="${persona.imagen}" alt="${persona.nombre}">
            <div class="info">
                <h3>${persona.nombre}</h3>
                <p>${persona.especialidad}</p>
                <div class="social-icons">
                    <a href="${persona.facebook}" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="${persona.instagram}" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        `;

        contenedor.appendChild(col);
    });
});

