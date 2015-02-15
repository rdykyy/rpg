<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="{{static_url('css/style.css')}}"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <title> {% block title %}{% endblock %} </title>

</head>
<body>
<div class="content">
    <div class="header">
        <div class="right">
            {% if user is defined %}
            Привет, {{user['name']}}. <a href="{{url('authorization/logout')}}">Выйти</a>
            {% else %}
            <a href="{{url('registration')}}">Регистрация</a>, <a href="{{url('authorization')}}">Войти</a>
            {% endif %}
        </div>
    </div>

    {% block content %}{% endblock %}
</div>
</body>
</html>