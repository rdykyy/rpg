{% extends "layouts/main.volt" %}
{% block title %}Умения героя {{hero.getName()}} {% endblock %}

{% block content %}

    <h1>Умения героя {{hero.getName()}} </h1>


    <p>
        Доступно очков - {{hero.getSkillPoints()}}
    </p>

    <table class="skillsTable">
        <tr>
            <th></th>
            <th>Названия</th>
            <th>Уровень</th>
            <th>Описания</th>
        </tr>
        {% for skill in skills %}
        <tr>
            <td></td>
            <td>{{skill['name']}}</td>
            <td>{{skill['level']}}</td>
            <td>{{skill['description']}}</td>
        </tr>

        {% endfor %}
    </table>

{% endblock %}