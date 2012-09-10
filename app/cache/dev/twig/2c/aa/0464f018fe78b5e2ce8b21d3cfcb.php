<?php

/* ChatChatBundle:Chat:index.html.twig */
class __TwigTemplate_2caa0464f018fe78b5e2ce8b21d3cfcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("titre", $context, $blocks);
        echo " - Bienvenue
";
    }

    // line 6
    public function block_corps($context, array $blocks = array())
    {
        // line 7
        echo "<h1>Chat</h1>
<div class=\"chat\">
\t<div class=\"user\">
\t\t<form action=\"\" name=\"signIn\" >
\t\t\t<span class=\"erreur\">Utilisateur invalide</span>
\t\t\t<input type=\"text\" size=\"13px\" name=\"nom\" id=\"nom\" placeholder=\"Votre pseudo\">
\t\t\t<input type=\"submit\" id=\"signin\" value=\"sign in\"/>
\t\t</form>
\t</div>
\t<div id=\"messages\" class=\"messages\">
\t\t<p>Administrateur : Bonjour, Vos messages ici</p>
\t\t
\t</div>
\t<div class=\"envoiMsg\">
\t\t<form id=\"signInForm\" name=\"signInForm\" onsubmit=\"return false\">
\t\t\t<input type=\"submit\" id=\"msgSignIn\" value=\"Connectez vous pour acceder au chat\"/>
\t\t</form>
\t\t<form name=\"nouveauMsgForm\" class=\"nouveauMsgForm\" onsubmit=\"return false;\">
\t\t\t<div class=\"left\" >
\t\t\t<textarea id=\"nouveauMsg\" name=\"nouveauMsg\" placeholder=\"Votre message ici\"></textarea>
\t\t\t</div>
\t\t\t<div class=\"right\">
\t\t\t<input type=\"submit\" value=\"Envoyer\" id=\"nouveauMsgEnvoi\">
\t\t\t</div>
\t\t</form>
\t</div>
\t
</div>
<script type=\"text/javascript\">
\$.ajaxSetup({
\tcache:false
});
\$(setInterval(function() {
\t\$('#messages').load(\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chat_actualiserMsg"), "html", null, true);
        echo "\");
\t//\$('#messages').attr({scrollTop: \$('#messages').attr('scrollHeight')});
\t\$('#messages').scrollTop(messages.scrollHeight);
}, 500));
</script>
";
    }

    public function getTemplateName()
    {
        return "ChatChatBundle:Chat:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  80 => 26,  60 => 16,  52 => 12,  97 => 34,  95 => 21,  88 => 29,  78 => 25,  71 => 14,  25 => 4,  72 => 16,  64 => 15,  53 => 13,  34 => 5,  92 => 20,  86 => 28,  79 => 40,  19 => 2,  42 => 10,  40 => 7,  29 => 5,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 40,  47 => 19,  32 => 11,  24 => 3,  22 => 3,  23 => 3,  17 => 1,  69 => 20,  63 => 18,  58 => 9,  49 => 11,  43 => 15,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 24,  57 => 15,  50 => 13,  46 => 10,  44 => 11,  39 => 7,  33 => 7,  30 => 3,  27 => 2,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 20,  87 => 32,  84 => 28,  81 => 26,  73 => 21,  70 => 26,  67 => 19,  62 => 24,  59 => 23,  55 => 14,  51 => 13,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
