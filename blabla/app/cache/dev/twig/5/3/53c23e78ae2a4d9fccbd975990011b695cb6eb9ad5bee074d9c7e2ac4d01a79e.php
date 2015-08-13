<?php

/* GuzzleBundle::debug.html.twig */
class __TwigTemplate_53c23e78ae2a4d9fccbd975990011b695cb6eb9ad5bee074d9c7e2ac4d01a79e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "GuzzleBundle::debug.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'head' => array($this, 'block_head'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_087a2fb8a7fb41fa04ff3996f766964ea59aea3e9c6b9050bc9997ad5c987076 = $this->env->getExtension("native_profiler");
        $__internal_087a2fb8a7fb41fa04ff3996f766964ea59aea3e9c6b9050bc9997ad5c987076->enter($__internal_087a2fb8a7fb41fa04ff3996f766964ea59aea3e9c6b9050bc9997ad5c987076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GuzzleBundle::debug.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_087a2fb8a7fb41fa04ff3996f766964ea59aea3e9c6b9050bc9997ad5c987076->leave($__internal_087a2fb8a7fb41fa04ff3996f766964ea59aea3e9c6b9050bc9997ad5c987076_prof);

    }

    // line 4
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a80206973d4312f04679cfa44848e39a263bc14147aea34e3cb1e27050ca9ed = $this->env->getExtension("native_profiler");
        $__internal_0a80206973d4312f04679cfa44848e39a263bc14147aea34e3cb1e27050ca9ed->enter($__internal_0a80206973d4312f04679cfa44848e39a263bc14147aea34e3cb1e27050ca9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 5
        echo "
    ";
        // line 6
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callCount", array()) == 0)) {
            // line 7
            echo "        ";
            $context["color"] = "grey";
            // line 8
            echo "    ";
        } elseif (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "errorCount", array()) > 0)) {
            // line 9
            echo "        ";
            $context["color"] = "red";
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "        ";
            $context["color"] = "green";
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    ";
        // line 14
        ob_start();
        // line 15
        echo "        <img width=\"18\"
             height=\"28\"
             alt=\"Guzzle\"
             src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAcCAYAAABsxO8nAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAAd0SU1FB9wJFA0kAmx9x5QAAAAdaVRYdENvbW1lbnQAAAAAAENyZWF0ZWQgd2l0aCBHSU1QZC5lBwAAAsRJREFUOMvdlL1vXUUQxc+ZXV/HJCSiQRRBdOHDEYVrR5Gf3vWHrMjPtHTQ5m9IRQtI/AE0NDS2sYSc5+cPCSwUKVKE5BRBKD1ShEgsEM593pmh2Wvte3kE6kxz9652f3PmzNwLvLLBdrGwsPAGyTkRaQAYACVZkUyDweDe/wJ1Op2eiGzFGEESIQSYGcwMAODup7u7u6/9J6jb7T6cmpq6XlXVdRG5TDK6u6rqM1X9xszmRGQ2pfRrVVX3qqr6dGNj4/gF0PLy8o/T09M3tre3OZ5pbW1tXVU3U0pz/X7/59XVVQ8hIMb44ebm5sP2nAAAyQsvUf02SZAc5vebqorhcHjc6/XeHQEBeK6qk2sn/zAzkEzZr5OU0klKCSml+yOglNJTd58IOjs7g6rC3U8BwMwigGMz+0VVL7fnIgCo6pOmabCysrKVWz/j7n8COBsOhx+TRIzxBAD6/f6DxcXF70h+nlLCOOiZmUFVeyTbks7bH2PEzs7OSXtpMBh80e12ZwB8NgIys6chBLg7Wq/cHdlkmBnquva8t7W3t/eRiNwv7Yj5kpsZRKQ0Ga26lBJIfk/yfQDrnU6n0zTNkxDCKKj8VEqYmSGEgJQSjo6ObuWv4CcAKyQPyk7HfPnvdqOUKyJQ1XNluYtBRC4AuFruS87srbHt8yXxG8lHAJpSfbu6KCIY96lVV8JJXnL3d0IId0miruvZc5CI/KuMcXgI4UqM8drh4eHvuaOzZWnPW0/GSyshOU4BXCwUflAq4qTs7g4RGW9AjDFWWd0PJN8rPZqZVJaIjMxTvvy6u7fz97W7r5dzdGmSNyGEF0DufiWEMJ3XjbtXpaLZcqJLv8wMMUbUdf1mVnQHwLW6rp3ktyLy6Hyi5+fnr4rIbRF5bGZ/5Z+YAJgRkbdCCGl/f//LNtnS0tJNVf3E3R8cHBx8hVc7/gEz5WHvMjpIQQAAAABJRU5ErkJggg==\"/>
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
        echo "\">
            ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callCount", array()), "html", null, true);
        echo "
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "
    ";
        // line 24
        ob_start();
        // line 25
        echo "
        <div class=\"sf-toolbar-info-piece\">
            <b>API Calls</b>
            <span>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callCount", array()), "html", null, true);
        echo "</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            ";
        // line 33
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "totalTime", array()) > 1)) {
            // line 34
            echo "                <span>";
            echo twig_escape_filter($this->env, sprintf("%0.2f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "totalTime", array())), "html", null, true);
            echo " s</span>
            ";
        } else {
            // line 36
            echo "                <span>";
            echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "totalTime", array()) * 1000)), "html", null, true);
            echo " ms</span>
            ";
        }
        // line 38
        echo "        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 40
        echo "
    ";
        // line 41
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "GuzzleBundle::debug.html.twig", 41)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
        
        $__internal_0a80206973d4312f04679cfa44848e39a263bc14147aea34e3cb1e27050ca9ed->leave($__internal_0a80206973d4312f04679cfa44848e39a263bc14147aea34e3cb1e27050ca9ed_prof);

    }

    // line 45
    public function block_menu($context, array $blocks = array())
    {
        $__internal_882723bdeeca3cec71e36831b51e8584de8c88c0470c7986cf19f3bf1446a49a = $this->env->getExtension("native_profiler");
        $__internal_882723bdeeca3cec71e36831b51e8584de8c88c0470c7986cf19f3bf1446a49a->enter($__internal_882723bdeeca3cec71e36831b51e8584de8c88c0470c7986cf19f3bf1446a49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 46
        echo "
    <span class=\"label\">
        <span class=\"icon\">
            <img src=\"data:image/png;base64,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\"
                 alt=\"\"/>
        </span>
        <strong>Guzzle</strong>
        <span class=\"count\">
            <span>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callCount", array()), "html", null, true);
        echo "</span>
        </span>
    </span>
";
        
        $__internal_882723bdeeca3cec71e36831b51e8584de8c88c0470c7986cf19f3bf1446a49a->leave($__internal_882723bdeeca3cec71e36831b51e8584de8c88c0470c7986cf19f3bf1446a49a_prof);

    }

    // line 60
    public function block_head($context, array $blocks = array())
    {
        $__internal_663f7efa7b5223817495d2e3cfb2130c38c458df2656cb8597e590f84d851ff5 = $this->env->getExtension("native_profiler");
        $__internal_663f7efa7b5223817495d2e3cfb2130c38c458df2656cb8597e590f84d851ff5->enter($__internal_663f7efa7b5223817495d2e3cfb2130c38c458df2656cb8597e590f84d851ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 61
        echo "
    ";
        // line 62
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/guzzle/css/main.css"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/guzzle/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_663f7efa7b5223817495d2e3cfb2130c38c458df2656cb8597e590f84d851ff5->leave($__internal_663f7efa7b5223817495d2e3cfb2130c38c458df2656cb8597e590f84d851ff5_prof);

    }

    // line 68
    public function block_panel($context, array $blocks = array())
    {
        $__internal_67f96b15e30f69cf303f0a07b1cfebafbf70e271f4f0c861029457aaa7126a57 = $this->env->getExtension("native_profiler");
        $__internal_67f96b15e30f69cf303f0a07b1cfebafbf70e271f4f0c861029457aaa7126a57->enter($__internal_67f96b15e30f69cf303f0a07b1cfebafbf70e271f4f0c861029457aaa7126a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 69
        echo "
    <h2>Logs</h2>

    ";
        // line 72
        $this->loadTemplate("GuzzleBundle::profiler.html.twig", "GuzzleBundle::debug.html.twig", 72)->display(array_merge($context, array("collector" => (isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")))));
        
        $__internal_67f96b15e30f69cf303f0a07b1cfebafbf70e271f4f0c861029457aaa7126a57->leave($__internal_67f96b15e30f69cf303f0a07b1cfebafbf70e271f4f0c861029457aaa7126a57_prof);

    }

    public function getTemplateName()
    {
        return "GuzzleBundle::debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 72,  193 => 69,  187 => 68,  178 => 65,  174 => 64,  169 => 62,  166 => 61,  160 => 60,  149 => 54,  139 => 46,  133 => 45,  126 => 41,  123 => 40,  119 => 38,  113 => 36,  107 => 34,  105 => 33,  97 => 28,  92 => 25,  90 => 24,  87 => 23,  81 => 20,  77 => 19,  71 => 15,  69 => 14,  66 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  51 => 8,  48 => 7,  46 => 6,  43 => 5,  37 => 4,  11 => 1,);
    }
}
