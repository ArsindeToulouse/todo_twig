<?php

/* temp_index.tw */
class __TwigTemplate_098a32990c1c6e2adff102f12d83ad3ddd777a75fdb951cac54861594388e222 extends Twig_Template
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
\t<title>Lesson 8.2</title>
\t<link rel=\"stylesheet\" href=\"css/app.css\">
</head>
<body>
\t<header>
\t\t<hgroup>
\t\t\t<h1>TODO (список дел)</h1>
\t\t</hgroup>
\t\t<nav>
\t\t\t<div class=\"main-menu\"></div>
\t\t</nav>
\t</header>
\t<article class=\"container-fluid\">
\t\t<div class=\"auth\">
\t\t\t<form enctype=\"multipart/form-data\" action=\"index.php\" class=\"form-auth\" method=\"post\">
\t\t\t\t<h3 class=\"auth-h3\">зарегистрироваться</h3>
\t\t\t\t<div class=\"test-form-auth-group\">
\t\t\t\t\t<label for=\"newlogin\" class=\"label-auth\">имя или ник:</label>
\t\t\t\t\t<input type=\"text\" pattern=\"[a-zA-Z]*\" name=\"newlogin\">
\t\t\t\t</div>
\t\t\t\t<div class=\"test-form-auth-group\">
\t\t\t\t\t<label for=\"newpassword\" class=\"label-auth\">пароль:</label>
\t\t\t\t\t<input type=\"password\" name=\"newpassword\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-auth-button-group\">
\t\t\t\t\t<button class=\"button-auth\">сохранить</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t\t<div class=\"or\">
\t\t\t<h3 class=\"auth-h3\">или</h3>
\t\t</div>
\t\t<div class=\"auth\">
\t\t\t<form enctype=\"multipart/form-data\" action=\"index.php\" class=\"form-auth\" method=\"post\">
\t\t\t\t<h3 class=\"auth-h3\">войти</h3>
\t\t\t\t<div class=\"test-form-auth-group\">
\t\t\t\t\t<label for=\"login\" class=\"label-auth\">имя или ник:</label>
\t\t\t\t\t<input type=\"text\" pattern=\"[a-zA-Z]*\" name=\"login\">
\t\t\t\t</div>
\t\t\t\t<div class=\"test-form-auth-group\">
\t\t\t\t\t<label for=\"password\" class=\"label-auth\">пароль:</label>
\t\t\t\t\t<input type=\"password\" name=\"password\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-auth-button-group\">
\t\t\t\t\t<button class=\"button-auth\">войти</button>
\t\t\t\t</div>
\t\t\t</form>
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
        return "temp_index.tw";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "temp_index.tw", "E:\\OpenServer\\OpenServer\\domains\\netology\\ToDo\\templates\\temp_index.tw");
    }
}
