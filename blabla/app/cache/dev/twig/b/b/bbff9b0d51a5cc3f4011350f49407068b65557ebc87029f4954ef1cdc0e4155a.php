<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_bbff9b0d51a5cc3f4011350f49407068b65557ebc87029f4954ef1cdc0e4155a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e5035536d7ca325804bde7f4e09d9be10a422e960091d336f2046f4e231d35e = $this->env->getExtension("native_profiler");
        $__internal_6e5035536d7ca325804bde7f4e09d9be10a422e960091d336f2046f4e231d35e->enter($__internal_6e5035536d7ca325804bde7f4e09d9be10a422e960091d336f2046f4e231d35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e5035536d7ca325804bde7f4e09d9be10a422e960091d336f2046f4e231d35e->leave($__internal_6e5035536d7ca325804bde7f4e09d9be10a422e960091d336f2046f4e231d35e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_916e23f49337683d121559b975dd68820d9d8815a73d53997f2422efc654015b = $this->env->getExtension("native_profiler");
        $__internal_916e23f49337683d121559b975dd68820d9d8815a73d53997f2422efc654015b->enter($__internal_916e23f49337683d121559b975dd68820d9d8815a73d53997f2422efc654015b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_916e23f49337683d121559b975dd68820d9d8815a73d53997f2422efc654015b->leave($__internal_916e23f49337683d121559b975dd68820d9d8815a73d53997f2422efc654015b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_51b63bd6df546540cbe8f0b289ef783685afe0602daae989e77b35c6a023358b = $this->env->getExtension("native_profiler");
        $__internal_51b63bd6df546540cbe8f0b289ef783685afe0602daae989e77b35c6a023358b->enter($__internal_51b63bd6df546540cbe8f0b289ef783685afe0602daae989e77b35c6a023358b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_51b63bd6df546540cbe8f0b289ef783685afe0602daae989e77b35c6a023358b->leave($__internal_51b63bd6df546540cbe8f0b289ef783685afe0602daae989e77b35c6a023358b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_38c7a24674705648e96d7918f14ed0ff95b7942e00029c6b6fc5eb8e945f59b1 = $this->env->getExtension("native_profiler");
        $__internal_38c7a24674705648e96d7918f14ed0ff95b7942e00029c6b6fc5eb8e945f59b1->enter($__internal_38c7a24674705648e96d7918f14ed0ff95b7942e00029c6b6fc5eb8e945f59b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_38c7a24674705648e96d7918f14ed0ff95b7942e00029c6b6fc5eb8e945f59b1->leave($__internal_38c7a24674705648e96d7918f14ed0ff95b7942e00029c6b6fc5eb8e945f59b1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
