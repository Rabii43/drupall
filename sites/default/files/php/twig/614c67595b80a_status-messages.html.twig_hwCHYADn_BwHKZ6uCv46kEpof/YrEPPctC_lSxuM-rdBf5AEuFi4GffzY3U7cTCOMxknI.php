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

/* core/themes/bartik/templates/status-messages.html.twig */
class __TwigTemplate_18c95a3a727941cdeb7f48167169e6d4233be6b820f0a6192348ae658a4df194 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 23, "if" => 24, "for" => 27, "set" => 29];
        $filters = ["escape" => 25, "without" => 34, "length" => 41, "first" => 48];
        $functions = ["attach_library" => 25];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for', 'set'],
                ['escape', 'without', 'length', 'first'],
                ['attach_library']
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
        echo "<div data-drupal-messages>
  ";
        // line 23
        $this->displayBlock('messages', $context, $blocks);
        // line 60
        echo "</div>
";
    }

    // line 23
    public function block_messages($context, array $blocks = [])
    {
        // line 24
        echo "    ";
        if ( !twig_test_empty(($context["message_list"] ?? null))) {
            // line 25
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("bartik/messages"), "html", null, true);
            echo "
      <div class=\"messages__wrapper layout-container\">
        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 28
                echo "          ";
                // line 29
                $context["classes"] = [0 => "messages", 1 => ("messages--" . $this->sandbox->ensureToStringAllowed(                // line 31
$context["type"]))];
                // line 34
                echo "          <div role=\"contentinfo\" aria-label=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "role", "aria-label"), "html", null, true);
                echo ">
            ";
                // line 35
                if (($context["type"] == "error")) {
                    // line 36
                    echo "            <div role=\"alert\">
              ";
                }
                // line 38
                echo "              ";
                if ($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")) {
                    // line 39
                    echo "                <h2 class=\"visually-hidden\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
                    echo "</h2>
              ";
                }
                // line 41
                echo "              ";
                if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                    // line 42
                    echo "                <ul class=\"messages__list\">
                  ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 44
                        echo "                    <li class=\"messages__item\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"]), "html", null, true);
                        echo "</li>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 46
                    echo "                </ul>
              ";
                } else {
                    // line 48
                    echo "                ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"])), "html", null, true);
                    echo "
              ";
                }
                // line 50
                echo "              ";
                if (($context["type"] == "error")) {
                    // line 51
                    echo "            </div>
            ";
                }
                // line 53
                echo "          </div>
          ";
                // line 55
                echo "          ";
                $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method");
                // line 56
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "      </div>
    ";
        }
        // line 59
        echo "  ";
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/status-messages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  161 => 59,  157 => 57,  151 => 56,  148 => 55,  145 => 53,  141 => 51,  138 => 50,  132 => 48,  128 => 46,  119 => 44,  115 => 43,  112 => 42,  109 => 41,  103 => 39,  100 => 38,  96 => 36,  94 => 35,  87 => 34,  85 => 31,  84 => 29,  82 => 28,  78 => 27,  72 => 25,  69 => 24,  66 => 23,  61 => 60,  59 => 23,  56 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/bartik/templates/status-messages.html.twig", "C:\\wamp64\\www\\Formation-drupal\\core\\themes\\bartik\\templates\\status-messages.html.twig");
    }
}
