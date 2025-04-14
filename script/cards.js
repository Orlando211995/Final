console.log("Cards script loaded.");

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
            nombre: "PATRICIA",
            especialidad: "Fitness - Pilates - Yoga",
            imagen: "img/e2.png",
            facebook: "https://www.facebook.com",
            instagram: "https://www.instagram.com"
        },
        {
            nombre: "JUAN",
            especialidad: "Fitness - Pilates - Yoga",
            imagen: "img/e3.png",
            facebook: "https://www.facebook.com",
            instagram: "https://www.instagram.com"
        }
    ];

    const contenedor = document.getElementById("equipo-cards");

    equipo.forEach(persona => {
        const col = document.createElement("div");
        col.classList.add("col");

        col.innerHTML = `
            <img src="${persona.imagen}" alt="${persona.nombre}">
            <div class="info">
                <h2>${persona.nombre}</h2>
                <p>${persona.especialidad}</p>
                <a href="${persona.facebook}" target="_blank">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="${persona.instagram}" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
        `;

        contenedor.appendChild(col);
    });
});

