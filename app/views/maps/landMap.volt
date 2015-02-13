<h1>{{landName}}</h1>

<ul>
{% for loc in locationsList %}
    <li>
        <a href = '/maps/location/{{loc['locationId']}}'> {{loc['name']}} </a>
    </li>
{%endfor%}
</ul>

