<?php include 'header.php'; ?>

<!-- css -->
<!-- <link rel='stylesheet' type='text/css' media='screen' href='css/intro.css'> -->

<body>
    <div class="container">
        <?php include 'sidebar.php'; ?>
        <div class="main">
            <div class="my-intro">
                <div class="about-me">
                    <h1>About Me</h1>
                    <p>My experiences as both a student of Computer Science and a DevOps Engineer have 
                        allowed me to appreciate the importance of collaboration between development and operations teams.</p>
                </div>
                <div class="intro-img">
                    <img src="images/img1.svg" alt="Test">
                </div>
            </div>
            <div class="my-skills">
                <h1>My Skills</h1>
                <div class="skill-container">
                    <label for="html">Containerization (Docker, Kubernetes) :</label>
                    <meter id="html" min="0" max="100" low="35" high="65" optimum="95" value="75"></meter><br>
                    <label for="html">AWS Services (EC2, S3, VPC) :</label>
                    <meter id="html" min="0" max="100" low="35" high="65" optimum="95" value="70"></meter><br>
                    <label for="html">Networking (VPC, Subnets) :</label>
                    <meter id="html" min="0" max="100" low="35" high="65" optimum="95" value="70"></meter><br>
                    <label for="html">CI/CD Pipelines (Jenkins, GitLab CI) :</label>
                    <meter id="html" min="0" max="100" low="35" high="65" optimum="95" value="60"></meter><br>
                </div>
                <div class="sk-img">
                    <img src="images\devops.png" alt="skills">
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>