{% extends "layouts/main.volt" %}

{% block title %}{{location['name']}} {% endblock %}

{% block content %}

<div class="locationWrapper">
    <div class="left">
        <h1>{{location['name']}}</h1>
        {% if !isInCurrentLocation %} <a href="{{url('map/move/' ~ location['locationId'])}}">Перейти</a> {% endif %}

        <ul>
            {% for locItem in locationItemsList['attackable'] %}
            <li>
                {{locItem['name']}} {% if isInCurrentLocation %}<a href="{{url('battle/attack/' ~ locItem['locationItemId'])}}">Атаковать</a> {% endif %}
            </li>
            {%endfor%}
            {% for locItem in locationItemsList['collectable'] %}
            <li>
                {{locItem['name']}} {% if isInCurrentLocation %}<a href="#">Собирать</a> {% endif %}
            </li>
            {%endfor%}
        </ul>
    </div>
    <div class="right">
        <div class="hero-list">
            <ul class="non-styled">
                {% for hero in heroes %}
                <li>
                    <a href="{{url('hero/profile/' ~ hero.getHeroId())}}">{{hero.getName()}}</a>
                </li>
                {% endfor %}
            </ul>
        </div>
    </div>
</div>

{% endblock %}
