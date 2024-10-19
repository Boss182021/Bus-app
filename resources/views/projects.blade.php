<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: #333;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header .logo {
            font-size: 1.5em;
        }
        header .nav {
            display: flex;
            gap: 20px;
        }
        header .nav a {
            color: white;
            text-decoration: none;
            padding: 10px;
            font-size: 1.2em;
        }
        header .nav a:hover {
            text-decoration: underline;
        }
        .hero {
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
            padding: 200px 20px;
            margin-top: 60px; /* Adjust for fixed header */
        }
        .hero h1 {
            margin: 0;
            font-size: 3em;
        }
        .hero p {
            font-size: 1.2em;
        }
        .section {
            padding: 60px 20px;
            text-align: center;
            background-color: #f9f9f9;
            display: none; /* Hide all sections by default */
        }
        .section.active {
            display: block; /* Show active section */
        }
        .section h2 {
            margin: 0 0 20px;
            font-size: 2.5em;
        }
        .portfolio-item {
            margin: 40px 0;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            background-color: white;
            transition: transform 0.3s;
        }
        .portfolio-item:hover {
            transform: translateY(-5px);
        }
        .portfolio-item img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .portfolio-item h3 {
            font-size: 1.8em;
            margin-bottom: 10px;
        }
        .portfolio-item p {
            color: #666;
            font-size: 1.1em;
            margin-bottom: 10px;
        }
        .portfolio-item a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .portfolio-item a:hover {
            background-color: #333;
        }
        .cta {
            text-align: center;
            padding: 60px 20px;
            background-color: #4CAF50;
            color: white;
        }
        .cta h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        .cta button {
            padding: 15px 30px;
            font-size: 1.2em;
            color: white;
            background-color: #333;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .cta button:hover {
            background-color: #555;
        }
        footer {
            text-align: center;
            padding: 10px 20px;
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">My Portfolio</div>
        <nav class="nav">
            <a href="#home">Home</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#experience">Experience</a>
        </nav>
    </header>

    <div class="hero section active" id="home">
        <h1>Welcome to My Portfolio</h1>
        <img src="/img/jon.jpg" alt="Profile Image">
        <p>Discover my work and experience.</p>
    </div>

    <div class="section" id="skills">
        <h2>Skills</h2>
        <p>Pending ...</p>
    </div>

    <div class="section" id="projects">
        <h2>Projects</h2>
        <div class="portfolio-item">
            <h3>Project One: Personal Website</h3>
            <img src="/img/project1.jpg" alt="Personal Website Screenshot">
            <p>A responsive personal website built with HTML, CSS, and JavaScript, showcasing my skills and projects.</p>
            <a href="https://example.com/project1" target="_blank">View Project</a>
        </div>
        
        <div class="portfolio-item">
            <h3>Project Two: E-commerce App</h3>
            <img src="/img/project2.jpg" alt="E-commerce App Screenshot">
            <p>An e-commerce application developed using Laravel and Vue.js, featuring user authentication and product management.</p>
            <a href="https://example.com/project2" target="_blank">View Project</a>
        </div>
        
        <div class="portfolio-item">
            <h3>Project Three: Blogging Platform</h3>
            <img src="/img/project3.jpg" alt="Blogging Platform Screenshot">
            <p>A blogging platform where users can create, edit, and delete posts, built with Ruby on Rails and PostgreSQL.</p>
            <a href="https://example.com/project3" target="_blank">View Project</a>
        </div>

        <div class="portfolio-item">
            <h3>Project Four: Task Manager</h3>
            <img src="/img/project4.jpg" alt="Task Manager Screenshot">
            <p>A task management tool designed with React and Node.js, allowing users to organize their tasks efficiently.</p>
            <a href="https://example.com/project4" target="_blank">View Project</a>
        </div>
    </div>

    <div class="cta" id="contact">
        <h2>Contact Me</h2>
        <button>Get in Touch</button>
    </div>

    <footer>
        <p>&copy; 2024 My Portfolio</p>
    </footer>

    <script>
        const links = document.querySelectorAll('header .nav a');
        const sections = document.querySelectorAll('.section');

        function hideSections() {
            sections.forEach(section => {
                section.classList.remove('active');
            });
        }

        function showSection(id) {
            hideSections();
            document.getElementById(id).classList.add('active');
        }

        links.forEach(link => {
            link.addEventListener('click', (event) => {
                event.preventDefault();
                const targetId = link.getAttribute('href').substring(1); // Get the ID
                showSection(targetId);
            });
        });
    </script>

</body>
</html>
