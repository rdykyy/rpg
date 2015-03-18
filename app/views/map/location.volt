{% extends "layouts/main.volt" %}

{% block title %}Выбор героя {% endblock %}

{% block content %}

<div class="locationWrapper">
    <div class="left">
        <h1>{{locationName}}</h1>

        <ul>
            {% for locItem in locationItemsList %}
            <li>
                <!--<a href = '/maps/location/{{loc['id']}}'> {{loc['name']}} </a>-->
                {{locItem['name']}}
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
