<?php

/* ::layout.html.twig */
class __TwigTemplate_e5aad8aecd47464cccf2aa0236b67868 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'corps' => array($this, 'block_corps'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
<title> ";
        // line 3
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>

";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
<div id=\"content\">
<div id=\"header\"></div>
<div id=\"menu\"></div>

<div id=\"corps\">
";
        // line 16
        $this->displayBlock('corps', $context, $blocks);
        // line 18
        echo "</div>

<div id=\"footer\"></div>

";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "</div>
</body>
</html>";
    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        echo " Chat ";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/chat.css"), "html", null, true);
        echo "\">
";
    }

    // line 16
    public function block_corps($context, array $blocks = array())
    {
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        echo "\t
\t<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/envoi_msg.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/connexion.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  66 => 5,  21 => 1,  36 => 6,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 24,  54 => 27,  133 => 44,  124 => 41,  111 => 37,  80 => 26,  60 => 3,  52 => 22,  97 => 34,  95 => 21,  88 => 29,  78 => 25,  71 => 14,  25 => 3,  72 => 16,  64 => 15,  53 => 13,  34 => 5,  92 => 20,  86 => 23,  79 => 40,  19 => 2,  42 => 10,  40 => 7,  29 => 5,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 40,  47 => 19,  32 => 8,  24 => 3,  22 => 3,  23 => 3,  17 => 1,  69 => 6,  63 => 18,  58 => 9,  49 => 11,  43 => 15,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 24,  57 => 15,  50 => 13,  46 => 18,  44 => 16,  39 => 7,  33 => 7,  30 => 5,  27 => 2,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 20,  87 => 32,  84 => 28,  81 => 22,  73 => 21,  70 => 26,  67 => 19,  62 => 24,  59 => 23,  55 => 14,  51 => 13,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
