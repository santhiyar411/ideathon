<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KMCH Hospital Details</title>
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
    <h1 class="header-title">KMCH Hospitals - Coimbatore</h1>
    <p class="lead">Excellence in Multi-Specialty Healthcare & Advanced Treatments</p>
  </div>
</header>

<!-- Carousel -->
<section class="container">
  <div id="hospitalCarousel" class="carousel slide shadow" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://www.healthcareradius.in/cloud/2021/11/15/42.jpg" class="d-block w-100" alt="Hospital">
      </div>
      <div class="carousel-item">
        <img src="https://cuboidglobal.com/images/projects/kmch-comprehensive-cancer-care/_projectList/MG_2462.jpg" class="d-block w-100" alt="OT">
      </div>
      <div class="carousel-item">
        <img src="https://mdmsenquiry.com/wp-content/uploads/2022/08/KMCH-Institute-of-Health-Sciences-and-Research-Coimbatore.jpg" class="d-block w-100" alt="Campus">
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
    <p>Kovai Medical Center and Hospital (KMCH) is a 1,000-bed multi-disciplinary super specialty hospital located in Coimbatore, Tamil Nadu, providing world-class health care services since 1990.</p>
    <p>With a team of over <strong>350 doctors</strong> and state-of-the-art medical facilities, KMCH serves lakhs of patients every year from across India and abroad.</p>
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
        <li>Neurosciences</li>
        <li>Orthopaedics & Joint Replacement</li>
        <li>Medical & Surgical Oncology</li>
        <li>Gastroenterology</li>
        <li>Organ Transplants</li>
        <li>Plastic & Reconstructive Surgery</li>
        <li>Urology</li>
        <li>Nephrology</li>
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
       
        <h5>Dr. R. Manoharan</h5>
        <p>Cardiologist | 18 Years Experience</p>
        
      </div>
    </div>
    <div class="col-md-4">
      <div class="doctor-card p-4 text-center">
        
        <h5>Dr. Anitha S.</h5>
        <p>Oncologist | 14 Years Experience</p>
        
      </div>
    </div>
    <div class="col-md-4">
      <div class="doctor-card p-4 text-center">

        <h5>Dr. P. Karthik</h5>
        <p>Neurologist | 11 Years Experience</p>
        
      </div>
    </div>
  </div>
</section>

<!-- Location -->
<!-- Location Section -->
<section class="container py-5">
  <h2 class="text-center mb-4">Location</h2>
  <div class="map-container">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3921.269937496338!2d77.00593957411694!3d11.026200354756946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859b6408bbf17%3A0xa4c9ff83c9c3e96!2sKovai%20Medical%20Center%20and%20Hospital%20(KMCH)!5e0!3m2!1sen!2sin!4v1691596358983!5m2!1sen!2sin" 
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
  <table class="table table-bordered custom-table">
    <thead>
      <tr>
        <th>Achievement</th>
        <th>Details</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>NABH Accreditation</td>
        <td>Recognized for quality and patient safety</td>
      </tr>
      <tr>
        <td>ISO Certification</td>
        <td>ISO 9001:2015 Certified</td>
      </tr>
      <tr>
        <td>Organ Transplant Leader</td>
        <td>Pioneer in liver, kidney, and heart transplants</td>
      </tr>
      <tr>
        <td>International Recognition</td>
        <td>Serves patients from over 30 countries</td>
      </tr>
    </tbody>
  </table>
</section>

<!-- Special Programs -->
<section class="container py-5">
  <h2 class="mb-4">📰 KMCH Special Programs</h2>
  
  <div class="highlight mb-3">
    <h5 class="text-success">Successful Liver Transplant Milestone – Aug 2025</h5>
    <p>KMCH proudly completed its 250<sup>th</sup> liver transplant, making it one of the leading transplant centers in South India.</p>
  </div>

  <div class="highlight mb-3">
    <h5 class="text-success">Mega Diabetes Awareness Camp – Sep 21, 2025</h5>
    <p>A large-scale community diabetes camp will be held at KMCH, offering free screenings, diet consultations, and awareness programs.</p>
  </div>

  <div class="highlight mb-3">
    <h5 class="text-success">Robotic Surgery Unit Expansion – July 2025</h5>
    <p>KMCH launched its advanced robotic surgery wing, enabling minimally invasive procedures with faster recovery times.</p>
  </div>

  <div class="highlight">
    <h5 class="text-success">KMCH Cancer Center Receives National Award</h5>
    <p>The KMCH Cancer Center was honored with the National Healthcare Excellence Award for pioneering oncology treatments.</p>
  </div>
</section>


<section class="container py-5 text-center">
  <h2 class="mb-4">🏥 KMCH Hospital in Numbers</h2>
  <div class="row">
    <div class="col-md-3">
      <h3 class="counter" data-target="1200">0</h3>
      <p>Beds</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="500">0</h3>
      <p>Doctors</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="600000">0</h3>
      <p>Patients Annually</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="300">0</h3>
      <p>Research Publications</p>
    </div>
  </div>
</section>

<script>
  const countersKMCH = document.querySelectorAll('.counter');
  countersKMCH.forEach(counter => {
    counter.innerText = '0';
    const update = () => {
      const target = +counter.getAttribute('data-target');
      const current = +counter.innerText;
      const increment = target / 200;
      if(current < target) {
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
  <button class="btn btn-success btn-lg" 
          style="font-size:20px; padding:12px 24px; border-radius:12px;" 
          onclick="alert('📞 Call KMCH: 0422-4323800')">
    📞 Talk with us
  </button>
</div>

<div style="text-align:center; margin-top:20px; margin-bottom:20px;">
  <a href="https://www.kmchhospitals.com/doctors-contact-numbers/" target="_blank" class="btn btn-success">✨ Your Health, Your Time – Book Now!</a>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
