<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VS Hospitals Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
      line-height: 1.7;
    }
    .custom-header {
      background: linear-gradient(-45deg, #00695c, #26a69a, #4db6ac, #00897b);
      background-size: 400% 400%;
      animation: gradientMove 12s ease infinite;
      color: white;
      position: relative;
      overflow: hidden;
    }
    .header-content {
      animation: fadeIn 2s ease-in-out;
    }
    .header-title {
      font-size: 3rem;
      font-weight: bold;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
      transition: all 0.4s ease;
    }
    .header-title:hover {
      color: #ffeb3b;
      text-shadow: 0px 0px 15px rgba(255, 235, 59, 0.9);
    }
    .doctor-card {
      background: white;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .doctor-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }
    .rating {
      font-size: 1.3rem;
      color: gold;
    }
    .map-container {
      border: 5px solid #00695c;
      border-radius: 15px;
      overflow: hidden;
    }
    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    .lead {
      font-size: 1.25rem;
      text-shadow: 1px 1px 6px rgba(0,0,0,0.2);
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    h1, h2 {
      font-weight: bold;
      color: #004d40;
    }
    section {
      padding: 60px 0;
    }
    .carousel-item img {
      height: 500px;
      object-fit: cover;
    }
    .custom-table {
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .custom-table th {
      background-color: #00695c;
      color: white;
    }
    .highlight {
      background-color: #e0f2f1;
      padding: 20px;
      border-radius: 8px;
    }
  </style>
</head>
<body>

<header class="custom-header text-center py-5">
  <div class="header-content">
    <h1 class="header-title">VS Hospitals - Chennai</h1>
    <p class="lead">A multi-speciality leader in advanced cancer care & holistic healthcare.</p>
  </div>
</header>

<!-- Carousel -->
<section class="container">
  <div id="hospitalCarousel" class="carousel slide shadow" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://vshospitals.com/wp-content/uploads/2021/06/vshospital.jpg" class="d-block w-100" alt="VS Hospitals Building">
      </div>
      <div class="carousel-item">
        <img src="https://www.practo.com/consumer-ui/_next/image?url=https%3A%2F%2Fimages1-fabric.practo.com%2Fpractices%2F1053368%2Fvs-hospitals-advanced-cancer-care-chennai-5f75ba8446ed2.JPG&w=3840&q=75" class="d-block w-100" alt="Cancer Care Unit">
      </div>
      <div class="carousel-item">
        <img src="https://vshospitals.b-cdn.net/wp-content/uploads/2022/02/Best-Orthopaedics-Hospital-in-Chennai-Orthopedics-or-orthopedic-surgery-DIAGNOSIS-AND-TREATMENTS-1024x678.webp" class="d-block w-100" alt="Operation Theatre">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hospitalCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hospitalCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</section>

<!-- Overview -->
<section class="container">
  <h2>Overview & Background</h2>
  <div class="highlight">
    <p>VS Hospitals, based in Chennai, is renowned for its excellence in oncology, multi-speciality healthcare, and patient-centric approach. The hospital combines cutting-edge technology with compassionate care, attracting patients from across India and abroad.</p>
  </div>
</section>

<!-- Specializations -->
<section class="container">
  <h2>Specializations</h2>
  <div class="row">
    <div class="col-md-6">
      <h4>Super Specialties</h4>
      <ul>
        <li>Oncology & Radiotherapy</li>
        <li>Cardiology & Cardiac Surgery</li>
        <li>Neurology & Neurosurgery</li>
        <li>Orthopaedics & Joint Replacement</li>
        <li>Nephrology & Urology</li>
        <li>Gastroenterology</li>
        <li>Robotic Surgery</li>
      </ul>
    </div>
    <div class="col-md-6">
      <h4>Broad Specialties</h4>
      <ul>
        <li>General Medicine</li>
        <li>General Surgery</li>
        <li>Critical Care</li>
        <li>Pulmonology</li>
        <li>Pediatrics</li>
        <li>Dermatology</li>
      </ul>
    </div>
  </div>
</section>

<!-- Doctors -->
<section class="container py-5">
  <h2 class="text-center mb-4">Our Expert Doctors</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="doctor-card p-4 text-center">
        <h5>Dr. S. Subramanian</h5>
        <p>Senior Oncologist | 40+ Years Experience</p>
        
      </div>
    </div>
    <div class="col-md-4">
      <div class="doctor-card p-4 text-center">
        <h5>Dr. E. Prasanna</h5>
        <p>Consultant Cardiologist | 20 Years Experience</p>
     
      </div>
    </div>
    <div class="col-md-4">
      <div class="doctor-card p-4 text-center">
        <h5>Dr. Anitha Ramesh</h5>
        <p>Senior Medical Oncologist | 25 Years Experience</p>
        
      </div>
    </div>
  </div>
</section>

<!-- Location -->
<section class="container py-5">
  <h2 class="text-center mb-4">Location</h2>
  <div class="map-container">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.1082840933664!2d80.24958857508064!3d13.09568401225332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5266f73017f7bb%3A0x5f3f8a4c13b3b5f3!2sVS%20Hospitals!5e0!3m2!1sen!2sin!4v1691597901234!5m2!1sen!2sin" 
      width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
  </div>
</section>

<!-- Facilities -->
<section class="container">
  <h2>Facilities</h2>
  <ul>
    <li>Comprehensive Cancer Care Centre</li>
    <li>Advanced Radiation Therapy Units</li>
    <li>Modular Operation Theatres</li>
    <li>24/7 Emergency & Trauma Care</li>
    <li>International Patient Assistance</li>
    <li>Rehabilitation & Physiotherapy</li>
  </ul>
</section>

<!-- Achievements -->
<section class="container">
  <h2>Achievements & Rankings</h2>
  <table class="table table-bordered mb-0">
    <thead>
      <tr>
        <th>Achievement</th>
        <th>Details</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Leading Oncology Centre</td>
        <td>Recognized among top cancer care hospitals in South India</td>
      </tr>
      <tr>
        <td>Robotic Surgery Pioneer</td>
        <td>Among first to adopt robotic surgical technology in Chennai</td>
      </tr>
      <tr>
        <td>International Recognition</td>
        <td>ISO and NABH accredited facility</td>
      </tr>
      <tr>
        <td>Community Outreach</td>
        <td>Organized over 500 free health check-up camps</td>
      </tr>
      <tr>
        <td>Patient Satisfaction Awards</td>
        <td>Consistently rated highly for quality and ethics</td>
      </tr>
    </tbody>
  </table>
</section>

<!-- Special Programs -->
<section class="container py-5">
  <h2 class="mb-4">📰 VS Hospital Special Programs</h2>
  
  <div class="highlight mb-3">
    <h5 class="text-secondary">Cancer Care Milestone – Aug 2025</h5>
    <p>VS Hospital successfully treated over 10,000 cancer patients, establishing itself as a trusted name in advanced oncology care in Tamil Nadu.</p>
  </div>

  <div class="highlight mb-3">
    <h5 class="text-secondary">Free Health Awareness Camp – Sep 20, 2025</h5>
    <p>A comprehensive health camp will be held at VS Hospital, offering free cancer screenings, blood tests, and doctor consultations for the public.</p>
  </div>

  <div class="highlight mb-3">
    <h5 class="text-secondary">Launch of Advanced Radiation Therapy Unit – July 2025</h5>
    <p>The hospital introduced its state-of-the-art radiation therapy unit, providing precise cancer treatments with reduced side effects.</p>
  </div>

  <div class="highlight">
    <h5 class="text-secondary">National Recognition for Oncology Excellence</h5>
    <p>VS Hospital received national recognition for its cutting-edge oncology research and compassionate patient-centered cancer care.</p>
  </div>
</section>

<section class="container py-5 text-center">
  <h2 class="mb-4">🏥 VS Hospital in Numbers</h2>
  <div class="row">
    <div class="col-md-3">
      <h3 class="counter" data-target="250">0</h3>
      <p>Beds</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="150">0</h3>
      <p>Doctors</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="100000">0</h3>
      <p>Patients Annually</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="120">0</h3>
      <p>Research Publications</p>
    </div>
  </div>
</section>

<script>
  const countersVS = document.querySelectorAll('.counter');
  countersVS.forEach(counter => {
    counter.innerText = '0';
    const update = () => {
      const target = +counter.getAttribute('data-target');
      const current = +counter.innerText;
      const increment = target / 200;
      if (current < target) {
        counter.innerText = Math.ceil(current + increment);
        setTimeout(update, 10);
      } else {
        counter.innerText = target.toLocaleString(); // commas for readability
      }
    };
    update();
  });
</script>
<div style="position:fixed;bottom:50px;right:50px;z-index:1000;">
  <button class="btn btn-warning btn-lg" 
          style="font-size:20px; padding:12px 24px; border-radius:12px;" 
          onclick="alert('📞 Call VS Hospital: 044-40404040')">
    📞 Talk with us
  </button>
</div>

<div style="text-align:center; margin-top:20px; margin-bottom:20px;">
  <a href="https://vshospitals.com/book-appointment/" target="_blank" class="btn btn-success">✨ Your Health, Your Time – Book Now!</a>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
