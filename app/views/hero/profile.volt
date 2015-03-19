{% extends "layouts/main.volt" %}

{% block title %} {% endblock %}

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
        left: 50%;
        top: 4px;
        font-weight: bold;
        text-shadow: 1px 1px 0 #fff;
        color: silver;
    }

    .stats-table {
        width: 100%;
    }


</style>


<script>
    /*$(function() {
        $( "#tabs" ).tabs();
    });*/

    $(document).ready(function(){
        $( "#progressbar_hp" ).progressbar({
            value: 37
        });
        $( "#progressbar_mp" ).progressbar({
            value: 42
        });
        $( "#progressbar_xp" ).progressbar({
            value: 10
        });

        $( "#progressbar_hp").find( ".ui-progressbar-value" ).css({"background": '#9CFF83'});
        $( "#progressbar_mp").find( ".ui-progressbar-value" ).css({"background": '#5FE5C6'});
        $( "#progressbar_xp").find( ".ui-progressbar-value" ).css({"background": '#B2A210'});
    });

</script>

<table class = "stats-table">
    <tr>
        <td><p>Раса:</p></td>
        <td><p>{{hero.races[hero.getRaceid()]['name']}}</p></td>
    </tr>
    <tr>
        <td><p>Класс:</p></td>
        <td><p>{{hero.classes[hero.getClassid()]['name']}}</p></td>
    </tr>
    <tr>
        <td><p>HP</p></td>
        <td><div id="progressbar_hp" ><div class="progress-label" style="width: 100%">37 / 100</div></div></td>
    </tr>
    <tr>
        <td><p>MP</p></td>
        <td><div id="progressbar_mp"><div class="progress-label">42 / 100</div></div></td>
    </tr>
    <tr>
        <td><p>XP</p></td>
        <td><div id="progressbar_xp"><div class="progress-label">10 / 100</div></div></td>
    </tr>
</table>

{% endblock %}
