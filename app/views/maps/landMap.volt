{% extends "layouts/main.volt" %}

{% block title %}Выбор героя {% endblock %}

{% block content %}
<h1>{{landName}}</h1>

<ul>
{% for loc in locationsList %}
    <li>
        <a href = '/maps/location/{{loc['locationId']}}'> {{loc['name']}} </a>
    </li>
{%endfor%}
</ul>

{% endblock %}