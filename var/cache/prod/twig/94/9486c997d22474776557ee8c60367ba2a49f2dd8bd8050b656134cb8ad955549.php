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

/* WebBundle::login.html.twig */
class __TwigTemplate_b20d20ca488eed55ae2df4039e1b08f326c0bdac14adb5bc4d356e8200191e99 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Home:header", ["keywords" => ($context["keywords"] ?? null), "og_image" => ($context["og_image"] ?? null), "og_description" => ($context["og_description"] ?? null), "subtitle" => ($context["subtitle"] ?? null), "og_type" => ($context["og_type"] ?? null)]));
        echo "
        <!-- Bootstrap -->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("web/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
        <script src=\"https://kit.fontawesome.com/017eaf7e3f.js\" crossorigin=\"anonymous\"></script>
    </head>

    <body alt=\"";
        // line 21
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "schemeAndHttpHost", []) . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "baseUrl", [])), "html", null, true);
        echo "\" class=\"";
        echo ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "get", [0 => "theme"], "method") == "light")) ? ("light-mode") : ("dark-mode"));
        echo "\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "all", [], "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 23
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 24
                echo "                <div class=\"alert  alert-home\"   >
                    <i class=\"fas fa-bell\"></i>
                    <button type=\"button\" aria-hidden=\"true\" class=\"close\">
                        <i class=\"fas fa-times\"></i>
                    </button>
                    <span data-notify=\"message\">";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        <div class=\"login-page-bg\" ></div>
        <div class=\"login-page-bg-blur\"></div>
        <div class=\"login-page-content\">
            ";
        // line 36
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "get", [0 => "theme"], "method") == "light")) {
            // line 37
            echo "                <a  id=\"lightmode\" href=\"#\" style=\"display:none\"><i class=\"fas fa-sun\"></i></a>
                <a  id=\"darkmode\" href=\"#\" ><i class=\"fas fa-moon\"></i> </a>
            ";
        } else {
            // line 40
            echo "                <a  id=\"lightmode\" href=\"#\" ><i class=\"fas fa-sun\"></i></a>
                <a  id=\"darkmode\" href=\"#\" style=\"display:none\"><i class=\"fas fa-moon\"></i> </a>
            ";
        }
        // line 43
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Home:logo"));
        echo "
            ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "
        </div>
\t<!-- Include all compiled plugins (below), or include individual files as needed -->
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
\t\t";
        // line 51
        $this->displayBlock('script', $context, $blocks);
        // line 52
        echo "
\t\t<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("web/js/app.js"), "html", null, true);
        echo "\" ></script>
    </body>
</html>";
    }

    // line 44
    public function block_body($context, array $blocks = [])
    {
    }

    // line 51
    public function block_script($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "WebBundle::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 51,  141 => 44,  134 => 53,  131 => 52,  129 => 51,  121 => 45,  119 => 44,  114 => 43,  109 => 40,  104 => 37,  102 => 36,  97 => 33,  91 => 32,  82 => 29,  75 => 24,  70 => 23,  66 => 22,  60 => 21,  47 => 11,  41 => 8,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle::login.html.twig", "C:\\xampp\\htdocs\\webflix\\WebFlix\\src\\WebBundle/Resources/views/login.html.twig");
    }
}
