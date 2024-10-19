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
            padding: 20px 20px;
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
            padding: 20px;
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
        }
        .section h2 {
            margin: 0 0 20px;
            font-size: 2.5em;
        }
        .section p {
            font-size: 1.2em;
            color: #666;
        }
        .portfolio-item {
            margin: 20px 0;
        }
        .portfolio-item img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
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

           <a href="{{ url('skills') }}">Skills</a>
            
           <a href="{{ url('projects') }}">Project</a>

           <a href="{{ route('experience') }}">Experience</a>

        </nav>
    </header>

    <div class="hero" id="home">
        <h1>Welcome to My Portfolio</h1>
        <img src="/img/jon.jpg" alt="Project One">
        <p>Discover my work and experience.</p>
    </div>
    

    <div class="section" id="about">
        <h2>About Me</h2>
        <p>Hello! I'm Jonel, a Web Developer. I specialize in Server and have a passion for Being Pro It.</p>
    </div>

    

    <div class="section" id="portfolio">
        <h2>Portfolio</h2>
        <div class="portfolio-item">
            <h3>Project One</h3>
            <img src="/img/jon.jpg" alt="Project One">
            <p>Description of Project One.</p>
        </div>
        <div class="portfolio-item">
            <h3>Project Two</h3>
            <img src="https://via.placeholder.com/800x400" alt="Project Two">
            <p>Description of Project Two.</p>
        </div>
        <div class="portfolio-item">
            <h3>Project Three</h3>
            <img src="https://via.placeholder.com/800x400" alt="Project Three">
            <p>Description of Project Three.</p>
        </div>
    </div>

    <div class="cta" id="contact">
        <h2>Contact Me</h2>
        <button>Get in Touch</button>
    </div>

   

</body>
</html>


