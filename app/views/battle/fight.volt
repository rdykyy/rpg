{% extends "layouts/main.volt" %}
{% block title %}Бой {% endblock %}

{% block content %}

<script src="http://canjs.com/release/latest/can.jquery.js"></script>

<script type="text/javascript">
    $(function() {
        var Battle = can.Control({
            init: function(el, options) {
                this.element.html(can.view('app-template'));
            },
            'li.skill-item click': function(el, ev) {
                if (el.hasClass('active')) {
                    el.removeClass('active');
                    $('.teamMembers .member, .activeHero').removeClass('active');
                } else {
                    $('.teamMembers .member, .activeHero').removeClass('active');
                    $('li.skill-item').removeClass('active');
                    el.addClass('active');

                    if (el.data('target') === 'ally') {
                        $('.allies .teamMembers .member, .activeHero').addClass('active');
                    } else if (el.data('target') === 'enemy') {
                        $('.enemies .teamMembers .member').addClass('active');
                    }

                }
            },
            '.enemies .member click': function (el, ev) {
                var $activeSkill = $('.skill-item.active');
                if (!$activeSkill.length || $activeSkill.data('target') === 'ally') return;

                alert('Ви нанесли 20 урону супернику');
            },

            '.allies .member click': function (el, ev) {
                var $activeSkill = $('.skill-item.active');
                if (!$activeSkill.length || $activeSkill.data('target') !== 'ally') return;

                alert('Ви збільшили атаку союзників на 20');
            }
        });

        new Battle('#fightContainer', {});
    });
</script>

<script type="text/mustache" id="app-template">
<div class="row">
        <div class="col-md-4 allies">
            <ul class="teamMembers">
                <li class="member"></li>
                <li class="member"></li>
            </ul>
        </div>
        <div class="col-md-4">
            <div class="activeHero"></div>
            <div class="skills">
                <ul class="skills-list">
                    <li class="skill-item" data-target='enemy'>
                        <div class="skill"></div>
                    </li>
                    <li class="skill-item" data-target='enemy'>
                        <div class="skill"></div>
                    </li>
                    <li class="skill-item" data-target='enemy'>
                        <div class="skill"></div>
                    </li>
                    <li class="skill-item" data-target='enemy'>
                        <div class="skill"></div>
                    </li>
                    <li class="skill-item" data-target='enemy'>
                        <div class="skill"></div>
                    </li>
                    <li class="skill-item" data-target='ally'>
                        <div class="skill"></div>
                    </li>
                    <li class="skill-item" data-target='ally'>
                        <div class="skill"></div>
                    </li>
                    <li class="skill-item" data-target='ally'>
                        <div class="skill"></div>
                    </li>
                    <li class="skill-item" data-target='ally'>
                        <div class="skill"></div>
                    </li>
                    <li class="skill-item" data-target='ally'>
                        <div class="skill"></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 enemies">
            <ul class="teamMembers right">
                <li class="member"></li>
                <li class="member"></li>
            </ul>
        </div>
    </div>
</script>

<div id="fightContainer"></div>


{% endblock %}