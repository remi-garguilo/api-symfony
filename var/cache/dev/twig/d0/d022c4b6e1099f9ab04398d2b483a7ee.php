<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Layout/layout_users.html.twig */
class __TwigTemplate_3356b7b9d774fbc82c4cccac2eb6fd0b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Layout/layout_users.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Layout/layout_users.html.twig"));

        // line 1
        echo "<div class=\"d-flex flex-column flex-shrink-0 p-3 text-white bg-dark\" style=\"width: 280px; height: auto;\">
    <a href=\"/\" class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none\">
    <svg class=\"bi me-2\" width=\"40\" height=\"32\"><use xlink:href=\"#bootstrap\"></use></svg>
    <span class=\"fs-4\">Profile</span>
    </a>
    <hr>
    <ul class=\"nav nav-pills flex-column mb-auto\">
    <li class=\"nav-item\">
        <a href=\"/\" class=\"nav-link active\" aria-current=\"page\">
        <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"/\"></use></svg>
        Home
        </a>
    </li>
    <li>
        <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        echo "\" class=\"nav-link text-white\">
        <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#speedometer2\"></use></svg>
        Edit Profile
        </a>
    </li>
    <li>
        <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_password_edit");
        echo "\" class=\"nav-link text-white\">
        <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#speedometer2\"></use></svg>
        Edit Password
        </a>
    </li>
    </ul>
    <hr>
    <div class=\"container d-flex justify-content-between\">
    <a href=\"#\" class=\"d-flex align-items-center text-white text-decoration-none\" id=\"dropdownUser1\">
        <img src=\"https://github.com/mdo.png\" alt=\"\" width=\"32\" height=\"32\" class=\"rounded-circle me-2\">
    </a>
    <div>
        <a class=\"text-white text-decoration-none\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Sign out</a>
    </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Layout/layout_users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 33,  68 => 21,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-flex flex-column flex-shrink-0 p-3 text-white bg-dark\" style=\"width: 280px; height: auto;\">
    <a href=\"/\" class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none\">
    <svg class=\"bi me-2\" width=\"40\" height=\"32\"><use xlink:href=\"#bootstrap\"></use></svg>
    <span class=\"fs-4\">Profile</span>
    </a>
    <hr>
    <ul class=\"nav nav-pills flex-column mb-auto\">
    <li class=\"nav-item\">
        <a href=\"/\" class=\"nav-link active\" aria-current=\"page\">
        <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"/\"></use></svg>
        Home
        </a>
    </li>
    <li>
        <a href=\"{{ path('app_profile_edit')}}\" class=\"nav-link text-white\">
        <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#speedometer2\"></use></svg>
        Edit Profile
        </a>
    </li>
    <li>
        <a href=\"{{ path('app_password_edit')}}\" class=\"nav-link text-white\">
        <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#speedometer2\"></use></svg>
        Edit Password
        </a>
    </li>
    </ul>
    <hr>
    <div class=\"container d-flex justify-content-between\">
    <a href=\"#\" class=\"d-flex align-items-center text-white text-decoration-none\" id=\"dropdownUser1\">
        <img src=\"https://github.com/mdo.png\" alt=\"\" width=\"32\" height=\"32\" class=\"rounded-circle me-2\">
    </a>
    <div>
        <a class=\"text-white text-decoration-none\" href=\"{{path('app_logout')}}\">Sign out</a>
    </div>
    </div>
</div>", "Layout/layout_users.html.twig", "/Users/remigarguilo13/blog-symfony/templates/Layout/layout_users.html.twig");
    }
}
