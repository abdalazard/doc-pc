<?php
require __DIR__ . '/vendor/autoload.php';

require "src/Updates.php";

$updates = new Updates();
$version = $updates->getVersion();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Creator Docs</title>
    <link rel="icon" href="icon.png">

    <link rel="stylesheet" href="https://stackedit.io/style.css" />
    <style>
    .logo {
        text-align: center;
    }

    .update-box {
        background-color: rgba(128, 128, 128, 0.2);
        padding: 2px;
        border-radius: 2%;
        max-height: 200px;
        overflow: auto;
    }

    .update-title {
        color: rgba(0, 0, 0, 0.6);
        margin-left: 15px;
    }

    .update-content {
        display: none;
        color: rgba(128, 128, 128, 0.9);
        margin-left: 30px;
    }
    </style>
</head>

<body class="stackedit">
    <div class="stackedit__html">
        <div class="logo">
            <p><a href="https://github.com/abdalazard/PortfolioCreator"><img
                        src="https://raw.githubusercontent.com/abdalazard/PortfolioCreator/main/icon/icon.png"
                        alt="LOGO"></a></p>
        </div>

        <p>This project is a PHP-based portfolio creator that stores
            standardized data in a MySQL database. Additionally, it provides
            users with the ability to create their own custom templates.</p>
        <p>Repo: <a
                href="https://github.com/abdalazard/PortfolioCreator">https://github.com/abdalazard/PortfolioCreator</a>
        </p>
        <h2 id="current-project-status">Current Project Status</h2>
        <ul>
            <li><s><strong>Step 1 Completed:</strong> Implementation of the
                    portfolio builder.</s></li>
            <li><s><strong>Step 2 Completed:</strong> working on
                    the portfolio editing feature and deletion
                    option.</s></li>
            <li><s><strong>Step 3 Completed:</strong> Developing the
                    template system and the ability to select different
                    styles.</s></li>
            <li><s><strong>Step 4 Completed:</strong> Testing - Working at</s></li>
            <li><s><strong>Step 5 Completed:</strong> Update user data
                    modal.</s></li>
        </ul>
        <p><img src="http://img.shields.io/static/v1?label=STEP%206%20-%20CREATE%20A%20DOCUMENTATION%20AND%20PUBLISH%20IT%20&amp;message=WORKING%20ON%20IT&amp;color=GREEN&amp;style=for-the-badge"
                alt="Status"></p>

        <?php if(count($version) >= 1){ ?>
        <h2 id="current-project-status">Updated versions</h2>
        <div class="update-box">
            <div id="updates">
                <?php foreach($version as $update) { ?>
                <div class="update">
                    <h2 class="update-title"><?php echo $update['title']; ?> | Publish date:
                        <?php echo $update['date']; ?></h2>
                    <div class="update-content">
                        <p><strong>Details about the upgrade:</strong></p>
                        <ul>
                            <?php foreach($update['descriptions'] as $description) { ?>
                            <ol>- <?php echo $description['description']; ?></ol>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>


        <h2 id="contributions">Contributions</h2>
        <p>This project is open source, and contributions are highly
            welcome! If you have ideas, suggestions, or corrections, feel
            free to <a href="https://github.com/abdalazard/Portfolio-Creator/issues/new">open
                an issue</a> or submit a <a href="https://github.com/abdalazard/Portfolio-Creator/compare">pull
                request</a>.</p>
        <h2 id="technologies-used">Technologies Used</h2>
        <ul>
            <li><strong>Backend:</strong> PHP 7.4.33</li>
            <li><strong>Frontend:</strong> jQuery 3.5.1</li>
            <li><strong>Database:</strong> MySQL 8.0.30</li>
        </ul>
        <h2 id="how-to-contribute">How to Contribute</h2>
        <ol>
            <li>
                <p>Fork the <a href="https://github.com/abdalazard/PortfolioCreator">repository</a></p>
            </li>
            <li>
                <p>Create a branch for your contribution (<code>git checkout
              -b new-feature</code>)</p>
            </li>
            <li>
                <p>Make desired changes and commit (<code>git commit -m
              'Adding new feature'</code>)</p>
            </li>
            <li>
                <p>Push to the branch (<code>git push origin
              new-feature</code>)</p>
            </li>
            <li>
                <p>Open a <a href="https://github.com/abdalazard/Portfolio-Creator/compare">pull
                        request</a>.</p>
            </li>

        </ol>
        <h2 id="how-to-contribute">What I need to know before start the
            project</h2>

        <ul>
            <p>Create a .env file. In terminal line, write: <code>touch
            db/.env</code>. Now you’ll find the .env inside of
                db/ folder.</p>
        </ul>
        <ul>
            <p><strong>Create a empty database</strong> for this project
                and then fill up the .env file with your database
                information:</p>
        </ul>
        <pre><code>
      PROJECT_NAME = mydatabase
      
      DB_HOST = localhost
      
      DB_USERNAME = root
      
      DB_PASSWORD = mypassword
      
      MY_PORTFOLIO_NAME = mydatabase
      
      MY_PORTFOLIO_PAG = https://my-website.com
    </code></pre>
        <ol start="8">
            <ul>
                <p>In terminal, install all dependencies: <code>composer
              install</code></p>
            </ul>
            <ul>
                <p>For the last, in terminal command line you need to write
                    the next command line for create your user access:
                    <code>php migrate.php</code>
                </p>
            </ul>
        </ol>
        <p>Default user:</p>
        <pre><code>
        Login: admin<br>
        Default password: 123
      </code></pre>

        <h2 id="how-to-contribute">How to create and work your own template:</h2>
        <p>On the template preview page, you can create a new one by
            clicking the button "<strong>Create template</strong>".
            Upon entering the name and clicking create, a folder with three files
            (<strong>HTML</strong>, <strong>CSS</strong> and
            <strong>JavaScript</strong>) bearing the same name as your template
            will be created in the templates folder. You can edit these files and
            see the results on the template preview page.
        </p>

        <hr />

        <p>I appreciate your contributions in advance!</p>

        <hr />

        <h2 id="about-the-author">About the author</h2>
        <img src="author.jpg" alt="Vinicius. Abdala" style="border-radius: 50%; width: 100px; height: 100px;">
        <p><strong>Vinícius "Abdalazard" Abdala</strong> is a software
            developer passionate about technology. He has experience in
            several
            programming languages, including PHP, JavaScript, and SQL. Also
            he worked and works in big projects, using technologies like
            React.js, React Native and jQuery. He believes in the power of
            open source and loves
            contributing to open source projects in his free time and giving
            workshops. You can follow him on GitHub at
            <a href="https://github.com/abdalazard">github.com/abdalazard</a> or in
            his <a href="https://abdalazard.online">website</a>.
        </p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.update-title').click(function() {
            $(this).next('.update-content').slideToggle('slow');
        });
    });
    </script>
</body>

</html>