<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title> 
    <link rel = "stylesheet" href = "style.css"> 
</head> 

<body> 
    <?php 
        $name = "Jen Raina R. Teodoro"; 
        $phoneNum = "+63-912-456789"; 
        $email = "jrteodoro@fit.edu.ph"; 
        $location = "Manila, Philippines"; 
        $title = "Student"; 
        $summary = "I am a student at Far Eastern University, currently taking up Bachelor of Science in Information Technology.  
        I am passionate about learning new technologies and improving my skills in programming and web development."; 


        $education = "FEU Tech<br>
        Bachelor of Science in Information Technology<br>
        2024 - Present
        
        FEU High School<br>
        Science, Technology, Engineering, and Mathematics (STEM) specialized in ICT Strand<br>
        2022 - 2024
        ";


        $skills = "<li>HTML</li> 
        <li>CSS</li>  
        <li>Java</li>  
        <li>JavaScript</li> 
        <li>PHP</li>  
        <li>Python</li>  
        <li>Cybersecurity</li>  
        <li>Open-Source Intelligence (OSINT)</li>";

        $certifications = "2026: <br> 
        <li>Introduction to Programming in Kotlin | Google for Developers<br></li>
        <li>IT Specialist - JavaScript | Pearson<br></li> 
        <li>IT Specialist - Python | Pearson<br></li> 
        <li>Fundamentals of Open-Source Intelligence (OSINT) | Alison<br></li> 
        <br> 

        2025: <br> 
        <li>IT Specialist - Java | Certiport - A Pearson VUE Business<br></li>
        <li>Cyber security: Understand Threats and Prevent Attacks | Alison <br></li> 
        <li>IT Specialist - HTML and CSS | Certiport - A Pearson VUE Business<br></li>  
        <br> 

        2024: <br> 
        <li>Introduction to Cybersecurity | Cisco <br></li> 
        ";   
    ?> 

    <div class = "container"> 
        <div class = "header"> 
            <h1 class = "name"><?php echo $name;?></h1> 
            <hr> 
            <p>Email: <?php echo $email; ?> | Phone: <?php echo $phoneNum; ?> | Location: <?php echo $location; ?></p> 
        </div>

        <div class = "info"> 
            <h2>About Me</h2> 
            <p class = "summary"><?php echo $summary; ?></p> 
        </div> 

        <div class = "info"> 
            <h2>Education</h2> 
            <p class = "education"><?php echo $education; ?></p> 
        </div>
        
        <div class = "columns"> 
            <div class = "skills"> 
                <h2>Skills</h2> 
                <p class = "skills"><?php echo $skills; ?></p> 
            </div> 
        </div> 

        <div class = "certifications"> 
            <h2>Certifications</h2> 
            <p class = "certifications"><?php echo $certifications; ?></p> 
        </div> 
    </div> 
</body> 
</html> 
