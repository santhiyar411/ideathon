<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ganga Hospital Details</title>
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
    <h1 class="header-title">Ganga Hospital - Coimbatore</h1>
    <p class="lead">World-renowned centre for orthopaedics, trauma, and spine care.</p>
  </div>
</header>

<!-- Carousel -->
<section class="container">
  <div id="hospitalCarousel" class="carousel slide shadow" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://content.jdmagicbox.com/comp/coimbatore/c2/0422px422.x422.181117162755.f7c2/catalogue/ganga-hospital-coimbatore-coimbatore-cleft-lip-and-palate-treatment-8xg23ug23u.jpg" class="d-block w-100" alt="Hospital">
      </div>
      <div class="carousel-item">
        <img src="https://www.gangahospital.com/public/assets/images/hospital_facilities/Siemens-3T-MRI-min.jpg" class="d-block w-100" alt="OT">
      </div>
      <div class="carousel-item">
        <img src="https://www.gangahospital.com/public/assets/images/about/college_pic.jpg" class="d-block w-100" alt="Campus">
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
    <p>Ganga Hospital, based in Coimbatore, is a globally acclaimed super-speciality hospital 
    known for orthopaedics, trauma, plastic surgery, and spine surgery. With cutting-edge 
    medical infrastructure and a team of highly skilled doctors, Ganga Hospital attracts 
    patients from across India and abroad for advanced treatments.</p>
  </div>
</section>

<!-- Specializations -->
<section class="container">
  <h2>Specializations</h2>
  <div class="row">
    <div class="col-md-6">
      <h4>Super Specialties</h4>
      <ul>
        <li>Orthopaedics & Joint Replacement</li>
        <li>Trauma Surgery</li>
        <li>Plastic & Reconstructive Surgery</li>
        <li>Spine Surgery</li>
        <li>Microsurgery</li>
        <li>Sports Medicine</li>
        <li>Hand Surgery</li>
        <li>Arthroscopy</li>
      </ul>
    </div>
    <div class="col-md-6">
      <h4>Broad Specialties</h4>
      <ul>
        <li>General Surgery</li>
        <li>General Medicine</li>
        <li>Anaesthesiology</li>
        <li>Radiology</li>
        <li>Physiotherapy & Rehabilitation</li>
        <li>Plastic Burns Unit</li>
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
        <h5>Dr. S. Rajasekaran</h5>
        <p>Orthopaedic & Spine Surgeon | 35 Years Experience</p>
        
      </div>
    </div>
    <div class="col-md-4">
      <div class="doctor-card p-4 text-center">
        <h5>Dr. R. Shivashankar</h5>
        <p>Plastic & Reconstructive Surgeon | 30 Years Experience</p>
       
      </div>
    </div>
    <div class="col-md-4">
      <div class="doctor-card p-4 text-center">
        <h5>Dr. Shanmuganathan Rajasekaran</h5>
        <p>Spine Surgeon | 20 Years Experience</p>
        
      </div>
    </div>
  </div>
</section>

<!-- Location -->
<section class="container py-5">
  <h2 class="text-center mb-4">Location</h2>
  <div class="map-container">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.378215588413!2d76.96774647412034!3d11.013745654853658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859aa8b5ab0a7%3A0x3d2b049d072a6168!2sGanga%20Hospital!5e0!3m2!1sen!2sin!4v1691597901234!5m2!1sen!2sin" 
      width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
  </div>
</section>

<!-- Facilities -->
<section class="container">
  <h2>Facilities</h2>
  <ul>
    <li>24/7 Emergency and Trauma Care</li>
    <li>Advanced Modular Operation Theatres</li>
    <li>Specialized ICU Units</li>
    <li>State-of-the-art Imaging and Diagnostics</li>
    <li>International Patient Services</li>
    <li>Physiotherapy and Rehabilitation Centre</li>
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
        <td>Global Recognition</td>
        <td>Ranked among top orthopaedic hospitals in Asia</td>
      </tr>
      <tr>
        <td>Clinical Excellence</td>
        <td>Pioneered advanced spine and trauma surgeries in India</td>
      </tr>
      <tr>
        <td>International Awards</td>
        <td>Recipient of AO Spine Awards and ISAKOS recognitions</td>
      </tr>
      <tr>
        <td>Research & Innovation</td>
        <td>Published over 500 peer-reviewed papers in orthopaedics</td>
      </tr>
      <tr>
        <td>Teaching Centre</td>
        <td>Recognized training centre for national and international fellows</td>
      </tr>
    </tbody>
  </table>
</section>

<!-- Special Programs -->
<section class="container py-5">
  <h2 class="mb-4">📰 Ganga Hospital Special Programs</h2>
  
  <div class="highlight mb-3">
    <h5 class="text-warning">Spine Surgery Excellence Milestone – Aug 2025</h5>
    <p>Ganga Hospital successfully performed its 1,000<sup>th</sup> spine surgery, strengthening its reputation as a leader in orthopedic and neurosurgical care.</p>
  </div>

  <div class="highlight mb-3">
    <h5 class="text-warning">Free Bone & Joint Health Camp – Sep 25, 2025</h5>
    <p>A free orthopedic camp will be organized at Ganga Hospital, offering consultations, physiotherapy guidance, and bone density screenings for the public.</p>
  </div>

  <div class="highlight mb-3">
    <h5 class="text-warning">Launch of Advanced Rehabilitation Center – July 2025</h5>
    <p>The hospital inaugurated a modern rehabilitation center with world-class physiotherapy, sports injury recovery, and post-surgery care facilities.</p>
  </div>

  <div class="highlight">
    <h5 class="text-warning">National Award for Trauma & Emergency Care</h5>
    <p>Ganga Hospital received national recognition for its excellence in handling trauma and emergency care with high survival success rates.</p>
  </div>
</section>

<section class="container py-5 text-center">
  <h2 class="mb-4">🏥 Ganga Hospital in Numbers</h2>
  <div class="row">
    <div class="col-md-3">
      <h3 class="counter" data-target="650">0</h3>
      <p>Beds</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="300">0</h3>
      <p>Doctors</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="400000">0</h3>
      <p>Patients Annually</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="200">0</h3>
      <p>Research Publications</p>
    </div>
  </div>
</section>

<script>
  const countersGanga = document.querySelectorAll('.counter');
  countersGanga.forEach(counter => {
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
  <button class="btn btn-secondary btn-lg" 
          style="font-size:20px; padding:12px 24px; border-radius:12px;" 
          onclick="alert('📞 Call Ganga Hospital: 0422-2485000')">
    📞 Talk with us
  </button>
</div>

<div style="text-align:center; margin-top:20px; margin-bottom:20px;">
  <a href="https://www.gangahospital.com/appointment" target="_blank" class="btn btn-success">✨ Your Health, Your Time – Book Now!</a>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
