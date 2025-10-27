<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ramakrishna Hospital Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
      line-height: 1.7;
    }
    .custom-header {
      background: linear-gradient(-45deg, #8f76ef, #e9e8ef, #a2eeea, #1ae4c9);
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
      text-shadow: 2px 2px 8px rgba(49, 6, 80, 0.3);
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
      border: 5px solid #20b2aa;
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
      color: #008185;
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
      background-color: #18b0df;
      color: white;
    }
    .highlight {
      background-color: #e9f7fe;
      padding: 20px;
      border-radius: 8px;
    }
  </style>
</head>
<body>

<header class="custom-header text-center py-5">
  <div class="header-content">
    <h1 class="header-title">Ramakrishna Hospital - Coimbatore</h1>
    <p class="lead">Excellence in Healthcare with Compassion & Trust</p>
  </div>
</header>

<!-- Carousel -->
<section class="container">
  <div id="hospitalCarousel" class="carousel slide shadow" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://srdch.ac.in/wp-content/uploads/2021/03/organisational-structure-scaled.jpg" class="d-block w-100" alt="Hospital">
      </div>
      <div class="carousel-item">
        <img src="https://www.sriramakrishnahospital.com/wp-content/uploads/2020/12/gy2.jpg" class="d-block w-100" alt="Ward">
      </div>
      <div class="carousel-item">
        <img src="https://images.jdmagicbox.com/comp/coimbatore/c2/0422px422.x422.110521125049.w7c2/catalogue/dr-swarna-kumar-sri-ramakrishna-hospital--sidhapudur-coimbatore-dermatologists-mW4aj0DOcO.jpg?clr=" class="d-block w-100" alt="Reception">
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
    <p>Ramakrishna Hospital is one of the most trusted healthcare institutions in Coimbatore, offering advanced medical services and patient-centered care for over four decades.</p>
    <p>With a commitment to excellence and compassion, the hospital is equipped with state-of-the-art facilities and a dedicated team of doctors, nurses, and specialists.</p>
  </div>
</section>

<!-- Specializations -->
<section class="container">
  <h2>Specializations</h2>
  <div class="row">
    <div class="col-md-6">
      <h4>Super Specialties</h4>
      <ul>
        <li>Cardiology & Cardiothoracic Surgery</li>
        <li>Neurology & Neurosurgery</li>
        <li>Orthopaedics & Joint Replacement</li>
        <li>Oncology</li>
        <li>Gastroenterology</li>
        <li>Nephrology</li>
        <li>Plastic & Reconstructive Surgery</li>
        <li>Urology</li>
        <li>Pulmonology</li>
      </ul>
    </div>
    <div class="col-md-6">
      <h4>Broad Specialties</h4>
      <ul>
        <li>General Medicine</li>
        <li>General Surgery</li>
        <li>Dermatology</li>
        <li>ENT</li>
        <li>Obstetrics & Gynaecology</li>
        <li>Ophthalmology</li>
        <li>Pediatrics</li>
        <li>Psychiatry</li>
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
        <h5>Dr. R. Kumar</h5>
        <p>Cardiothoracic Surgeon | 20 Years Experience</p>
        <div class="rating">★★★★★</div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="doctor-card p-4 text-center">
        <h5>Dr. Priya M.</h5>
        <p>Oncologist | 15 Years Experience</p>
        <div class="rating">★★★★☆</div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="doctor-card p-4 text-center">
        <h5>Dr. S. Naveen</h5>
        <p>Orthopaedic Surgeon | 12 Years Experience</p>
      </div>
    </div>
  </div>
</section>

<!-- Location -->
<section class="container py-5">
  <h2 class="text-center mb-4">Location</h2>
  <div class="map-container">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3921.415066627!2d76.9889873153348!3d11.016491192168936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8599cc0000001%3A0x6a75d6c2b9e938e!2sSri%20Ramakrishna%20Hospital!5e0!3m2!1sen!2sin!4v1691599000000" 
      width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
  </div>
</section>

<!-- Facilities -->
<section class="container">
  <h2>Facilities</h2>
  <ul>
    <li>24/7 Emergency & Trauma Care</li>
    <li>Advanced Operation Theatres</li>
    <li>ICU, CCU & NICU Units</li>
    <li>Comprehensive Diagnostic & Imaging</li>
    <li>Fully Equipped Pharmacy</li>
    <li>Health Check-up Packages</li>
  </ul>
</section>

<!-- Achievements -->
<section class="container">
  <h2>Achievements & Recognition</h2>
  <table class="table table-bordered custom-table">
    <thead>
      <tr>
        <th>Achievement</th>
        <th>Details</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Trusted for 45+ Years</td>
        <td>Serving the community with quality healthcare</td>
      </tr>
      <tr>
        <td>Accredited Excellence</td>
        <td>NABH & ISO certified hospital</td>
      </tr>
      <tr>
        <td>Advanced Cancer Care</td>
        <td>State-of-the-art oncology treatment</td>
      </tr>
    </tbody>
  </table>
</section>

<!-- Special Programs -->
<section class="container py-5">
  <h2 class="mb-4">📰 Ramakrishna Hospital Special Programs</h2>
  
  <div class="highlight mb-3">
    <h5 class="text-danger">Advanced Kidney Transplant Milestone – Aug 2025</h5>
    <p>Ramakrishna Hospital successfully completed 150 kidney transplants, setting new standards in nephrology and urology care.</p>
  </div>

  <div class="highlight mb-3">
    <h5 class="text-danger">Free Cardiac Screening Camp – Sep 10, 2025</h5>
    <p>A free cardiac health camp will be organized at Ramakrishna Hospital, offering ECG, echocardiogram, and blood pressure checks for the community.</p>
  </div>

  <div class="highlight mb-3">
    <h5 class="text-danger">Launch of Advanced Cath Lab – July 2025</h5>
    <p>The hospital inaugurated a new state-of-the-art Cath Lab, ensuring precise diagnosis and faster interventions for heart patients.</p>
  </div>

  <div class="highlight">
    <h5 class="text-danger">National Recognition for Women & Child Care Unit</h5>
    <p>Ramakrishna Hospital’s Women & Child Care Unit received national recognition for excellence in maternal and neonatal healthcare.</p>
  </div>
</section>


<section class="container py-5 text-center">
  <h2 class="mb-4">🏥 Ramakrishna Hospital in Numbers</h2>
  <div class="row">
    <div class="col-md-3">
      <h3 class="counter" data-target="500">0</h3>
      <p>Beds</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="300">0</h3>
      <p>Doctors</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="90000">0</h3>
      <p>Patients Annually</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="110">0</h3>
      <p>Research Publications</p>
    </div>
  </div>
</section>

<script>
  const countersRamakrishna = document.querySelectorAll('.counter');
  countersRamakrishna.forEach(counter => {
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
  <button class="btn btn-danger btn-lg" 
          style="font-size:20px; padding:12px 24px; border-radius:12px;" 
          onclick="alert('📞 Call Ramakrishna Hospital: 0422-4225252')">
    📞 Talk with us
  </button>
</div>

<div style="text-align:center; margin-top:20px; margin-bottom:20px;">
  <a href="https://www.sriramakrishnahospital.com/doctors/" target="_blank" class="btn btn-success">✨ Your Health, Your Time – Book Now!</a>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
