<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apollo Hospital Details</title>
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
    <h1 class="header-title">Apollo Hospitals - Chennai</h1>
    <p class="lead">Pioneers in Modern Healthcare with Global Standards</p>
  </div>
</header>

<!-- Carousel -->
<section class="container">
  <div id="hospitalCarousel" class="carousel slide shadow" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://media.assettype.com/gulfnews/import/2019/08/22/Apollo-Hospital-20190822_16cb847ab36_large.jpg?w=1200&h=675&auto=format%2Ccompress&fit=max&enlarge=true" class="d-block w-100" alt="Apollo Hospital Chennai">
      </div>
      <div class="carousel-item">
        <img src="https://www.apolloinformationcentre.com/wp-content/uploads/2019/07/int-hdr-expertise-3.jpg" class="d-block w-100" alt="Apollo OT">
      </div>
      <div class="carousel-item">
        <img src="https://my1healthstorage.blob.core.windows.net/my1health/blogs/MkX7mL7TyiU62OR57yEPr4uqX0y1Ajd5wahkfaaL.webp" class="d-block w-100" alt="Apollo Campus">
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
    <p>Apollo Hospitals, established in 1983 in Chennai, Tamil Nadu, is one of Asia’s leading healthcare providers, offering comprehensive medical services and advanced treatments with cutting-edge technology.</p>
    <p>With a capacity of over <strong>500 beds</strong> and more than <strong>200 senior consultants</strong>, Apollo serves millions of patients from across India and over 120 countries worldwide.</p>
  </div>
</section>

<!-- Specializations -->
<section class="container">
  <h2>Specializations</h2>
  <div class="row">
    <div class="col-md-6">
      <h4>Super Specialties</h4>
      <ul>
        <li>Cardiology & Heart Transplants</li>
        <li>Neurosciences</li>
        <li>Orthopaedics & Robotic Joint Replacement</li>
        <li>Medical & Surgical Oncology</li>
        <li>Gastroenterology & Hepatology</li>
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

        <h5>Dr. M. Ramesh</h5>
        <p>Cardiac Surgeon | 20 Years Experience</p>
        
      </div>
    </div>
    <div class="col-md-4">
      <div class="doctor-card p-4 text-center">

        <h5>Dr. Priya Natarajan</h5>
        <p>Oncologist | 15 Years Experience</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="doctor-card p-4 text-center">

        <h5>Dr. Arun Kumar</h5>
        <p>Neurologist | 12 Years Experience</p>
        
      </div>
    </div>
  </div>
</section>

<!-- Location -->
<section class="container py-5">
  <h2 class="text-center mb-4">Location</h2>
  <div class="map-container">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.108078931453!2d80.23700257415378!3d13.066835413328606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267e02d4f65c3%3A0xf9e3b6bb1b6b9a2e!2sApollo%20Hospitals%20Greams%20Road!5e0!3m2!1sen!2sin!4v1691596358983!5m2!1sen!2sin" 
      width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
  </div>
</section>

<!-- Facilities -->
<section class="container">
  <h2>Facilities</h2>
  <ul>
    <li>24/7 Emergency & Trauma Care</li>
    <li>Advanced Robotic Surgery Systems</li>
    <li>Critical Care Units</li>
    <li>Pharmacy & Diagnostic Services</li>
    <li>Wellness and Preventive Health Check-ups</li>
    <li>International Patient Assistance</li>
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
        <td>JCI Accreditation</td>
        <td>Recognized for global healthcare standards</td>
      </tr>
      <tr>
        <td>ISO Certification</td>
        <td>ISO 9001:2015 Certified</td>
      </tr>
      <tr>
        <td>Organ Transplant Leader</td>
        <td>Performed over 20,000 transplants</td>
      </tr>
      <tr>
        <td>Global Recognition</td>
        <td>Patients from over 120 countries</td>
      </tr>
    </tbody>
  </table>
</section>

<!-- Special Programs -->
<section class="container py-5">
  <h2 class="mb-4">📰 Apollo Hospital Special Programs</h2>
  
  <div class="highlight mb-3">
    <h5 class="text-info">Heart Surgery Milestone – Aug 2025</h5>
    <p>Apollo Hospital successfully completed its 5,000<sup>th</sup> open-heart surgery, reaffirming its position as a global leader in cardiac care.</p>
  </div>

  <div class="highlight mb-3">
    <h5 class="text-info">Free Cancer Screening Camp – Sep 12, 2025</h5>
    <p>Apollo is organizing a free cancer awareness and screening camp, offering mammograms, pap smears, and oral cancer check-ups for early detection.</p>
  </div>

  <div class="highlight mb-3">
    <h5 class="text-info">Launch of Robotic Cardiac Surgery Unit – July 2025</h5>
    <p>The hospital introduced its advanced robotic cardiac surgery system, enabling precise, minimally invasive procedures with quicker recovery.</p>
  </div>

  <div class="highlight">
    <h5 class="text-info">Global Recognition for Excellence in Healthcare</h5>
    <p>Apollo Hospital was awarded by the International Hospital Federation for its pioneering contributions to patient care and medical technology.</p>
  </div>
</section>


<section class="container py-5 text-center">
  <h2 class="mb-4">🏥 Apollo Hospital in Numbers</h2>
  <div class="row">
    <div class="col-md-3">
      <h3 class="counter" data-target="10000">0</h3>
      <p>Beds</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="7500">0</h3>
      <p>Doctors</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="2000000">0</h3>
      <p>Patients Annually</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="1200">0</h3>
      <p>Research Publications</p>
    </div>
  </div>
</section>

<script>
  const countersApollo = document.querySelectorAll('.counter');
  countersApollo.forEach(counter => {
    counter.innerText = '0';
    const update = () => {
      const target = +counter.getAttribute('data-target');
      const current = +counter.innerText;
      const increment = target / 200;
      if(current < target) {
        counter.innerText = Math.ceil(current + increment);
        setTimeout(update, 10);
      } else {
        counter.innerText = target.toLocaleString(); // add commas for readability
      }
    };
    update();
  });
</script>

<div style="position:fixed;bottom:50px;right:50px;z-index:1000;">
  <button class="btn btn-danger btn-lg" 
          style="font-size:20px; padding:12px 24px; border-radius:12px;" 
          onclick="alert('📞 Call Apollo Hospital: 044-28293333')">
    📞 Talk with us
  </button>
</div>

<div style="text-align:center; margin-top:20px; margin-bottom:20px;">
  <a href="https://www.apollohospitals.com/doctors" target="_blank" class="btn btn-success">✨ Your Health, Your Time – Book Now!</a>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
