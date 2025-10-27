<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Find Hospitals & Doctors</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    /* (keeping your same CSS – no changes needed) */
    html, body {
  margin: 0;
  padding: 0;
  min-height: 100vh;
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(135deg, #e0f7fa, #e1f5fe);
  color: #222;
  overflow-x: hidden;
  font-size: 16px; /* Normal base size */
}

/* Header */
header {
  background: linear-gradient(135deg, #00c6ff, #0072ff);
  padding: 25px;
  text-align: center;
  color: white;
  font-size: 28px; /* Not too big */
  font-weight: 700;
  letter-spacing: 0.5px;
  box-shadow: 0 6px 15px rgba(0,0,0,0.2);
  border-bottom-left-radius: 20px;
  border-bottom-right-radius: 20px;
}

/* Navbar */
nav {
  background: rgba(255,255,255,0.8);
  backdrop-filter: blur(12px);
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  border-radius: 50px;
  margin: 20px auto;
  max-width: 85%;
  padding: 10px 20px;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  gap: 30px;
}

nav ul li a {
  text-decoration: none;
  color: #333;
  font-size: 18px; /* Comfortable size */
  font-weight: 500;
  padding: 10px 16px;
  border-radius: 12px;
  transition: all 0.3s ease;
}

nav ul li a:hover {
  background: linear-gradient(135deg, #00c6ff, #0072ff);
  color: white;
  box-shadow: 0 4px 15px rgba(0,114,255,0.4);
}

/* Main Container */
.container.my-4 {
  max-width: 1100px;
  margin: 40px auto;
  padding: 20px;
}

/* Card Styling */
.card {
  margin-bottom: 25px;
  border: none;
  border-radius: 18px;
  background: rgba(255,255,255,0.9);
  backdrop-filter: blur(15px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.1);
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  font-size: 16px; /* Normal text inside */
}

.card:hover {
  transform: translateY(-6px);
  box-shadow: 0 15px 28px rgba(0,0,0,0.2);
}

/* Chat Window */
#chatWindow {
  position: fixed;
  bottom: 100px;
  right: 30px;
  width: 330px;
  height: 460px;
  background: rgba(255,255,255,0.95);
  border-radius: 18px;
  box-shadow: 0 8px 25px rgba(0,0,0,0.25);
  display: none;
  flex-direction: column;
  z-index: 9999;
  overflow: hidden;
  animation: fadeIn 0.3s ease;
  backdrop-filter: blur(15px);
  font-size: 15px; /* Chat feels compact */
}

/* Chat Header */
#chatHeader {
  background: linear-gradient(135deg, #00c6ff, #0072ff);
  color: white;
  padding: 14px;
  font-weight: 600;
  text-align: center;
  font-size: 18px; /* Clean size */
  box-shadow: 0 2px 8px rgba(0,0,0,0.2);
}

/* Chat Messages */
#messages {
  flex: 1;
  overflow-y: auto;
  padding: 12px;
  background: #f0f7ff;
  font-size: 15px; /* Slightly smaller for bubbles */
  line-height: 1.5;
  display: flex;
  flex-direction: column;
  gap: 8px;
}

/* Message Bubbles */
.message {
  padding: 8px 12px;
  border-radius: 15px;
  max-width: 80%;
  word-wrap: break-word;
  font-size: 15px;
}

.user {
  align-self: flex-end;
  background: linear-gradient(135deg, #00c6ff, #0072ff);
  color: white;
}

.bot {
  align-self: flex-start;
  background: #e9ecef;
  color: #333;
}

/* Chat Input */
#userInput {
  border: 1px solid #ddd;
  border-radius: 12px;
  padding: 10px;
  margin: 10px;
  width: calc(100% - 110px);
  font-size: 15px;
  outline: none;
}

#userInput:focus {
  border-color: #0072ff;
}

#sendButton {
  background: linear-gradient(135deg, #00c6ff, #0072ff);
  border: none;
  color: white;
  font-weight: 600;
  border-radius: 12px;
  padding: 10px 16px;
  cursor: pointer;
  margin-right: 10px;
  font-size: 15px;
  transition: all 0.3s ease;
}

#sendButton:hover {
  background: #005bb5;
}

