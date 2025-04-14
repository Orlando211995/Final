

const team = [
    {
      nombre: "MARCOS",
      descripcion: "Fitness - Pilates - Yoga",
      img: "img/marcos.png",
    },
    {
      nombre: "PATRICIA",
      descripcion: "Fitness - Pilates - Yoga",
      img: "img/patricia.png",
    },
    {
      nombre: "JUAN",
      descripcion: "Fitness - Pilates - Yoga",
      img: "img/juan.png",
    },
  ];
  
  const trainersSection = document.getElementById("trainers");
  
  if (trainersSection) {
    trainersSection.innerHTML = `
      <h2 class="heading">Nuestro <span>Equipo</span></h2>
      <div class="team-container">
        ${team
          .map(
            (t) => `
          <div class="team-box">
            <img src="${t.img}" alt="${t.nombre}">
            <h3>${t.nombre}</h3>
            <p>${t.descripcion}</p>
            <div class="social-media">
              <a href="#"><i class='bx bxl-facebook'></i></a>
              <a href="#"><i class='bx bxl-twitter'></i></a>
            </div>
          </div>
        `
          )
          .join("")}
      </div>
    `;
  }