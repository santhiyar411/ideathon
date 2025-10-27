<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PSG Hospital Details</title>
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

/* Fade-in Animation */
.header-content {
  animation: fadeIn 2s ease-in-out;
}

/* Title Hover Glow */
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

/* Map Container */
.map-container {
  border: 5px solid #20b2aa;
  border-radius: 15px;
  overflow: hidden;
}

/* Animations */
@keyframes gradientMove {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}
/* Lead Paragraph Styling */
.lead {
  font-size: 1.25rem;
  text-shadow: 1px 1px 6px rgba(0,0,0,0.2);
}

/* Keyframes for Gradient */
@keyframes gradientMove {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

/* Fade-in effect */
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
    <h1 class="header-title">PSG Hospitals - Coimbatore</h1>
    <p class="lead">A Legacy of Excellence in Healthcare & Medical Research</p>
  </div>
  
</header>

  <!-- Carousel -->
  <section class="container">
    <div id="hospitalCarousel" class="carousel slide shadow" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://media-exp1.licdn.com/dms/image/C561BAQFkTJNGR91z5Q/company-background_10000/0/1595052066368?e=2147483647&v=beta&t=-f2j9Tk7pwuWyZcSAtchgCGxJlYOLpbzA3ZbVewQ06A" class="d-block w-100" alt="Hospital">
        </div>
        <div class="carousel-item">
          <img src="https://psgimsr.ac.in/wp-content/uploads/2024/02/WhatsApp-Image-2024-02-19-at-11.31.26-AM.jpeg " class="d-block w-100" alt="OT">
        </div>
        <div class="carousel-item">
          <img src="https://altosengineers.com/wp-content/uploads/2023/05/Modular-Operation-Theatre-for-Hospital-Modular-OT-Modular-Operation-Theater.jpeg" class="d-block w-100" alt="Campus">
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
      <p>Established in 1985 by the PSG & Sons’ Charities Trust, PSG Hospitals is affiliated with PSG Institute of Medical Sciences & Research (PSG IMSR), serving as a major tertiary care, teaching, and research center in Coimbatore.</p>
      <p>The hospital has a capacity of approximately <strong>1,400 beds</strong>, a skilled team of <strong>450+ doctors</strong>, and serves nearly <strong>900,000 patients annually</strong>.</p>
    </div>
  </section>

  <!-- Specializations -->
  <section class="container">
    <h2>Specializations</h2>
    <div class="row">
      <div class="col-md-6">
        <h4>Super Specialties</h4>
        <ul>
          <li>Cardiology & Preventive Cardiology</li>
          <li>Cardiothoracic & Vascular Surgery</li>
          <li>Endocrinology & Diabetology</li>
          <li>Gastroenterology</li>
          <li>Liver Transplant Surgery</li>
          <li>Medical Oncology</li>
          <li>Nephrology</li>
          <li>Neurology & Neurosurgery</li>
          <li>Pediatric Surgery</li>
          <li>Plastic Surgery</li>
          <li>Pulmonology</li>
          <li>Rheumatology</li>
          <li>Urology & Andrology</li>
        </ul>
      </div>
      <div class="col-md-6">
        <h4>Broad Specialties</h4>
        <ul>
          <li>Anaesthesiology</li>
          <li>Dermatology</li>
          <li>Dental Surgery</li>
          <li>ENT</li>
          <li>General & GI Surgery</li>
          <li>General Medicine</li>
          <li>Obstetrics & Gynaecology</li>
          <li>Ophthalmology</li>
          <li>Orthopaedics</li>
          <li>Pediatrics</li>
          <li>Psychiatry</li>
          <li>Radiology</li>
          <li>Yoga & Naturopathy</li>
        </ul>
      </div>
    </div>
  </section>
<section class="container py-5">
  <h2 class="text-center mb-4">Our Expert Doctors</h2>
  <div class="row">
    <!-- Doctor Card -->
    <div class="col-md-4">
      <div class="doctor-card p-4 text-center">

        <h5>Dr. S. Kumar</h5>
        <p>Cardiologist | 15 Years Experience</p>
        
      </div>
    </div>
    <!-- Doctor Card -->
    <div class="col-md-4">
      <div class="doctor-card p-4 text-center">
        
        <h5>Dr. Priya R.</h5>
        <p>Neurologist | 12 Years Experience</p>
        
      </div>
    </div>
    <!-- Doctor Card -->
    <div class="col-md-4">
      <div class="doctor-card p-4 text-center">

        <h5>Dr. V. Arjun</h5>
        <p>Oncologist | 10 Years Experience</p>
        
      </div>
    </div>
  </div>
</section>

<!-- Location Section -->
<section class="container py-5">
  <h2 class="text-center mb-4">Location</h2>
  <div class="map-container">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3921.249084472158!2d76.9996004!3d11.0272546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859a1f48bdbcb%3A0xfbe2ec14cafe78b2!2sPSG%20Hospitals!5e0!3m2!1sen!2sin!4v1691596358983!5m2!1sen!2sin" 
      width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
  </div>
</section>
  <!-- Facilities -->
  <section class="container">
    <h2>Facilities</h2>
    <ul>
      <li>24/7 Emergency Services</li>
      <li>Modular Operation Theatres with Laminar Airflow</li>
      <li>Multiple ICUs</li>
      <li>In-house Pharmacy</li>
      <li>Wellness Center: Yoga, Hydrotherapy, Sauna</li>
      <li>Various Room Types: General Ward to Deluxe Suites</li>
    </ul>
  </section>

  <!-- Achievements Table -->
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
          <td>NABH Certification</td>
          <td>First in Tamil Nadu, 3rd teaching hospital in India</td>
        </tr>
        <tr>
          <td>NABL Accreditation</td>
          <td>For laboratory services</td>
        </tr>
        <tr>
          <td>ISO 9001:2008</td>
          <td>Certified since 2008</td>
        </tr>
        <tr>
          <td>WHO–SIDCER</td>
          <td>Accredited Institutional Ethics Committee</td>
        </tr>
        <tr>
          <td>Heart Transplant Award 2024</td>
          <td>Best performance in heart transplantation</td>
        </tr>
        <tr>
          <td>Rankings</td>
          <td>Top 10 Indian hospitals by The Week–Hansa Survey</td>
        </tr>
      </tbody>
    </table>
  </section>

  <!-- Special Programs -->
  
  <!-- News & Updates Section -->
<section class="container py-5">
  <h2 class=" mb-4">📰 PSG Special Programs</h2>
  
  <div class="highlight mb-3">
    <h5 class="text-primary">New Heart Transplant Milestone Achieved – Aug 2025</h5>
    <p>PSG Hospitals successfully performed its 100<sup>th</sup> heart transplant, marking a significant achievement in cardiac care in South India.</p>
  </div>

  <div class="highlight mb-3">
    <h5 class="text-primary">Free Eye Check-up Camp – Sep 15, 2025</h5>
    <p>Join us for a free community eye camp organized in association with PSG Institute of Ophthalmology. Open to all, from 9 AM to 4 PM at the Outpatient Block.</p>
  </div>

  <div class="highlight mb-3">
    <h5 class="text-primary">Launch of New MRI Unit – July 2025</h5>
    <p>The Radiology Department now has a state-of-the-art 3 Tesla MRI machine, offering faster and more accurate diagnostics.</p>
  </div>

  <div class="highlight">
    <h5 class="text-primary">Santham Hospice Unit Recognized Nationally</h5>
    <p>“Santham”, PSG's palliative care unit, received national recognition by the Indian Association of Palliative Care for excellence in compassionate care.</p>
  </div>
</section>
<section class="container py-5 text-center">
  <h2 class="mb-4">🏥 Our Impact in Numbers</h2>
  <div class="row">
    <div class="col-md-3">
      <h3 class="counter" data-target="1400">0</h3>
      <p>Beds</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="450">0</h3>
      <p>Doctors</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="900000">0</h3>
      <p>Patients Annually</p>
    </div>
    <div class="col-md-3">
      <h3 class="counter" data-target="500">0</h3>
      <p>Research Publications</p>
    </div>
  </div>
</section>

<script>
  const counters = document.querySelectorAll('.counter');
  counters.forEach(counter => {
    counter.innerText = '0';
    const update = () => {
      const target = +counter.getAttribute('data-target');
      const current = +counter.innerText;
      const increment = target / 200;
      if(current < target) {
        counter.innerText =Math.ceil(current + increment);
        setTimeout(update, 10);
      } else {
        counter.innerText = target;
      }
    };
    update();
  });
</script>
<div style="position:fixed;bottom:50px;right:50px;">
  <button class="btn btn-info btn-lg" 
          style="font-size:20px; padding:10px 20px;" 
          onclick="alert(' Call 0422-2570170 ')">
     Talk with us
  </button>
</div>


<div style="text-align:center; margin-top:20px; margin-bottom:20px;">
  <a href="https://www.psghospitals.com/book-an-appointment/" target="_blank" class="btn btn-success">✨ Your Health, Your Time – Book Now!</a>
</div>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>