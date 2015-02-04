{% extends "layouts/main.volt" %}

{% block title %}Регистрация {% endblock %}

{% block content %}
<div class="wrapper">
    <div class="registration-panel">
        <form action="{{url('registration/create')}}" method="post">
            <table>
                <tr>
                    <td>Email</td><td><input type="text" id="email" name="email"/></td>
                </tr>
                <tr>
                    <td>Password</td><td><input type="password" id="pass" name="password"/></td>
                </tr>
            </table>
            <input type="submit" value="Register"/>

        </form>
    </div>
</div>
{% endblock %}