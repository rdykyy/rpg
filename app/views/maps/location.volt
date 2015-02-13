<h1>{{locationName}}</h1>

<ul>
{% for locItem in locationItemsList %}
    <li>
        <!--<a href = '/maps/location/{{loc['id']}}'> {{loc['name']}} </a>-->
        {{locItem['name']}}
    </li>
{%endfor%}
</ul>

