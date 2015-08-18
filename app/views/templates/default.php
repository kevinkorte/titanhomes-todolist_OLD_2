<! DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Website | {% block title %}{% endblock %}</title>
    </head>
    <body>
        {% include 'templates/partials/navigation.php' %}
        {% include 'templates/partials/messages.php' %}
        {% block content %}{% endblock %}
    </body>
</html>
