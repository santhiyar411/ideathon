<?php
// about.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - MediConnect</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background: url('content.png') no-repeat center center/cover; /* Change to your image path */
        }

        /* Dark overlay for readability */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.7);
            z-index: -1;
        }

        /* Gradient Header */
        header {
            background: linear-gradient(135deg, rgba(13, 253, 249, 1), #4e9efc);
            color: white;
            padding: 30px 0 20px;
            text-align: center;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
        }

        header h1 {
            margin: 0;
            font-size: 34px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        /* Home Button */
        header nav a {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 20px;
            background: white;
            color: #0d6efd;
            border-radius: 25px;
            font-size: 16px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
        }

        header nav a:hover {
            background: #0d6efd;
            color: white;
            border: 1px solid white;
        }

        /* About Container with slight transparency */
        .about-container {
            max-width: 1000px;
            margin: 40px auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 4px 20px rgba(0,0,0,0.1);
            animation: fadeIn 1s ease-in-out;
        }

        h2 {
            color: #1c1e1f66;
            font-weight: bold;
        }

        ul {
            margin-top: 10px;
            margin-bottom: 20px;
        }

        ul li {
            margin-bottom: 10px;
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #0d6efd, #4e9efc);
            color: white;
            text-align: center;
            padding: 14px;
            margin-top: 50px;
            font-size: 15px;
        }
       

        /* Animation */
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>

    <header>
        <h1>MediConnect</h1>
        <nav>
            <a href="doctors.php">Home</a>
        </nav>
    </header>
 
    <div class="about-container">
        <p>
            At <strong>MediConnect</strong>, we believe that finding the right healthcare should be simple, quick, and accurate.
            Our platform is designed to help patients and caregivers connect with the most suitable hospitals based on their medical specialisation needs
            and preferred location.
        </p>

        <h2>With our smart filter system, users can:</h2>
        <ul>
            <li>Search for hospitals by speciality (Cardiology, Neurology, Orthopaedics, etc.)</li>
            <li>Refine results based on location proximity for convenience and emergencies</li>
            <li>View hospital profiles, facilities, and ratings to make informed decisions</li>
        </ul>

        <p>
            Our goal is to remove the stress and confusion from hospital selection, especially in critical situations,
            by delivering reliable, up-to-date, and verified information.
        </p>

        <h2>We are committed to:</h2>
        <ul>
            <li><strong>Accuracy</strong> – Verified hospital data from trusted sources</li>
            <li><strong>Ease of Use</strong> – Simple, intuitive search and filtering features</li>
            <li><strong>Patient Empowerment</strong> – Helping you make confident healthcare choices</li>
        </ul>

        <p>
            Your health matters, and so does your time. With MediConnect, you get the right hospital, in the right place, at the right time.
        </p>
    </div>

   
</body>
</html>
