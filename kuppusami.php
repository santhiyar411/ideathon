<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kuppuswami Naidu Hospital Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
      line-height: 1.7;
    }
    .custom-header {
      background: linear-gradient(-45deg, #1976d2, #90caf9, #64b5f6, #1e88e5);
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
      border: 5px solid #1976d2;
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
      color: #1565c0;
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
      background-color: #1976d2;
      color: white;
    }
    .highlight {
      background-color: #e3f2fd;
      padding: 20px;
      border-radius: 8px;
    }
  </style>
</head>
<body>

<header class="custom-header text-center py-5">
  <div class="header-content">
    <h1 class="header-title">Kuppuswami Naidu Memorial Hospital - Coimbatore</h1>
    <p class="lead">Trusted multi-speciality hospital with a legacy of compassionate care.</p>
  </div>
</header>

<!-- Carousel -->
<section class="container">
  <div id="hospitalCarousel" class="carousel slide shadow" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://content3.jdmagicbox.com/v2/comp/coimbatore/79/0422p422std1500079/catalogue/g-kuppuswamy-naidu-memorial-hospital-papanaickenpalayam-coimbatore-private-hospitals-z4x79zehve.jpg" class="d-block w-100" alt="Hospital Building">
      </div>
      <div class="carousel-item">
        <img src="https://www.gknmhospital.org/Backend/public//images/specialities/facilities/2025/03/labour-operation%20-theatre.webp" class="d-block w-100" alt="Operation Theatre">
      </div>
      <div class="carousel-item">
        <img src="https://www.gknmhospital.org/images/cimages/outpatient-care-list-page.webp" class="d-block w-100" alt="Lobby Area">
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
    <p>Kuppuswami Naidu Memorial Hospital, located in Coimbatore, is one of the region’s oldest and most reputed healthcare institutions. Offering a blend of advanced medical technology and personalized patient care, the hospital serves both local and international patients.</p>
  </div>
</section>

<!-- Specializations -->
<section class="container">
  <h2>Specializations</h2>
  <div class="row">
    <div class="col-md-6">
      <h4>Super Specialties</h4>
      <ul>
        <li>Cardiology & Cardiac Surgery</li>
        <li>Neurology & Neurosurgery</li>
        <li>Orthopaedics & Joint Replacement</li>
        <li>Nephrology & Urology</li>
        <li>Oncology</li>
        <li>Gastroenterology</li>
        <li>Diabetology</li>
        <li>ENT Surgery</li>
      </ul>
    </div>
    <div class="col-md-6">
      <h4>Broad Specialties</h4>
      <ul>
        <li>General Medicine</li>
        <li>General Surgery</li>
        <li>Anaesthesiology</li>
        <li>Radiology</li>
        <li>Emergency & Critical Care</li>
        <li>Pediatrics</li>
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
        <h5>Dr. S. Rajendran</h5>
        <p>Senior Cardiologist | 28 Years Experience</p>
        
      </div>
    </div>
    <div class="col-md-4">
      <div class="doctor-card p-4 text-center">
        <h5>Dr. P. Nandhini</h5>
        <p>Consultant Oncologist | 18 Years Experience</p>
       
      </div>
    </div>
    <div class="col-md-4">
      <div class="doctor-card p-4 text-center">
        <h5>Dr. K. V. Ramesh</h5>
        <p>Orthopaedic Surgeon | 22 Years Experience</p>
        
      </div>
    </div>
  </div>
</section>

<!-- Location -->
<section class="container py-5">
  <h2 class="text-center mb-4">Location</h2>
  <div class="map-container">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3913.1196811271916!2d76.95126937401127!3d11.016782589151353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8590b2b80b7a5%3A0xb71db5f7df1c5e4!2sKuppuswami%20Naidu%20Memorial%20Hospital!5e0!3m2!1sen!2sin!4v1691597901234!5m2!1sen!2sin" 
      width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
  </div>
</section>

<!-- Facilities -->
<section class="container">
  <h2>Facilities</h2>
  <ul>
    <li>24/7 Emergency & Trauma Care</li>
    <li>Modern Operation Theatres</li>
    <li>Advanced ICUs & Critical Care Units</li>
    <li>Full-fledged Diagnostic Services</li>
    <li>International Patient Assistance</li>
    <li>Comprehensive Rehabilitation Services</li>
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
        <td>Legacy of Service</td>
        <td>Over 60 years of uninterrupted healthcare service</td>
      </tr>
      <tr>
        <td>Cardiac Excellence</td>
        <td>One of the most trusted cardiac care centres in Tamil Nadu</td>
      </tr>
      <tr>
        <td>Cancer Care Milestones</td>
        <td>Established advanced oncology department with modern technology</td>
      </tr>
      <tr>
        <td>Community Outreach</td>
        <td>Regular health camps benefiting rural areas</td>
      </tr>
      <tr>
        <td>Patient Satisfaction Awards</td>
        <td>Recognized for compassionate and ethical medical practices</td>
      </tr>
    </tbody>
  </table>
</section>

<!-- Special Programs -->
<section class="container py-5">
  <h2 class="mb-4">📰 Kuppuswamy Naidu Hospital Special Programs</h2>
  
  <div class="highlight mb-3">
    <h5 class="text-success">Cancer Treatment Milestone – Aug 2025</h5>
    <p>Kuppuswamy Naidu Hospital successfully treated 5,000 cancer patients, marking a major milestone in oncology and patient-centered care.</p>
  </div>

  <div class="highlight mb-3">
    <h5 class="text-success">Free Diabetes & Hypertension Camp – Sep 22, 2025</h5>
    <p>A special community health camp will be organized, offering free blood sugar checks, blood pressure screening, and lifestyle counseling.</p>
  </div>

  <div class="highlight mb-3">
    <h5 class="text-success">Launch of Pediatric Intensive Care Unit – July 2025</h5>
    <p>The hospital opened a modern PICU equipped with advanced life-support systems and specialized pediatric critical care services.</p>
  </div>

  <div class="highlight">
    <h5 class="text-success">Recognition for Community-Oriented Healthcare</h5>
    <p>Kuppuswamy Naidu Hospital was recognized for its dedicated outreach programs and affordable healthcare services for underprivileged communities.</p>
  </div>
</section>

<section class="container py-5 text-center">
  <h2 class="mb-4">🏥 Kuppuswami Naidu Hospital in Numbers</h2>
  <div class="row">
    <div class="col-md-3">
      <h3 class="counter" data-target="400">0</h3>
      <p>Beds</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="250">0</h3>
      <p>Doctors</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="80000">0</h3>
      <p>Patients Annually</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="100">0</h3>
      <p>Research Publications</p>
    </div>
  </div>
</section>

<script>
  const countersKNH = document.querySelectorAll('.counter');
  countersKNH.forEach(counter => {
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
  <button class="btn btn-primary btn-lg" 
          style="font-size:20px; padding:12px 24px; border-radius:12px;" 
          onclick="alert('📞 Call Kuppusami Hospital: 0422-2245000')">
    📞 Talk with us
  </button>
</div>

<div style="text-align:center; margin-top:20px; margin-bottom:20px;">
  <a href="https://www.gknmhospital.org/doctorlist" target="_blank" class="btn btn-success">✨ Your Health, Your Time – Book Now!</a>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
