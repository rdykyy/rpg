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
        {% if user['heroId'] is defined %}
        <div class="left">
            <a href="{{url('hero/profile')}}">Профиль</a>
            <a href="{{url('hero/inventory')}}">Рюкзак</a>
            <a href="{{url('hero/skills')}}">Умения</a>
            <a href="{{url('map')}}">Карта</a>
            <!--<a href="{{url('map/landMap/' ~ user['locationId'])}}">Локация</a>-->
        </div>
        {% endif %}
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