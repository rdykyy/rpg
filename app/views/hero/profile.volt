{% extends "layouts/main.volt" %}

{% block title %} {% endblock %}

{% block content %}
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#tabs" ).tabs();
    });
</script>
<script>
    $(function() {
        $( document ).tooltip({
            position: {
                using: function( position, feedback ) {
                    $( this ).css( position );
                    $( "<div>" )
                        .addClass( "arrow" )
                        .addClass( feedback.vertical )
                        .addClass( feedback.horizontal )
                        .appendTo( this );
                }
            }
        });
    });
</script>
<style>
    .ui-tooltip, .arrow:after {
        background: silver;
        border: 2px solid white;
    }
    .ui-tooltip {
        padding: 10px 20px;
        color: white;
        border-radius: 20px;
        font: bold 14px "Helvetica Neue", Sans-Serif;
        text-transform: uppercase;
        box-shadow: 0 0 7px black;
    }
    .arrow {
        width: 70px;
        height: 16px;
        overflow: hidden;
        position: absolute;
        left: 50%;
        margin-left: -35px;
        bottom: -16px;
    }
    .arrow.top {
        top: -16px;
        bottom: auto;
    }
    .arrow.left {
        left: 20%;
    }
    .arrow:after {
        content: "";
        position: absolute;
        left: 20px;
        top: -20px;
        width: 25px;
        height: 25px;
        box-shadow: 6px 5px 9px -9px black;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
    .arrow.top:after {
        bottom: -20px;
        top: auto;
    }
</style>
<p>Раса: {{hero.races[hero.getRaceid()]['name']}}</p>
<p>Класс: {{hero.classes[hero.getClassid()]['name']}}</p>


<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Изученные</a></li>
        <li><a href="#tabs-2">Можно изучить</a></li>
        <li><a href="#tabs-3">Неизученные</a></li>
    </ul>
    <div id="tabs-1">
        <table>
            {%for skill in skills%}
            <tr>
                <td><a href="#" title="{{skill['description']}}">{{skill['name']}}</a></td>
            </tr>
            {%endfor%}
        </table>
    </div>
    <div id="tabs-2">

    </div>
    <div id="tabs-3">
    </div>
</div>



{% endblock %}
