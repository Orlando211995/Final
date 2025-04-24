console.log("cargando cards.");

document.addEventListener("DOMContentLoaded", function () {
    const equipo = [
        {
            nombre: "Franco",
            especialidad: "Fitness - Pilates - Enduro",
            imagen: "img/Franco.png",
            facebook: "https://www.facebook.com",
            instagram: "https://www.instagram.com"
        },
        {
            nombre: "Isabel",
            especialidad: "Fitness - Crossfit - Yoga",
            imagen: "img/Isabel.png",
            facebook: "https://www.facebook.com",
            instagram: "https://www.instagram.com"
        },
        {
            nombre: "Amir",
            especialidad: "Fitness -Defensa Personal- Boxeo",
            imagen: "img/Amir.png",
            facebook: "https://www.facebook.com",
            instagram: "https://www.instagram.com"
        }
    ];

    const contenedor = document.getElementById("equipo-cards");

    equipo.forEach(persona => {
        const col = document.createElement("div");
        col.classList.add("col");

        // Aquí se agrego las tarjetas
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

