<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_2e1436df82eaf8a5a1b4510a6053eb599ef4d0f56108dfe9fdacf60d281f0a0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\">
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " / ";
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit") == (-1))) ? ("&infin;") : (twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit") / 1024) / 1024)))));
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  191 => 67,  178 => 66,  175 => 65,  172 => 64,  134 => 54,  118 => 49,  363 => 126,  357 => 123,  353 => 121,  351 => 120,  332 => 116,  327 => 114,  324 => 113,  321 => 112,  318 => 111,  315 => 110,  306 => 107,  303 => 106,  297 => 104,  291 => 102,  288 => 101,  274 => 97,  265 => 96,  263 => 95,  255 => 93,  231 => 83,  212 => 78,  202 => 77,  190 => 76,  185 => 74,  174 => 65,  161 => 63,  113 => 48,  104 => 32,  100 => 39,  77 => 25,  65 => 22,  20 => 1,  361 => 333,  349 => 323,  347 => 322,  344 => 119,  302 => 281,  300 => 105,  97 => 41,  58 => 14,  127 => 60,  110 => 22,  90 => 37,  84 => 27,  76 => 31,  23 => 1,  70 => 26,  53 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 100,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 58,  132 => 51,  128 => 49,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 92,  240 => 86,  238 => 85,  235 => 85,  230 => 82,  227 => 81,  224 => 81,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 51,  135 => 62,  119 => 40,  102 => 40,  71 => 13,  67 => 24,  63 => 18,  59 => 16,  94 => 34,  89 => 30,  85 => 24,  75 => 19,  68 => 12,  56 => 16,  38 => 7,  26 => 3,  93 => 38,  88 => 32,  78 => 18,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 62,  156 => 62,  151 => 59,  142 => 59,  138 => 54,  136 => 48,  121 => 50,  117 => 39,  105 => 18,  91 => 33,  62 => 21,  49 => 14,  27 => 3,  87 => 34,  46 => 13,  44 => 10,  31 => 4,  25 => 35,  21 => 2,  28 => 3,  24 => 3,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 11,  40 => 11,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 59,  120 => 20,  115 => 43,  111 => 47,  108 => 47,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 27,  66 => 25,  55 => 16,  52 => 12,  50 => 16,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 75,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 60,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 51,  122 => 41,  116 => 41,  112 => 36,  109 => 35,  106 => 45,  103 => 32,  99 => 31,  95 => 39,  92 => 27,  86 => 28,  82 => 28,  80 => 32,  73 => 24,  64 => 23,  60 => 20,  57 => 19,  54 => 19,  51 => 13,  48 => 16,  45 => 9,  42 => 11,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
