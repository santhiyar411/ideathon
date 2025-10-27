<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Venkateshwara Hospitals Details</title>
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
    <h1 class="header-title">Venkateshwara Hospitals - Chennai</h1>
    <p class="lead">Excellence in Healthcare with Compassion and Care</p>
  </div>
</header>

<!-- Carousel -->
<section class="container">
  <div id="hospitalCarousel" class="carousel slide shadow" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://svmchrc.ac.in/wp-content/uploads/elementor/thumbs/IMG_6160-1-scaled-qy01wy2usqmolinu1pkipmu4o0xr09hls5uevi432s.webp" class="d-block w-100" alt="Hospital">
      </div>
      <div class="carousel-item">
        <img src="https://www.zaynhealthcare.com/images/hospitals/o9jTuZ0L/venkateshwara_2.webp" alt="Lobby">
      </div>
      <div class="carousel-item">
        <img src="https://www.practo.com/consumer-ui/_next/image?url=https%3A%2F%2Fimages1-fabric.practo.com%2Fpractices%2F1156642%2Fvenkateshwar-hospital-delhi-59b5043a9606d.jpeg&w=3840&q=75" class="d-block w-100" alt="Wards">
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
    <p>Venkateshwara Hospitals is one of Chennai’s most trusted multi-specialty healthcare institutions, delivering comprehensive medical care with a patient-first approach.</p>
    <p>Equipped with advanced medical technology, expert specialists, and state-of-the-art facilities, Venkateshwara Hospitals is committed to excellence in treatment and compassionate service.</p>
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
        <li>Nephrology & Urology</li>
        <li>Plastic & Cosmetic Surgery</li>
        <li>Pulmonology</li>
        <li>Liver Transplantation</li>
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
        <h5>Dr. R. Balaji</h5>
        <p>Cardiologist | 22 Years Experience</p>
       
      </div>
    </div>
    <div class="col-md-4">
      <div class="doctor-card p-4 text-center">
        <h5>Dr. Priya Menon</h5>
        <p>Oncologist | 17 Years Experience</p>
        
      </div>
    </div>
    <div class="col-md-4">
      <div class="doctor-card p-4 text-center">
        <h5>Dr. S. Karthik</h5>
        <p>Orthopaedic Surgeon | 14 Years Experience</p>
        
      </div>
    </div>
  </div>
</section>

<!-- Location -->
<section class="container py-5">
  <h2 class="text-center mb-4">Location</h2>
  <div class="map-container">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.0427757127476!2d80.21642127451702!3d12.976792315265572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5266ef7b91f9d5%3A0xbcccbacb6f6d6d2b!2sVenkateshwara%20Hospitals!5e0!3m2!1sen!2sin!4v1691600000000" 
      width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
  </div>
</section>

<!-- Facilities -->
<section class="container">
  <h2>Facilities</h2>
  <ul>
    <li>24/7 Emergency Care</li>
    <li>Modern Operation Theatres</li>
    <li>ICU, CCU & NICU Units</li>
    <li>Advanced Imaging & Diagnostics</li>
    <li>Pharmacy Services</li>
    <li>International Patient Support</li>
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
        <td>Patient Trust</td>
        <td>Recognized for exceptional patient satisfaction ratings</td>
      </tr>
      <tr>
        <td>Quality Accreditation</td>
        <td>NABH certified for excellence in healthcare</td>
      </tr>
      <tr>
        <td>Advanced Care</td>
        <td>Specialized in complex surgeries and multi-organ transplants</td>
      </tr>
    </tbody>
  </table>
</section>

<!-- Special Programs -->
<section class="container">
  <h2>Special Programs</h2>
  <div class="highlight">
    <p>Venkateshwara Hospitals organizes medical outreach programs, health checkup camps, and awareness drives to improve community health.</p>
  </div>
</section>

<section class="container py-5 text-center">
  <h2 class="mb-4">🏥 Venkateshwara Hospital in Numbers</h2>
  <div class="row">
    <div class="col-md-3">
      <h3 class="counter" data-target="400">0</h3>
      <p>Beds</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="220">0</h3>
      <p>Doctors</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="75000">0</h3>
      <p>Patients Annually</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="85">0</h3>
      <p>Research Publications</p>
    </div>
  </div>
</section>

<script>
  const countersVenkateshwara = document.querySelectorAll('.counter');
  countersVenkateshwara.forEach(counter => {
    counter.innerText = '0';
    const update = () => {
      const target = +counter.getAttribute('data-target');
      const current = +counter.innerText;
      const increment = target / 200;
      if (current < target) {
        counter.innerText = Math.ceil(current + increment);
        setTimeout(update, 10);
      } else {
        counter.innerText = target.toLocaleString(); // adds commas
      }
    };
    update();
  });
</script>
<div style="position:fixed;bottom:50px;right:50px;z-index:1000;">
  <button class="btn btn-warning btn-lg" 
          style="font-size:20px; padding:12px 24px; border-radius:12px;" 
          onclick="alert('📞 Call Venkateshwara Hospital: 044-61111111')">
    📞 Talk with us
  </button>
</div>

<div style="text-align:center; margin-top:20px; margin-bottom:20px;">
  <a href="https://www.venkateshwarhospitals.com/find-a-doctor.php" target="_blank" class="btn btn-success">✨ Your Health, Your Time – Book Now!</a>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
