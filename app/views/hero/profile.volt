{% extends "layouts/main.volt" %}

{% block title %}Профиль героя {{hero.getName()}} {% endblock %}

{% block content %}
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<style>
    .ui-progressbar {
        position: relative;
    }
    .progress-label {
        position: absolute;
        /*left: 50%;*/
        width: 100%;
        text-align: center;
        top: 4px;
        font-weight: bold;
        text-shadow: 1px 1px 0 #fff;
        color: silver;
    }

    .stats-table {
        width: 100%;
    }

    .stats-table-header
    {
        width: 10%;
    }
</style>


<script>
    /*$(function() {
        $( "#tabs" ).tabs();
    });*/

    $(document).ready(function(){
        $( "#progressbar_hp" ).progressbar({
            value: 100 * {{hero.getCurrentHp()}}  / {{hero.getMaxHp()}}
        });
        $( "#progressbar_mp" ).progressbar({
            value: 100 * {{hero.getCurrentMp()}}  / {{hero.getMaxMp()}}
        });
        $( "#progressbar_xp" ).progressbar({
            value: 5
        });

        $( "#progressbar_hp").find( ".ui-progressbar-value" ).css({"background": '#9CFF83'});
        $( "#progressbar_mp").find( ".ui-progressbar-value" ).css({"background": '#5FE5C6'});
        $( "#progressbar_xp").find( ".ui-progressbar-value" ).css({"background": '#B2A210'});
    });

</script>
<h1>Профиль героя {{hero.getName()}}</h1>
<table class = "stats-table">
    <tr>
        <td class = "stats-table-header"><p>Уровень</p></td>
        <td><p>{{hero.getLevel()}}</p></td>
    </tr>
    <tr>
        <td><p>Раса:</p></td>
        <td><p>{{hero.races[hero.getRaceid()]['name']}}</p></td>
    </tr>
    <tr>
        <td><p>Класс:</p></td>
        <td><p>{{hero.classes[hero.getClassid()]['name']}}</p></td>
    </tr>
    <tr>
        <td><p>Находится в</p></td>
        <td><a href="{{url('map/location/'~hero.getLocationId())}}">1111</a></td>
    </tr>
    <tr>
        <td><p>HP</p></td>
        <td><div id="progressbar_hp" ><div class="progress-label">{{hero.getCurrentHp()}} / {{hero.getMaxHp()}}</div></div></td>
    </tr>
    <tr>
        <td><p>MP</p></td>
        <td><div id="progressbar_mp"><div class="progress-label">{{hero.getCurrentMp()}} / {{hero.getMaxMp()}}</div></div></td>
    </tr>
    <tr>
        <td><p>XP</p></td>
        <td><div id="progressbar_xp"><div class="progress-label">{{hero.getXp()}} / 100</div></div></td>
    </tr>
    <tr>
        <td><p>Атака</p></td>
        <td><p>{{hero.getAttack()}}</p></td>
    </tr>
    <tr>
        <td><p>Броня</p></td>
        <td><p>{{hero.getArmor()}}</p></td>
    </tr>
</table>

{% endblock %}
