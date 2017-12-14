<?php

/* base.html.twig */
class __TwigTemplate_429fb43c2efe8dc411128ef4c6ddeea6e45f89b25a33b5aab4318fa925b086db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02e3d09a2dafd5d1612f0b721bd6b319e0fb561b85ee656fd9ae8120cf885735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02e3d09a2dafd5d1612f0b721bd6b319e0fb561b85ee656fd9ae8120cf885735->enter($__internal_02e3d09a2dafd5d1612f0b721bd6b319e0fb561b85ee656fd9ae8120cf885735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8f3920530af11246a7b5dc12bc638be6e68f8c0b5113700990dceb6d1d2868b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3920530af11246a7b5dc12bc638be6e68f8c0b5113700990dceb6d1d2868b4->enter($__internal_8f3920530af11246a7b5dc12bc638be6e68f8c0b5113700990dceb6d1d2868b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_02e3d09a2dafd5d1612f0b721bd6b319e0fb561b85ee656fd9ae8120cf885735->leave($__internal_02e3d09a2dafd5d1612f0b721bd6b319e0fb561b85ee656fd9ae8120cf885735_prof);

        
        $__internal_8f3920530af11246a7b5dc12bc638be6e68f8c0b5113700990dceb6d1d2868b4->leave($__internal_8f3920530af11246a7b5dc12bc638be6e68f8c0b5113700990dceb6d1d2868b4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7ff5e68b104cb39ba3a9d525bd3d8f32db301c0ba36794c2fd3bd1d66650ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7ff5e68b104cb39ba3a9d525bd3d8f32db301c0ba36794c2fd3bd1d66650ad6->enter($__internal_e7ff5e68b104cb39ba3a9d525bd3d8f32db301c0ba36794c2fd3bd1d66650ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3316722b81aaa520762c9583b1755669b64a2c413d558fa7e4b9823102c1c1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3316722b81aaa520762c9583b1755669b64a2c413d558fa7e4b9823102c1c1a3->enter($__internal_3316722b81aaa520762c9583b1755669b64a2c413d558fa7e4b9823102c1c1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3316722b81aaa520762c9583b1755669b64a2c413d558fa7e4b9823102c1c1a3->leave($__internal_3316722b81aaa520762c9583b1755669b64a2c413d558fa7e4b9823102c1c1a3_prof);

        
        $__internal_e7ff5e68b104cb39ba3a9d525bd3d8f32db301c0ba36794c2fd3bd1d66650ad6->leave($__internal_e7ff5e68b104cb39ba3a9d525bd3d8f32db301c0ba36794c2fd3bd1d66650ad6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_29d05e34adda86ac8d16334de4f4cd5d0834e0a8423b5883611054d8e844e9f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d05e34adda86ac8d16334de4f4cd5d0834e0a8423b5883611054d8e844e9f3->enter($__internal_29d05e34adda86ac8d16334de4f4cd5d0834e0a8423b5883611054d8e844e9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_df80feb5b4337595badcf68f3090644bd01719c7a746c315d52f8f67fcb93980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df80feb5b4337595badcf68f3090644bd01719c7a746c315d52f8f67fcb93980->enter($__internal_df80feb5b4337595badcf68f3090644bd01719c7a746c315d52f8f67fcb93980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_df80feb5b4337595badcf68f3090644bd01719c7a746c315d52f8f67fcb93980->leave($__internal_df80feb5b4337595badcf68f3090644bd01719c7a746c315d52f8f67fcb93980_prof);

        
        $__internal_29d05e34adda86ac8d16334de4f4cd5d0834e0a8423b5883611054d8e844e9f3->leave($__internal_29d05e34adda86ac8d16334de4f4cd5d0834e0a8423b5883611054d8e844e9f3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7679c1b196a7cc04cf5342779e267bf6bedcf427e2650029184136308daa18f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7679c1b196a7cc04cf5342779e267bf6bedcf427e2650029184136308daa18f0->enter($__internal_7679c1b196a7cc04cf5342779e267bf6bedcf427e2650029184136308daa18f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1a851f2ff48fb3a432f1ac1ef58b01cebd08c9ca94bca2f2d939075fd23bb66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a851f2ff48fb3a432f1ac1ef58b01cebd08c9ca94bca2f2d939075fd23bb66->enter($__internal_f1a851f2ff48fb3a432f1ac1ef58b01cebd08c9ca94bca2f2d939075fd23bb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f1a851f2ff48fb3a432f1ac1ef58b01cebd08c9ca94bca2f2d939075fd23bb66->leave($__internal_f1a851f2ff48fb3a432f1ac1ef58b01cebd08c9ca94bca2f2d939075fd23bb66_prof);

        
        $__internal_7679c1b196a7cc04cf5342779e267bf6bedcf427e2650029184136308daa18f0->leave($__internal_7679c1b196a7cc04cf5342779e267bf6bedcf427e2650029184136308daa18f0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7b265ba762bae652be18d596b3f59cd0cb89bb494d8e575528ffe2852ff68288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b265ba762bae652be18d596b3f59cd0cb89bb494d8e575528ffe2852ff68288->enter($__internal_7b265ba762bae652be18d596b3f59cd0cb89bb494d8e575528ffe2852ff68288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_295e54959c0a060d71077a5dfa841428c0f2b25c8c8ed25c16bd45a49dfd71a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295e54959c0a060d71077a5dfa841428c0f2b25c8c8ed25c16bd45a49dfd71a9->enter($__internal_295e54959c0a060d71077a5dfa841428c0f2b25c8c8ed25c16bd45a49dfd71a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_295e54959c0a060d71077a5dfa841428c0f2b25c8c8ed25c16bd45a49dfd71a9->leave($__internal_295e54959c0a060d71077a5dfa841428c0f2b25c8c8ed25c16bd45a49dfd71a9_prof);

        
        $__internal_7b265ba762bae652be18d596b3f59cd0cb89bb494d8e575528ffe2852ff68288->leave($__internal_7b265ba762bae652be18d596b3f59cd0cb89bb494d8e575528ffe2852ff68288_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\UwAmp\\www\\my_project_name\\app\\Resources\\views\\base.html.twig");
    }
}
