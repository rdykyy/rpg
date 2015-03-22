{% extends "layouts/main.volt" %}

{% block title %} {{landName}} {% endblock %}

{% block content %}
<h1>{{landName}}</h1>

{% if timeToEnd is defined %}
<div class="in-way">
    Вы в пути. Время прибития <span class="time">{{timeToEnd}}</span> сек.
</div>
{% endif %}

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

<script>
    $(document).ready(function(){
        if ($('.in-way').length) {
            var interval = setInterval(function () {
                var $time = $('.in-way .time'),
                    timer = parseInt($time.text());
                if (timer > 0) {
                    timer--;
                    $time.text((timer < 10 ) ? "0" + timer : timer);
                } else {
                    clearInterval(interval);
                    window.location.reload();
                }
            }, 1000);
        }
    });
</script>

{% endblock %}