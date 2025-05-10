alert("Selamat datang di website saya! Tekan OK untuk melanjutkan 😊");

const imageSets = [
    [
      { src: "IMAGES/Unpad.jpg", caption: "Me" },
      { src: "IMAGES/Family.jpg", caption: "Family" },
      { src: "IMAGES/ball.jpg", caption: "Field" }
    ],
    [
      { src: "IMAGES/mountain.jpg", caption: "Mountain" },
      { src: "IMAGES/Chrusty.jpg", caption: "Crushty" },
      { src: "IMAGES/college.jpg", caption: "College" }
    ],
    [
      { src: "IMAGES/old.jpg", caption: "Old Friends" },
      { src: "IMAGES/team.jpg", caption: "Team " },
      { src: "IMAGES/hmi.jpg", caption: "HMI" }
    ]
  ];
  
  let currentSet = 0;
  const figures = document.querySelectorAll(".slide-group");
  
  function updateGallery() {
    const nextSet = imageSets[currentSet];
    figures.forEach((figure, index) => {
      const img = figure.querySelector("img");
      const caption = figure.querySelector("figcaption");
      img.src = nextSet[index].src;
      caption.textContent = nextSet[index].caption;
    });
  
    currentSet = (currentSet + 1) % imageSets.length;
  }
  
<<<<<<< HEAD
  setInterval(updateGallery, 5000); // setiap 7 detik
=======
  setInterval(updateGallery, 5000); // setiap 5 detik
>>>>>>> master
  
  // === SMOOTH SCROLL MENU ===
  document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute("href")).scrollIntoView({
        behavior: "smooth"
      });
    });
  });
  function updateClock() {
    const now = new Date();
    document.getElementById("clock").textContent = now.toLocaleTimeString();
  }
  setInterval(updateClock, 1000);
  updateClock();
  