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

/* modules/contrib/user_info_widget/templates/user-info-widget.html.twig */
class __TwigTemplate_246d1333cd6ef5bf76fc8c1bf8204984b125c91b22900ee38bc262e7b75807e8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 23, "if" => 28, "for" => 44];
        $filters = ["escape" => 27];
        $functions = ["simplify_menu" => 35];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
                ['simplify_menu']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 22
        echo "
";
        // line 23
        $context["classes"] = [0 => "user_info_block"];
        // line 26
        echo "
<div";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 28
        if (($context["user_picture"] ?? null)) {
            // line 29
            echo "        <img class=\"noselect\" src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["alt"] ?? null)), "html", null, true);
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "\">
    ";
        } else {
            // line 31
            echo "        To configure user profile picture for the widget click <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["config_path"] ?? null)), "html", null, true);
            echo "\">here</a>.
    ";
        }
        // line 33
        echo "
    ";
        // line 34
        if (($context["menu"] ?? null)) {
            // line 35
            echo "        ";
            $context["items"] = call_user_func_array($this->env->getFunction('simplify_menu')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["menu"] ?? null))]);
            // line 36
            echo "    ";
        }
        // line 37
        echo "
    <nav class=\"navigation__items dropdown\">
        ";
        // line 39
        if (($context["logged_in"] ?? null)) {
            // line 40
            echo "            ";
            if (($context["username"] ?? null)) {
                // line 41
                echo "                <li class=\"special__item\"><span class=\"badge\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["username"] ?? null)), "html", null, true);
                echo "</span></li>
            ";
            }
            // line 43
            echo "        ";
        }
        // line 44
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["items"] ?? null), "menu_tree", []));
        foreach ($context['_seq'] as $context["_key"] => $context["menu_item"]) {
            // line 45
            echo "            <li class=\"navigation__item\">
                <a href=\"";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["menu_item"], "url", [])), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["menu_item"], "text", [])), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </nav>
</div>


";
    }

    public function getTemplateName()
    {
        return "modules/contrib/user_info_widget/templates/user-info-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 49,  122 => 46,  119 => 45,  114 => 44,  111 => 43,  105 => 41,  102 => 40,  100 => 39,  96 => 37,  93 => 36,  90 => 35,  88 => 34,  85 => 33,  79 => 31,  69 => 29,  67 => 28,  63 => 27,  60 => 26,  58 => 23,  55 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/user_info_widget/templates/user-info-widget.html.twig", "D:\\xampp\\htdocs\\doctor_project\\web\\modules\\contrib\\user_info_widget\\templates\\user-info-widget.html.twig");
    }
}
