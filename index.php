<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Resume - Jen Raina R. Teodoro</title> 
    <link rel="stylesheet" href="style.css"> 
</head> 

<body> 
    <?php 
        $name = "Jen Raina R. Teodoro"; 
        $phoneNum = "+63-956-7416946"; 
        $email = "jrteodoro@fit.edu.ph"; 
        $location = "Manila, Philippines"; 
        $summary = "I am a student at Far Eastern University, currently taking up Bachelor of Science in Information Technology.  
        I am passionate about learning new technologies and improving my skills in programming and web development."; 

        $experience = "Project Developer & Team Member<br>
        MGG Innovations (College Group)<br>
        2025 - Present<br>
        <li>Worked on Project LiniSync, a mobile app designed to help people manage waste using AI scanning.</li>
        <li>Helped build the app's logic and data structures using Java and Python.</li>
        <li>Brainstormed and improved project ideas with my group using Design Thinking tools like 'Rose-Thorn-Bud'.</li>
        <br>
        Web & Database Projects<br>
        Far Eastern University Coursework<br>
        2024 - 2026<br>
        <br>
        <li>Created a website to promote responsible consumption and waste management for households in Metro Manila.</li>
        <li>Built and managed databases using PL/SQL.</li>
        <li>Researched and compared different ways to build mobile apps (Native, Hybrid, and PWA) for a class presentation.</li>";

        $education = "FEU Tech<br>
        Bachelor of Science in Information Technology<br>
        2024 - Present<br><br>
        FEU High School<br>
        Science, Technology, Engineering, and Mathematics (STEM) specialized in ICT Strand<br>
        2022 - 2024";

        $skills = "<li>HTML</li> 
        <li>CSS</li>  
        <li>Java</li>  
        <li>JavaScript</li> 
        <li>PHP</li>  
        <li>Python</li>  
        <li>Cybersecurity</li>  
        <li>Open-Source Intelligence (OSINT)</li>";

        $certifications = "2026:<br> 
        <li>Introduction to Programming in Kotlin | Google for Developers</li>
        <li>IT Specialist - JavaScript | Pearson</li> 
        <li>IT Specialist - Python | Pearson</li> 
        <li>Fundamentals of Open-Source Intelligence (OSINT) | Alison</li> 
        <br> 

        2025:<br> 
        <li>IT Specialist - Java | Certiport - A Pearson VUE Business</li>
        <li>Cyber security: Understand Threats and Prevent Attacks | Alison</li> 
        <li>IT Specialist - HTML and CSS | Certiport - A Pearson VUE Business</li>  
        <br> 

        2024:<br> 
        <li>Introduction to Cybersecurity | Cisco</li>";   
    ?> 

    <div class="container"> 
        <div class="header"> 
            <h1 class="name"><?php echo $name;?></h1> 
            <hr> 
            <p>Email: <?php echo $email; ?> | Phone: <?php echo $phoneNum; ?> | Location: <?php echo $location; ?></p> 
        </div>

        <div class="about-section"> 
            <h2>About Me</h2> 
            <p class="summary"><?php echo $summary; ?></p> 
        </div> 

        <div class="main-columns"> 
            <div class="left-column"> 
                <h2>Skills</h2> 
                <ul class="skills-list">
                    <?php echo $skills; ?>
                </ul> 
            </div> 
        <div class="right-column">

        <div class="experience-box">
                    <h2>Experience</h2>
                    <p><?php echo $experience; ?></p>
                </div>

            <div class="right-column">
                <div class="education-box">
                    <h2>Education</h2> 
                    <p><?php echo $education; ?></p> 
                </div>
                
                <div class="certifications-box"> 
                    <h2>Certifications</h2> 
                    <ul class="cert-list">
                        <?php echo $certifications; ?>
                    </ul>
                </div> 
            </div>
        </div> 
    </div> 
</body> 
</html>
