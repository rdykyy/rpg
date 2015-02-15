{% extends "layouts/main.volt" %}

{% block title %}Выбор героя {% endblock %}

{% block content %}

<div class="add-hero-wrapper">

    <p>Виберите героя</p>

    <form action="{{url('game/startGame')}}" method="post">

        {% for hero in heroes %}

        <label for="hero-{{loop.index}}">
            <div class="race-img-wrap">
                <img src="{{static_url('img/races/' ~ hero.races.getImage())}}" alt="div"/>

                <p class="name">
                    <input name="hero" type="radio" id="hero-{{loop.index}}" value="{{hero.getHeroId()}}"/> <br/>
                    <img class="hero-class-icon" src="{{static_url('img/classes/' ~ hero.classes.getIcon())}}"
                         alt="div"/>{{hero.getName()}}
                </p>
            </div>
        </label>

        {% endfor %}
        <div class="clr"></div>
        <button>Начать игру</button>

    </form>

</div>

<a href="{{url('hero/addHero')}}">Добавить героя</a>

{% endblock %}