{% extends "layouts/main.volt" %}

{% block title %}Выбор героя {% endblock %}

{% block content %}
<h1>{{landName}}</h1>

<div class="locations-container">
    {% for loc in locationsList %}
    <div class="location" style="top:{{loc['y']}}px;left:{{loc['x']}}px;">
        <a href="/map/location/{{loc['locationId']}}" title="{{loc['name']}}">
            <img src="{{static_url('img/icons/' ~ loc['icon'])}}" alt=""/>
            <div>{{loc['name']}}</div>
        </a>
    </div>
    {%endfor%}
</div>

{% endblock %}