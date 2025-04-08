document.addEventListener("DOMContentLoaded", function () {
    const data = {
        inicio: "En FITNESS GYM creemos en hacer que las cosas sucedan. Tu transformación empieza hoy.",
        nosotros: "Somos un equipo apasionado por el fitness y el bienestar. Queremos verte alcanzar tus metas.",
        servicios: "Desde clases de crossfit hasta yoga, tenemos todo lo que necesitas para ponerte en forma.",
        comodidades: "Disfruta de sauna, duchas, lockers y mucho más después de tu entrenamiento.",
        galeria: "Explora nuestras instalaciones y conoce el ambiente único de FITNESS GYM.",
        equipo: "Entrena con los mejores profesionales del fitness, preparados para motivarte día a día.",
        contacto: "Contáctanos para más información o visítanos en nuestra sede principal."
    };

    const enlaces = document.querySelectorAll("nav a");
    const accordionContainer = document.getElementById("accordion-container");
    const accordionContent = document.getElementById("accordion-content");

    enlaces.forEach((enlace) => {
        enlace.addEventListener("click", function () {
            const seccion = this.getAttribute("href").substring(1).toLowerCase();
            if (data[seccion]) {
                accordionContent.innerText = data[seccion];
                accordionContainer.style.display = "block";
            }
        });
    });
});