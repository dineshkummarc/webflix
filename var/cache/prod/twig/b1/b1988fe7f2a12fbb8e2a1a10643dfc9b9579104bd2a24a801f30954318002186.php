<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_6f80fb9caade6c4ad41fe215aefcfdfcedf5c789d47332a847cff650e463f5ee extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "WebBundle::login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["subtitle"] = "404!";
        // line 3
        $context["og_description"] = "404!";
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::login.html.twig", "@Twig/Exception/error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        // line 9
        echo "                <br>
            <br>
            <br>
            <br>
        <div class=\"login-box\">

            <div class=\"notif-body\">
                <div class=\"carda__body pdn--al\">
                    <br>
                    <h1>404</h1>
                    <br>
                    <p>The page you where looking for doesn't exist</p>
                                        <br>
                    <br>
                    <a class=\"float-right\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_home_index");
        echo "\"><i class=\"fa fa-fw fa-home \"></i> Go Home</a>
                    <br>
                    <br>

                </div>
            </div>
        </div>
   ";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  53 => 9,  50 => 8,  45 => 1,  43 => 6,  41 => 5,  39 => 4,  37 => 3,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error.html.twig", "C:\\xampp\\htdocs\\webflix\\WebFlix\\app\\Resources\\TwigBundle\\views\\Exception\\error.html.twig");
    }
}
