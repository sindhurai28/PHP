<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Developer CV - Sindhu</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif}
body{
    background:linear-gradient(120deg,#e0eafc,#cfdef3);
    padding:40px 0;
}
.cv{
    width:900px;
    margin:auto;
    background:#fff;
    display:flex;
    box-shadow:0 15px 40px rgba(0,0,0,0.2);
    border-radius:10px;
    overflow:hidden;
}
.left{
    width:35%;
    background:#1f2937;
    color:#fff;
    padding:30px;
}
.left h1{
    font-size:28px;
    margin-bottom:5px;
}
.left p{
    font-size:14px;
    margin:6px 0;
}
.left h2{
    margin-top:25px;
    font-size:18px;
    border-bottom:1px solid #555;
    padding-bottom:6px;
}
.left ul{
    margin-top:10px;
    list-style:none;
}
.left ul li{
    margin:8px 0;
    font-size:14px;
}
.right{
    width:65%;
    padding:30px 40px;
}
.section{
    margin-bottom:25px;
}
.section h2{
    font-size:20px;
    color:#1f2937;
    margin-bottom:10px;
    border-left:5px solid #1f2937;
    padding-left:10px;
}
.section p, .section li{
    font-size:14px;
    line-height:1.6;
    color:#333;
}
table{
    width:100%;
    border-collapse:collapse;
    margin-top:10px;
}
th,td{
    border:1px solid #ccc;
    padding:8px;
    font-size:14px;
    text-align:left;
}
.project{
    margin-bottom:12px;
}
</style>
</head>
<body>

<?php
$name = "Sindhu";
$phone = "+91-XXXXXXXXXX";
$email = "yourmail@gmail.com";
$linkedin = "linkedin.com/in/yourprofile";
$github = "github.com/yourusername";
?>

<div class="cv">

<div class="left">
    <h1><?php echo $name; ?></h1>
    <p>PHP Developer</p>
    <p>📞 <?php echo $phone; ?></p>
    <p>✉ <?php echo $email; ?></p>
    <p>🔗 <?php echo $linkedin; ?></p>
    <p>💻 <?php echo $github; ?></p>

    <h2>Technical Skills</h2>
    <ul>
        <li>PHP, MySQL</li>
        <li>HTML, CSS, JavaScript</li>
        <li>Bootstrap</li>
        <li>CRUD, Sessions, Cookies</li>
        <li>OOPs, DBMS</li>
        <li>Git, XAMPP</li>
    </ul>

    <h2>Strengths</h2>
    <ul>
        <li>Quick Learner</li>
        <li>Problem Solver</li>
        <li>Team Player</li>
        <li>Debugging Skills</li>
    </ul>

    <h2>Languages</h2>
    <ul>
        <li>English</li>
        <li>Hindi</li>
    </ul>
</div>

<div class="right">

    <div class="section">
        <h2>Career Objective</h2>
        <p>
            Motivated MCA student with strong knowledge of PHP and web technologies.
            Seeking a role as a PHP Developer to apply my backend skills in building
            scalable web applications and gain real industry experience.
        </p>
    </div>

    <div class="section">
        <h2>Education</h2>
        <table>
            <tr>
                <th>Degree</th>
                <th>Institution</th>
                <th>Year</th>
            </tr>
            <tr>
                <td>MCA</td>
                <td>Lovely Professional University</td>
                <td>2024–2026</td>
            </tr>
            <tr>
                <td>BCA</td>
                <td>—</td>
                <td>2021–2024</td>
            </tr>
        </table>
    </div>

    <div class="section">
        <h2>Projects</h2>

        <div class="project">
            <b>Trip Planner Web Application</b>
            <p>User authentication, trip booking, admin panel and responsive UI.</p>
        </div>

        <div class="project">
            <b>Weather-Based Clothing Suggestion App</b>
            <p>Weather API integration with dynamic clothing recommendations.</p>
        </div>

        <div class="project">
            <b>Car Showroom Management System</b>
            <p>Car listing management, search filters, and admin dashboard.</p>
        </div>

    </div>

</div>
</div>

</body>
</html>
