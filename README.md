<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Docs</title>
  <link rel="stylesheet" href="https://stackedit.io/style.css" />
</head>

<body class="stackedit">
  <div class="stackedit__html"><p><img src="https://raw.githubusercontent.com/abdalazard/PortfolioCreator/main/icon/icon.png" alt="LOGO"></p>
<p>This project is a PHP-based portfolio creator that stores
        standardized data in a MySQL database. Additionally, it provides
        users with the ability to create their own custom templates.</p>
      <p>Repo: <a
          href="https://github.com/abdalazard/PortfolioCreator">https://github.com/abdalazard/PortfolioCreator</a></p>
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
      <p><img
          src="http://img.shields.io/static/v1?label=STEP%206%20-%20CREATE%20A%20DOCUMENTATION%20AND%20PUBLISH%20IT%20&amp;message=WORKING%20ON%20IT&amp;color=GREEN&amp;style=for-the-badge"
          alt="Status"></p>
      <h2 id="contributions">Contributions</h2>
      <p>This project is open source, and contributions are highly
        welcome! If you have ideas, suggestions, or corrections, feel
        free to <a
          href="https://github.com/abdalazard/Portfolio-Creator/issues/new">open
          an issue</a> or submit a <a
          href="https://github.com/abdalazard/Portfolio-Creator/compare">pull
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
          <p>Fork the <a
              href="https://github.com/abdalazard/PortfolioCreator">repository</a></p>
        </li>
        <li>
          <p>Create a branch for your contribution (<code>git checkout -b new-feature</code>)</p>
        </li>
        <li>
          <p>Make desired changes and commit (<code>git commit -m 'Adding new feature'</code>)</p>
        </li>
        <li>
          <p>Push to the branch (<code>git push origin new-feature</code>)</p>
        </li>
        <li>
          <p>Open a <a
              href="https://github.com/abdalazard/Portfolio-Creator/compare">pull
              request</a>.</p>
        </li>
      </ol>
      <h2 id="how-to-contribute">What I need to know before start the
        project</h2>
      <ul>
        <p>Create a .env file. In terminal line, write: <code>touch db/.env</code>. Now you’ll find the .env inside of db/ folder.</p>
      </ul>
      <ul>
        <p><strong>Create a empty database</strong> for this project
          and then fill up the .env file with your database
          information:</p>
      </ul>
      <pre><code>
      PROJECT_NAME = mydatabase<br>
      DB_HOST = localhost<br>
      DB_USERNAME = root<br>
      DB_PASSWORD = mypassword<br>
      MY_PORTFOLIO_NAME = mydatabase<br>
      MY_PORTFOLIO_PAG = https://my-website.com<br>
    </code></pre>
      <ol start="8">
        <ul>
          <p>In terminal, install all dependencies: <code>composer install</code></p>
        </ul>
        <ul>
          <p>For the last, in terminal command line you need to write
            the next command line
             for create your user access:
            <code>php migrate.php</code></p>
        </ul>
      </ol>
      <p><strong>Default user:</strong></p>
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
</div>
</body>

</html>
