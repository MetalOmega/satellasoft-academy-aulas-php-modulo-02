{% extends "main.twig.php" %}

{% block body %}

<div>

    <h1>{{data}}</h1>
    <h1>{{data | date(DATE_FORMAT)}}</h1>

    {% if mensagem | length <= 40 %}

    <h1>{{mensagem}}</h1>
    <h1>{{mensagem | length}}</h1>

    <h1>{{mensagem | slice (0,15) }}</h1>

    {% endif %}

<ul>

    {% set indice = 1 %}

    {% for cid in cidades %}

    <li>{{indice}} - {{cid}}</li>

    {% set indice = indice + 1 %}

    {% endfor %}

</ul>
    <hr>

    {{VAR_NAME}}

    {% if idade >= 18 %}

    <h1>EBAAA!</h1>
    <p>{{nome}} você pode entrar!</p>

    {% else %}

    <p>Não Pode Entrar Sozinho(a)</p>

    {% endif %}

</div>

{% endblock %}
