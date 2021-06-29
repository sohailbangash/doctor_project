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

/* themes/custom/doctor_themes/templates/field/ds-1col--paragraph-footer.html.twig */
class __TwigTemplate_44e54f6ec3910986afb4faef2d3964a3eea3dfa4d95d3c9edc8ed675a4cbd9ce extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 67];
        $filters = ["escape" => 13];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                []
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
        // line 1
        echo "
 ";
        // line 3
        echo " <!-- ======= Footer ======= -->
  <footer id=\"footer\">

    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6 footer-contact\">
            ";
        // line 12
        echo "            <p>
              ";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_address", [])), "html", null, true);
        echo " <br>
               <br>
              ";
        // line 17
        echo "              <strong>Phone:</strong> ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_tel_number", [])), "html", null, true);
        echo "<br>
              <strong>Email:</strong> ";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_email", [])), "html", null, true);
        echo "<br>
            </p>
          </div>

          <div class=\"col-lg-2 col-md-6 footer-links\">
            <h4>Useful Links</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Home</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">About us</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Services</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">News</a></li>
              ";
        // line 30
        echo "            </ul>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_header_title", [])), "html", null, true);
        echo "</h4>

          
              <div class=\"pic footer_icon\">";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_footer_image", [])), "html", null, true);
        echo "</div>
           
          </div>

          <div class=\"col-lg-4 col-md-6 footer-newsletter\">
            <h4> ";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_footer_sign_title", [])), "html", null, true);
        echo "</h4>
            <p>";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_sign_up_description", [])), "html", null, true);
        echo "</p>
            \t
            <form action=\"\" method=\"post\">
              <input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Sign Up\">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class=\"container d-md-flex py-4\">

      <div class=\"mr-md-auto text-center text-md-left\">
        <div class=\"copyright\">
          ";
        // line 63
        echo "      </div> 
      

      <div class=\"social-links text-center text-md-right pt-3 pt-md-0\">
       ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_social_icons", []), "#items", [], "array"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["footer_link"]) {
            // line 68
            echo "                  <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["footer_link"], "url", [], "method")), "html", null, true);
            echo "\">
        <img src=\"";
            // line 69
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_social_images", [], "array"), ($this->getAttribute($context["loop"], "index", []) - 1)), "#markup", [], "array")), "html", null, true);
            echo "\" class=\"float-md-right pl-2 footer__icon-hover social-links\" style=\"width: 2.5rem;\">
                     </a>
                 ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footer_link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo " 
      </div>
    </div>
  </footer><!-- End Foote



   <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
        <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
        <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>";
    }

    public function getTemplateName()
    {
        return "themes/custom/doctor_themes/templates/field/ds-1col--paragraph-footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 71,  165 => 69,  160 => 68,  143 => 67,  137 => 63,  119 => 43,  115 => 42,  107 => 37,  101 => 34,  95 => 30,  81 => 18,  76 => 17,  71 => 13,  68 => 12,  58 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/doctor_themes/templates/field/ds-1col--paragraph-footer.html.twig", "D:\\xampp\\htdocs\\doctor_project\\web\\themes\\custom\\doctor_themes\\templates\\field\\ds-1col--paragraph-footer.html.twig");
    }
}
