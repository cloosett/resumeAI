<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <style>
        /* Загальні стилі */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
            display: flex;
            justify-content: center;
        }

        .resume-container {
            width: 21cm; /* Ширина A4 */
            height: 29.7cm; /* Висота A4 */
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            display: flex;
            flex-direction: column;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        header h1 {
            font-size: 2.5em;
            color: #1a237e;
        }

        header p {
            font-size: 1.2em;
            color: #555;
        }

        .contact-info {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .contact-info div {
            width: 30%;
            font-size: 1em;
            color: #555;
        }

        section {
            margin-bottom: 30px;
        }

        section h2 {
            font-size: 1.75em;
            color: #1a237e;
            border-bottom: 2px solid #1a237e;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }

        .experience, .education {
            margin-bottom: 20px;
        }

        .experience ul, .education ul {
            list-style-type: none;
            padding-left: 0;
        }

        .experience li, .education li {
            margin-bottom: 15px;
        }

        .experience li h3, .education li h3 {
            font-size: 1.2em;
            color: #1a237e;
        }

        .experience li p, .education li p {
            color: #777;
            font-size: 1em;
        }

        .skills ul {
            list-style-type: none;
            padding-left: 0;
            display: flex;
            flex-wrap: wrap;
        }

        .skills li {
            width: 45%;
            margin-bottom: 10px;
            font-size: 1.1em;
        }

        .skills li span {
            background-color: #1a237e;
            color: #fff;
            padding: 6px 12px;
            border-radius: 5px;
            font-weight: bold;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>
<div class="resume-container">
    <header>
        <div>
            <h1>John Doe</h1>
            <p>Web Developer</p>
        </div>
        <div>
            <p>Email: john.doe@example.com</p>
            <p>Phone: +123 456 7890</p>
        </div>
    </header>

    <div class="contact-info">
        <div>
            <h3>Location</h3>
            <p>New York, USA</p>
        </div>
        <div>
            <h3>Social</h3>
            <p>LinkedIn: linkedin.com/in/johndoe</p>
            <p>GitHub: github.com/johndoe</p>
        </div>
    </div>

    <section>
        <h2>Professional Experience</h2>
        <div class="experience">
            <ul>
                <li>
                    <h3>Web Developer - Company ABC</h3>
                    <p><em>March 2020 - Present</em></p>
                    <p>Worked on various web development projects, using technologies like HTML, CSS, JavaScript, and PHP. Developed dynamic and responsive websites.</p>
                </li>
                <li>
                    <h3>Frontend Developer - Company XYZ</h3>
                    <p><em>June 2018 - February 2020</em></p>
                    <p>Designed and developed user interfaces and optimized them for a better user experience using HTML, CSS, and JavaScript.</p>
                </li>
            </ul>
        </div>
    </section>

    <section>
        <h2>Education</h2>
        <div class="education">
            <ul>
                <li>
                    <h3>Bachelor of Science in Computer Science - University of ABC</h3>
                    <p><em>Graduated: 2018</em></p>
                </li>
            </ul>
        </div>
    </section>

    <section>
        <h2>Skills</h2>
        <div class="skills">
            <ul>
                <li><span>HTML</span></li>
                <li><span>CSS</span></li>
                <li><span>JavaScript</span></li>
                <li><span>PHP</span></li>
                <li><span>React</span></li>
                <li><span>Node.js</span></li>
            </ul>
        </div>
    </section>

    <footer>
        <p>John Doe - Web Developer | Email: john.doe@example.com</p>
    </footer>
</div>
</body>
</html>
