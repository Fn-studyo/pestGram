<!DOCTYPE html>
<html>
    <head>
        <title>{% block title %}{% endblock %}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        <div id="header">
          {% include "./parts/header.php" %}
        </div>
        <div id="content">
        {% include "./parts/body.html" %}
        </div>
        <div id="footer">
            {% include "./parts/footer.php" %}
        </div>
    </body>
</html>