/* Floating Chat Button */
#chatButton {
  position: fixed;
  bottom: 30px;
  right: 30px;
  background: linear-gradient(135deg, #00c6ff, #0072ff);
  color: white;
  border: none;
  border-radius: 50%;
  width: 65px;
  height: 65px;
  font-size: 28px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 6px 20px rgba(0,0,0,0.3);
  z-index: 9999;
  transition: transform 0.25s ease, box-shadow 0.3s ease;
}

#chatButton:hover {
  transform: scale(1.15);
  box-shadow: 0 10px 25px rgba(0,0,0,0.4);
}

/* Animation */
@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.95); }
  to { opacity: 1; transform: scale(1); }
}


  </style>
</head>
<body>
  <header>
    <h1>MEDICONNECT</h1>
    <nav>
      <ul>
        <li><a href="doctors.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
      </ul>
    </nav>
  </header>

  <div class="container my-4">
    <div class="row g-3 align-items-end">
      <div class="col-md-4">
        <label for="locationFilter" class="form-label">Filter by Location:</label>
        <select id="locationFilter" class="form-select">
          <option value="all">All</option>
          <option value="Coimbatore">Coimbatore</option>
          <option value="Chennai">Chennai</option>
        </select>
      </div>

      <div class="col-md-4">
        <label for="specialisationFilter" class="form-label">Filter by Specialisation:</label>
        <select id="specialisationFilter" class="form-select">
          <option value="all">All</option>
          <option value="Cardiology">Cardiology</option>
          <option value="Neurology">Neurology</option>
          <option value="Orthopaedics">Orthopaedics</option>
        </select>
      </div>

      <div class="col-md-4">
        <label for="ratingFilter" class="form-label">Filter by Ratings:</label>
        <select id="ratingFilter" class="form-select">
          <option value="all">All</option>
          <option value="5">5 Stars</option>
          <option value="4">4 Stars & above</option>
          <option value="3">3 Stars & above</option>
        </select>
      </div>
    </div>
  </div>

  <div class="container">
    <div id="hospitalCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-inner" id="carouselContent"></div>
      <button class="carousel-control-prev" type="button" data-bs-target="#hospitalCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#hospitalCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>

  <button id="chatButton">💬</button>

  <div id="chatWindow">
    <div id="chatHeader">Mediconnect Assistant
      <button id="closeChat" style="float:right;">❌</button>
    </div>
    <div id="messages"></div>
    <input type="text" id="userInput" placeholder="Ask me...">
    <button id="sendButton">Send</button>
  </div>

  <script>
  const hospitalData = [
    { name: "KMCH", location: "Coimbatore", specialisation: "Cardiology", rating: 5, image: "Kmch.png", page: "Kmch.php", description: "Top cardiac specialists in Coimbatore." },
    { name: "G. Kuppuswamy Naidu Hospital", location: "Coimbatore", specialisation: "Cardiology", rating: 4, image: "kuppusami.png", page: "kuppusami.php", description: "Heart care from Apollo Group." },
    { name: "PSG Hospitals", location: "Coimbatore", specialisation: "Neurology", rating: 5, image: "psg.png", page: "psg.php", description: "Trusted neuro care in the region." },
    { name: "Kongunad Hospital", location: "Coimbatore", specialisation: "Neurology", rating: 3, image: "https://www.innayatmedical.com/uploads/hospital/photos/kongunad-hospital-pvt-ltd-3-1707910441.webp", page: "kongu.php", description: "Specialists in brain and spine." },
    { name: "Ganga Hospital", location: "Coimbatore", specialisation: "Orthopaedics", rating: 5, image: "ganga.png", page: "ganga.php", description: "Leading bone and fracture centre." },
    { name: "Ramakrishna Hospital", location: "Coimbatore", specialisation: "Orthopaedics", rating: 4, image: "ramakrishna.png", page: "ramakrishna.php", description: "Joint replacement and ortho care." },
    { name: "Apollo Hospital", location: "Chennai", specialisation: "Cardiology", rating: 5, image: "Apollo.png", page: "apollo.php", description: "Premier cardiac hospital in Chennai." },
    { name: "Fortis Malar", location: "Chennai", specialisation: "Cardiology", rating: 4, image: "fortis.png", page: "fortis.php", description: "Fortis excellence in heart care." },
    { name: "SIMS Hospital", location: "Chennai", specialisation: "Neurology", rating: 4, image: "sims.png", page: "sims.php", description: "Advanced neurology and neuro-oncology care." },
    { name: "VS Hospitals", location: "Chennai", specialisation: "Neurology", rating: 5, image: "vshospital.png", page: "vs.php", description: "Expert care for neuro conditions." },
    { name: "MIOT Hospitals", location: "Chennai", specialisation: "Orthopaedics", rating: 5, image: "miot.png", page: "miot.php", description: "Bone and ortho surgeries." },
    { name: "Venkateshwara Hospital", location: "Chennai", specialisation: "Orthopaedics", rating: 4, image: "venkateshwara.png", page: "venkateshwara.php", description: "Orthopaedic excellence." }
  ];

  function buildCarousel(location, specialisation, rating) {
    const content = document.getElementById('carouselContent');
    content.innerHTML = '';

    let filtered = hospitalData;
    if (location !== 'all') filtered = filtered.filter(h => h.location === location);
    if (specialisation !== 'all') filtered = filtered.filter(h => h.specialisation === specialisation);
    if (rating !== 'all') filtered = filtered.filter(h => h.rating >= parseInt(rating));

    for (let i = 0; i < filtered.length; i += 3) {
      const activeClass = i === 0 ? 'active' : '';
      let slide = `<div class="carousel-item ${activeClass}"><div class="row justify-content-center">`;

      const group = filtered.slice(i, i + 3);
      group.forEach(h => {
        slide += `
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="${h.image}" class="card-img-top" alt="${h.name}" width="350" height="350">
              <div class="card-body text-center">
                <h5 class="card-title">${h.name}</h5>
                <p class="card-text">${h.description}</p>
                <a href="${h.page}" class="btn btn-primary">View More</a>
              </div>
            </div>
          </div>`;
      });

      slide += `</div></div>`;
      content.innerHTML += slide;
    }
  }

  document.getElementById('locationFilter').addEventListener('change', updateCarousel);
  document.getElementById('specialisationFilter').addEventListener('change', updateCarousel);
  document.getElementById('ratingFilter').addEventListener('change', updateCarousel);

  function updateCarousel() {
    const location = document.getElementById('locationFilter').value;
    const specialisation = document.getElementById('specialisationFilter').value;
    const rating = document.getElementById('ratingFilter').value;
    buildCarousel(location, specialisation, rating);
  }

  window.onload = () => buildCarousel('all', 'all', 'all');

  // Chatbot
  const chatButton = document.getElementById('chatButton');
  const chatWindow = document.getElementById('chatWindow');
  const closeChat = document.getElementById('closeChat');
  const sendButton = document.getElementById('sendButton');

  chatButton.addEventListener('click', () => chatWindow.style.display = 'flex');
  closeChat.addEventListener('click', () => chatWindow.style.display = 'none');

  sendButton.addEventListener('click', sendMessage);
  document.getElementById('userInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') sendMessage();
  });

  function sendMessage() {
    const userInput = document.getElementById('userInput');
    const userText = userInput.value.trim();
    if (!userText) return;

    const messages = document.getElementById('messages');
    messages.innerHTML += `<div><b>You:</b> ${userText}</div>`;
    messages.innerHTML += `<div><b>Bot:</b> ${getBotReply(userText)}</div>`;

    userInput.value = '';
    messages.scrollTop = messages.scrollHeight;
  }

  function getBotReply(input) {
    input = input.toLowerCase();
    if (input.includes('hi')) return "Hello! I'm your medical assistant. How can I help you today?";
    if (input.includes('cardio')) return "We have great cardiology hospitals like KMCH, Apollo, and Fortis.";
    if (input.includes('neuro')) return "Check out PSG, SIMS, or Kongu Nadu for neurology.";
    if (input.includes('ortho')) return "Ganga and MIOT are excellent choices for orthopaedics.";
    if (input.includes('book|appointment')) return "Use the 'View More' button to reach the official site.";
    if (input.includes('what is mediconnect')) return "MediConnect is a platform to find, compare, and book appointments with hospitals and doctors.";
    return "Sorry, I didn't understand. Try asking about a specialisation.";
  }
  </script>
</body>
</html>
