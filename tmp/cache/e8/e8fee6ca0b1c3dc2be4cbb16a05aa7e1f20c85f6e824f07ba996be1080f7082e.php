<?php

/* temp_todo.tw */
class __TwigTemplate_e642b5947384fd3f32c8b6ffb6b3cff5998c275b29a5fd21d7e4b4d4328eeeec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>ToDo</title>
\t<link rel=\"stylesheet\" href=\"css/app.css\">
</head>
<body>
\t<header>
\t\t<hgroup>
\t\t\t<h1>TODO (список дел)</h1>
\t\t</hgroup>
\t\t<nav>
\t\t\t<div class=\"main-menu\">
\t\t\t\t<ul class=\"main-menu-ul\">
\t\t\t\t\t<li><a href=\"logout.php\">выход</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
\t</header>
\t<article class=\"container-fluid\">
\t\t<div class=\"search-form\">
\t\t\t<form enctype=\"multipart/form-data\" action=\"todo.php\" method=\"post\">
\t\t\t\t<div class=\"search-form-group\">
\t\t\t\t\t<label for=\"addTask\">добавить задачу</label>
\t\t\t\t\t<input type=\"text\" pattern=\"[a-zA-Zа-яА-Я0-9 -_]*\" name=\"addTask\" placeholder=\"Описание задачи\" value=\"\">
\t\t\t\t\t<button type=\"submit\">добавить</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<form enctype=\"multipart/form-data\" action=\"todo.php\" method=\"POST\">
\t\t\t\t<div class=\"search-form-group\">
\t\t\t\t\t<label for=\"sort_by\">сортировать по:</label>
\t\t\t\t\t<select class=\"sort\" name=\"sort_by\">
\t\t\t            <option value=\"date_added\">дате добавления</option>
\t\t\t            <option value=\"is_done\">статусу</option>
\t\t\t            <option value=\"description\">описанию</option>
\t\t\t        </select>
        \t\t\t<button type=\"submit\" name=\"sort\" value=\"сортировать\">сортировать</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</article>
\t<article class=\"container-fluid\">
\t\t<div class=\"list\">
\t\t\t<table class=\"list-table\">
\t\t\t\t<tr>
\t\t\t\t\t<th></th>
\t\t\t\t\t<th class=\"th-title\">описание задачи</th>
\t\t\t\t\t<th>дата добавления</th>
\t\t\t\t\t<th>статус</th>\t\t
\t\t\t\t\t<th>Ответственный</th>
\t\t\t\t\t<th>Автор</th>
\t\t\t\t\t<th>Закрепить задачу за пользователем</th>
\t\t\t\t</tr>
\t\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks_rows"]) ? $context["tasks_rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 56
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"t-center\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"td-title\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "description", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"t-center\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "date_added", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t";
            // line 60
            if (($this->getAttribute($context["row"], "is_done", array()) == "0")) {
                // line 61
                echo "\t\t\t\t\t<td>в процессе</td>
\t\t\t\t\t";
            } else {
                // line 63
                echo "\t\t\t\t\t<td>готово</td>
\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t\t<td class=\"t-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "login", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"t-center\">";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["session"]) ? $context["session"] : null), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<form enctype=\"multipart/form-data\" action=\"todo.php\" method=\"POST\">
\t\t\t\t\t\t\t<div class=\"select-form-group\">
\t\t\t\t\t\t\t\t<select class=\"select-login\" name=\"login_select\">
\t\t\t\t\t";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["logins_rows"]) ? $context["logins_rows"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 72
                echo "\t\t\t\t\t\t            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "login", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\t\t\t\t\t\t        </select>
\t\t\t\t\t\t        <button class=\"select-user-button\" type=\"submit\" name=\"select_user_button\" value=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
            echo "\"><img src=\"img/tick.png\" alt=\"\"></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t\t\t</table>
\t\t</div>
\t</article>
\t<article class=\"container-fluid\">
\t\t<div class=\"article-title\">
\t\t\t<h2 class=\"h2-article\">Задачи, где Вы являетесь ответственным исполнителем:</h2>
\t\t</div>
\t\t<div class=\"list\">
\t\t\t<table class=\"list-table\">
\t\t\t\t<tr>
\t\t\t\t\t<th></th>
\t\t\t\t\t<th class=\"th-title\">описание задачи</th>
\t\t\t\t\t<th>дата добавления</th>
\t\t\t\t\t<th>статус</th>
\t\t\t\t\t<th>Автор</th>
\t\t\t\t\t<th>Сменить статус</th>
\t\t\t\t</tr>
\t\t\t\t";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assigned_tasks_rows"]) ? $context["assigned_tasks_rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 99
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"t-center\">";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"td-title\">";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "description", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"t-center\">";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "date_added", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t";
            // line 103
            if (($this->getAttribute($context["task"], "is_done", array()) == "0")) {
                // line 104
                echo "\t\t\t\t\t<td>в процессе</td>
\t\t\t\t\t";
            } else {
                // line 106
                echo "\t\t\t\t\t<td>готово</td>
\t\t\t\t\t";
            }
            // line 108
            echo "\t\t\t\t\t<td class=\"t-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "login", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"t-center\">
\t\t\t\t\t\t<a href=\"todo.php?id=";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
            echo "&step=done\">
\t\t\t\t\t\t\t<img  class=\"action\" src=\"img/tick.png\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "\t\t\t</table>
\t\t</div>
\t</article>
\t<footer>
\t\t<div class=\"end-phrase\">\"Вологодские леса\" @ 2016</div>
\t</footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "temp_todo.tw";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 116,  201 => 110,  195 => 108,  191 => 106,  187 => 104,  185 => 103,  181 => 102,  177 => 101,  173 => 100,  170 => 99,  166 => 98,  147 => 81,  135 => 75,  132 => 74,  121 => 72,  117 => 71,  109 => 66,  104 => 65,  100 => 63,  96 => 61,  94 => 60,  90 => 59,  86 => 58,  82 => 57,  79 => 56,  75 => 55,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "temp_todo.tw", "E:\\OpenServer\\OpenServer\\domains\\netology\\dz8_2-src\\templates\\temp_todo.tw");
    }
}
