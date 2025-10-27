<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fortis Malar Hospital Details</title>
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
    <h1 class="header-title">Fortis Malar Hospitals - Chennai</h1>
    <p class="lead"> Large hospital network with locations across India. </p>
  </div>
</header>

<!-- Carousel -->
<section class="container">
  <div id="hospitalCarousel" class="carousel slide shadow" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://clinicsoncall.com/wp-content/uploads/2021/04/klinika-fortis-malyar-glavnaya.jpg" class="d-block w-100" alt="Hospital">
      </div>
      <div class="carousel-item">
        <img src="https://cdn.zeebiz.com/sites/default/files/2023/11/25/270323-hospital.jpg" class="d-block w-100" alt="OT">
      </div>
      <div class="carousel-item">
        <img src="https://ortil.com/storage/import/imagegallery/20211102_180608_XnU4O.jpg" class="d-block w-100" alt="Campus">
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
    <p>Fortis Malar Hospital, located in the heart of Chennai, is a leading multi-speciality hospital offering 
    advanced healthcare services and patient-centric care. With top medical professionals and modern technology, 
    Fortis Malar provides comprehensive treatment in multiple disciplines.
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
        <li>Medical & Surgical Oncology</li>
        <li>Nephrology</li>
        <li>Orthopaedics</li>
        <li>Gynaecology</li>
        <li>Urology</li>
        <li>Nephrology</li>
        
        
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
        <li>Radiology</li>
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
       
        <h5>Dr. Udhaya Shankar</h5>
        <p>Orthopaedic | 18 Years Experience</p>
        
      </div>
    </div>
    <div class="col-md-4">
      <div class="doctor-card p-4 text-center">
        
        <h5>Dr. Suryakumari Karyampudi</h5>
        <p>Gynaecologist | 14 Years Experience</p>
        
      </div>
    </div>
    <div class="col-md-4">
      <div class="doctor-card p-4 text-center">

        <h5>Dr. Radhi Malar Anand</h5>
        <p>Ophthalmologist | 11 Years Experience</p>
        
      </div>
    </div>
  </div>
</section>

<!-- Location -->
<section class="container py-5">
  <h2 class="text-center mb-4">Location</h2>
  <div class="map-container">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.583727045179!2d80.2576203741547!3d13.019328090839168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267a9a5e33eeb%3A0xf1f5d660ba4cb45a!2sFortis%20Malar%20Hospital!5e0!3m2!1sen!2sin!4v1691597901234!5m2!1sen!2sin" 
      width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
  </div>
</section>

<!-- Facilities -->
<section class="container">
  <h2>Facilities</h2>
  <ul>
    <li>24/7 Emergency Care</li>
    <li>Advanced Modular Operation Theatres</li>
    <li>Critical Care Units</li>
    <li>Pharmacy & Diagnostic Labs</li>
    <li>Wellness and Preventive Health Packages</li>
    <li>International Patient Services</li>
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
          <td>Accreditations</td>
          <td>JCI / NABH </td>
        </tr>
        <tr>
          <td>ISO Certification</td>
          <td>ISO 9001:2015 — Quality management systems</td>
        </tr>
        <tr>
          <td>Clinical Milestones</td>
          <td>Landmark heart, liver & kidney transplants and high-volume cardiac procedures</td>
        </tr>
        <tr>
          <td>Patient Safety Awards</td>
          <td>Regional & national recognition for patient safety initiatives and infection control</td>
        </tr>
        <tr>
          <td>Research & Training</td>
          <td>Active clinical trials, CMEs and training programs for medical professionals</td>
        </tr>
        <tr>
          <td>Community Programs</td>
          <td>Regular outreach camps, screening drives and organ-donation awareness programs</td>
        </tr>
      </tbody>
    </table>
  

<!-- Special Programs -->
<section class="container">
  <h2>Special Programs</h2>
  <div class="highlight">
    <p> Healthy Heart Club, Cancer Care, Organ Transplant Support, Women's Wellness, Senior Citizen Care, Corporate Wellness.</p>

  </div>
</section>

<section class="container py-5 text-center">
  <h2 class="mb-4">🏥 Fortis Hospital in Numbers</h2>
  <div class="row">
    <div class="col-md-3">
      <h3 class="counter" data-target="400">0</h3>
      <p>Beds</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="280">0</h3>
      <p>Doctors</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="85000">0</h3>
      <p>Patients Annually</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="95">0</h3>
      <p>Research Publications</p>
    </div>
  </div>
</section>

<script>
  const countersFortis = document.querySelectorAll('.counter');
  countersFortis.forEach(counter => {
    counter.innerText = '0';
    const update = () => {
      const target = +counter.getAttribute('data-target');
      const current = +counter.innerText;
      const increment = target / 200;
      if (current < target) {
        counter.innerText = Math.ceil(current + increment);
        setTimeout(update, 10);
      } else {
        counter.innerText = target.toLocaleString(); // adds commas for readability
      }
    };
    update();
  });
</script>
<div style="position:fixed;bottom:50px;right:50px;z-index:1000;">
  <button class="btn btn-success btn-lg" 
          style="font-size:20px; padding:12px 24px; border-radius:12px;" 
          onclick="alert('📞 Call Fortis Hospital: 044-42002288')">
    📞 Talk with us
  </button>
</div>

<div style="text-align:center; margin-top:20px; margin-bottom:20px;">
  <a href="https://www.fortishealthcare.com/doctors?location=all" target="_blank" class="btn btn-success">✨ Your Health, Your Time – Book Now!</a>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
