{% extends "layouts/main.volt" %}
{% block title %}Умения героя {{heroName}} {% endblock %}

{% block content %}


    <h1>Умения героя {{heroName}} </h1>

<ul id="org" style="display:none">
    <li>
        Food
        <ul>
            <li id="beer">Beer</li>
            <li>Vegetables
                <a href="http://wesnolte.com" target="_blank">Click me</a>
                <ul>
                    <li>Pumpkin</li>
                    <li>
                        <a href="http://tquila.com" target="_blank">Aubergine</a>
                        <p>A link and paragraph is all we need.</p>
                    </li>
                </ul>
            </li>
            <li class="fruit">Fruit
                <ul>
                    <li>Apple
                        <ul>
                            <li>Granny Smith</li>
                        </ul>
                    </li>
                    <li>Berries
                        <ul>
                            <li>Blueberry</li>
                            <li><img src="images/raspberry.jpg" alt="Raspberry"/></li>
                            <li>Cucumber</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>Bread</li>
            <li class="collapsed">Chocolate
                <ul>
                    <li>Topdeck</li>
                    <li>Reese's Cups</li>
                </ul>
            </li>
        </ul>
    </li>
</ul>

<div id="chart" class="orgChart"></div>

<script>
    jQuery(document).ready(function() {

        /* Custom jQuery for the example */
        $("#show-list").click(function(e){
            e.preventDefault();

            $('#list-html').toggle('fast', function(){
                if($(this).is(':visible')){
                    $('#show-list').text('Hide underlying list.');
                    $(".topbar").fadeTo('fast',0.9);
                }else{
                    $('#show-list').text('Show underlying list.');
                    $(".topbar").fadeTo('fast',1);
                }
            });
        });

        $('#list-html').text($('#org').html());

        $("#org").bind("DOMSubtreeModified", function() {
            $('#list-html').text('');

            $('#list-html').text($('#org').html());

            prettyPrint();
        });
    });
</script>
{% endblock %}