<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Creator Docs</title>
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="https://stackedit.io/style.css" />
    <link rel="stylesheet" href="./style.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="stackedit">

    <div class="stackedit__html">
        <div class="logo">
            <p><a href="https://github.com/abdalazard/PortfolioCreator"><img
                        src="https://raw.githubusercontent.com/abdalazard/PortfolioCreator/main/icon/icon.png"
                        alt="LOGO"></a></p>
        </div>

        <p>This project is a PHP-based portfolio creator that stores standardized data in a MySQL database. Additionally, it provides users with the ability to create their own custom templates.</p>
        <p>Repo: <a href="https://github.com/abdalazard/PortfolioCreator">https://github.com/abdalazard/PortfolioCreator</a></p>
        <h2 id="current-project-status">Current Project Status</h2>
        <ul>
            <li><s>Step 1 Completed: Portfolio builder implemented.</s></li>
            <li><s>Step 2 Completed: Editing feature added.</s></li>
            <!-- outros passos omitidos -->
        </ul>

        <h2 id="current-project-status">Updated Versions</h2>
        <div>
            <h3>Legend for Release Version Status:</h3>
            <ul>
                <li>✅ - Stable</li>
                <li>🚧 - Pre-release - Unstable</li>
                <li>🚩 - Not recommended</li>
            </ul>
        </div>

        <div id="update-list" class="update-box">
            <!-- Atualizações serão carregadas aqui via JavaScript -->
        </div>

        <!-- Resto do conteúdo omitido -->
    </div>

    <script>
        // Carregar JSON e renderizar no frontend
        document.addEventListener('DOMContentLoaded', () => {
            fetch('./versions.json')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Erro ao carregar o arquivo JSON');
                    }
                    return response.json();
                })
                .then(data => {
                    const updateList = document.getElementById('update-list');
                    data.forEach(update => {
                        const updateDiv = document.createElement('div');
                        updateDiv.classList.add('update');
                        updateDiv.innerHTML = `
                            <a href="#update-${update.id}" style="text-decoration: none; color: rgba(0, 0, 0, 0.6);" class="update-header">
                                <h2 class="update-title">${update.title}</h2>
                                <h6 class="update-date">Publish date: ${new Date(update.date).toLocaleDateString()} - 
                                    ${update.status === 1 ? '✅' : update.status === 2 ? '🚧' : '🚩'}
                                </h6>
                            </a>
                            <div class="update-content" style="display: none;">
                                <p><strong>Details about the upgrade:</strong></p>
                                <ul>
                                    ${update.descriptions.map(desc => `<li>${desc.description}</li>`).join('')}
                                </ul>
                            </div>
                        `;
                        updateDiv.querySelector('.update-header').addEventListener('click', e => {
                            e.preventDefault();
                            const content = updateDiv.querySelector('.update-content');
                            content.style.display = content.style.display === 'none' ? 'block' : 'none';
                        });
                        updateList.appendChild(updateDiv);
                    });
                })
                .catch(error => {
                    console.error('Erro ao carregar as versões:', error);
                });
        });
    </script>
</body>

</html>
