<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | My Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @include('partials.header')

    <section id="projects" class="projects-section">
        <h2>Projects</h2>
        <div class="project">
            <h3>Project 1: Personal Website</h3>
            <p>A fully responsive personal website to showcase my portfolio and skills.</p>
        </div>
        <div class="project">
            <h3>Project 2: E-commerce Site</h3>
            <p>An online store built using Laravel and Vue.js.</p>
        </div>
        <div class="project">
            <h3>Project 3: Data Visualization Dashboard</h3>
            <p>A dashboard for visualizing complex data using D3.js and Chart.js.</p>
        </div>
    </section>

    @include('partials.footer')
</body>
</html>
