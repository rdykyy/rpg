{% extends "layouts/main.volt" %}

{% block title %}Выбор героя {% endblock %}

{% block content %}

<div class="add-hero-wrapper">

    <div class="input-wrap">
        <label for="heroName">Введите имя героя</label>
        <input type="text" name="heroName" id="heroName"/>
    </div>

    <p>Виберите расу</p>
    {% for id, race in races %}

    <label for="race-{{loop.index}}">
        <div class="race-img-wrap">
            <img src="{{static_url('img/races/' ~ race['image'])}}" alt="div"/>
            <p class="name">
                <input name="race" type="radio" id="race-{{loop.index}}" value="{{id}}"/> <br/>
                {{race['name']}}
            </p>
        </div>
    </label>

    {% endfor %}


    <p>Виберите класс</p>
    <ul class="class-list">
    {% for id, class in classes %}
        <li>
            <label for="class-{{loop.index}}">
                <input name="class" type="radio" id="class-{{loop.index}}" value="{{id}}"/>
                <img src="{{static_url('img/classes/' ~ class['icon'])}}" alt="div"/>
                {{class['name']}}
            </label>
        </li>

    {% endfor %}
    </ul>

    <button id="createHero">
        Создать героя
    </button>
</div>

<script>
    $(".race-img-wrap").on("click", function(){
        $(".race-img-wrap").removeClass('selected');
        $(this).addClass('selected');
    });

    $("#createHero").on("click", function(){
        var heroRace = $('input[name=race]:checked').val();
        var heroClass = $('input[name=class]:checked').val();
        var heroName = $('input[name=heroName]').val();
        if (heroRace && heroClass && heroName) {
            var obj = {
                name : heroName,
                heroClass : heroClass,
                race : heroRace
            };
            $.ajax({
                type: "POST",
                url: "/hero/createHero",
                data: obj,
                complete : function(data) {
                    console.log(data);
                    var resp = eval(data.responseText);
                    if (resp) {
                        window.location = '/hero/chooseHero'
                    }
                }
            });
        } else {
            alert("Виберите все значения!");
        }
        console.log(heroName);
    });
</script>
{% endblock %}