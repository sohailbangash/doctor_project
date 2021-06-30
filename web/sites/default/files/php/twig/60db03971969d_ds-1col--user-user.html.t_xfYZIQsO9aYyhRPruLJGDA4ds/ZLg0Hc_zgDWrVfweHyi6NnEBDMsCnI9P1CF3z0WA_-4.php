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

/* themes/custom/doctor_themes/templates/users/ds-1col--user-user.html.twig */
class __TwigTemplate_b867607a9f71b653567b678c87f005c19c0d6e80c914bf341ae9db471536f901 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 2];
        $filters = ["escape" => 12];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        // line 2
        if (twig_in_filter("patient", $this->getAttribute(($context["user"] ?? null), "getroles", [0 => true], "method"))) {
            // line 3
            echo "   <!-- ======= Patient User  Section ======= -->
    <section id=\"doctors\" class=\"doctors\">
      <div class=\"container\">

        <div class=\"section-title\">
          ";
            // line 9
            echo "          ";
            // line 10
            echo "
           <div class=\"alert alert-success alert-dismissible fade show mt-3\" role=\"alert\">
                <strong> Thank you! ";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_patient_user_name"] ?? null)), "html", null, true);
            echo " </strong>  <p>Our hospital is a health care institution providing patient treatment with specialized staff and equipment which plays an important role in society</p>
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
                </div>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-6\">
            <div class=\"member d-flex align-items-start\">
              <div class=\"user-pic img-fluid\">  ";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_your_image", [])), "html", null, true);
            echo "</div>
            ";
            // line 25
            echo "

            </div>
          </div>


           <div class=\"col-lg-6 mt-4 mt-lg-0\">
            <div class=\"member d-flex align-items-start\">

              <div class=\"member-info\">

              <ul class=\"list-group\">

              <li class=\"list-group-item list-group-item-action list-group-item-light\"><strong>";
            // line 38
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_patient_user_name"] ?? null)), "html", null, true);
            echo "</strong></li>
               <li class=\"list-group-item list-group-item-action list-group-item-light\">";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_contact", [])), "html", null, true);
            echo "</li>
                <li class=\"list-group-item list-group-item-action list-group-item-light\">";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_age", [])), "html", null, true);
            echo "</li>
                <li class=\"list-group-item list-group-item-action list-group-item-light\">";
            // line 41
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_patient_user_email", [])), "html", null, true);
            echo "</li>

                </ul>



                ";
            // line 53
            echo "

              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Patient Profile Section -->

   ";
        } elseif (twig_in_filter("doctor", $this->getAttribute(        // line 63
($context["user"] ?? null), "getroles", [0 => true], "method"))) {
            // line 64
            echo "      <!-- ======= Doctors profile Section ======= -->

    <section id=\"doctors\" class=\"doctors\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>";
            // line 70
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_your_doctor_name", [])), "html", null, true);
            echo "</h2>
          <p>";
            // line 71
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_your_dr_descripation", [])), "html", null, true);
            echo "</p>
        </div>

 ";
            // line 78
            echo "                 ";
            // line 79
            echo "

        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"member d-flex align-items-start\">
              <div class=\"pic img-fluid\">  ";
            // line 84
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_dr_images", [])), "html", null, true);
            echo "</div>
            ";
            // line 86
            echo "            </div>
          </div>


           <div class=\"col-lg-6 mt-4 mt-lg-0\">
            <div class=\"member d-flex align-items-start\">
              <div class=\"member-info\">
              <ul class=\"list-group list-group-flush\">
               <li class=\"list-group-item\">";
            // line 94
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_dr_department_category", [])), "html", null, true);
            echo "</li>
                <li class=\"list-group-item\">";
            // line 95
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_your_dr_designation", [])), "html", null, true);
            echo "</li>
                <li class=\"list-group-item\">";
            // line 96
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_contact", [])), "html", null, true);
            echo "</li>
                <li class=\"list-group-item\">";
            // line 97
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_dr_email_user", [])), "html", null, true);
            echo "</li>
                <li class=\"list-group-item\">";
            // line 98
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_dr_specializations", [])), "html", null, true);
            echo "</li>
                <li class=\"list-group-item\">";
            // line 99
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_your_dr_fees", [])), "html", null, true);
            echo "</li>
                  <li class=\"list-group-item\"></li>


</ul>
             ";
            // line 104
            if (($context["logged_in"] ?? null)) {
                // line 105
                echo "                   ";
                // line 107
                echo "
                     <a href=\"http://localhost/doctor_project/web/your_appointments\" class=\"list-group-item\" style='background: #00000017;font-weight: bold;border-radius: 30px;'>Your Appointments</a>


                <div class=\"alert alert-success alert-dismissible fade show mt-3\" role=\"alert\">
                <strong> Thank you! ";
                // line 112
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_your_doctor_name", [])), "html", null, true);
                echo "</strong> Thank you for joining your Hospital
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
                </div>

                ";
            }
            // line 119
            echo "
                <div class=\"social\">
                  <a href=\"twitter.com\"><i class=\"ri-twitter-fill\"></i></a>
                  <a href=\"\"><i class=\"ri-facebook-fill\"></i></a>
                  <a href=\"\"><i class=\"ri-instagram-fill\"></i></a>
                  <a href=\"\"> <i class=\"ri-linkedin-box-fill\"></i> </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Doctors Section -->
      ";
        } else {
            // line 134
            echo "          ";
            if (($context["logged_in"] ?? null)) {
                // line 135
                echo "                   <div class=\"list-group-item\" style='background: #00000017;font-weight: bold;border-radius: 30px;'>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_take_appointment", [])), "html", null, true);
                echo "</div>
                ";
            } else {
                // line 137
                echo "                     <a href=\"http://localhost/doctor_project/web/user/login\" class=\"list-group-item\" style='background: #00000017;font-weight: bold;border-radius: 30px;'>Login</a>

                <div class=\"alert alert-warning alert-dismissible fade show mt-3\" role=\"alert\">
                <strong> NOTE!</strong> First you login.Then Book your Appointment!
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
                </div>
                ";
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/doctor_themes/templates/users/ds-1col--user-user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 137,  251 => 135,  248 => 134,  231 => 119,  221 => 112,  214 => 107,  212 => 105,  210 => 104,  202 => 99,  198 => 98,  194 => 97,  190 => 96,  186 => 95,  182 => 94,  172 => 86,  168 => 84,  161 => 79,  159 => 78,  153 => 71,  149 => 70,  141 => 64,  139 => 63,  127 => 53,  118 => 41,  114 => 40,  110 => 39,  106 => 38,  91 => 25,  87 => 23,  73 => 12,  69 => 10,  67 => 9,  60 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/doctor_themes/templates/users/ds-1col--user-user.html.twig", "D:\\xampp\\htdocs\\doctor_project\\web\\themes\\custom\\doctor_themes\\templates\\users\\ds-1col--user-user.html.twig");
    }
}
