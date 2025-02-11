<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* bootstrap_barrio:menu */
class __TwigTemplate_cb2adf64c60f45879b9c9be8d7f48a8a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.bootstrap_barrio--menu"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "bootstrap_barrio:menu"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "bootstrap_barrio:menu"));
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 2
        yield "
";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 7, $context, $this->getSourceContext()));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "alignment", "menu_level"]);        yield from [];
    }

    // line 9
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 10
            yield "  ";
            $macros["menus"] = $this;
            // line 11
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 12
                yield "    ";
                // line 13
                $context["nav_classes"] = ["nav",                 // line 15
($context["alignment"] ?? null)];
                // line 18
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 19
                    yield "      <ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["nav_classes"] ?? null)], "method", false, false, true, 19), "id"), "html", null, true);
                    yield ">
    ";
                } else {
                    // line 21
                    yield "      <ul class=\"menu\">
    ";
                }
                // line 23
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 24
                    yield "      ";
                    // line 25
                    $context["classes"] = ["nav-item", ((CoreExtension::getAttribute($this->env, $this->source,                     // line 27
$context["item"], "is_expanded", [], "any", false, false, true, 27)) ? ("menu-item--expanded") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 28
$context["item"], "is_collapsed", [], "any", false, false, true, 28)) ? ("menu-item--collapsed") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 29
$context["item"], "in_active_trail", [], "any", false, false, true, 29)) ? ("active") : (""))];
                    // line 32
                    yield "      <li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 32), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 32), "html", null, true);
                    yield ">
        ";
                    // line 34
                    $context["link_classes"] = ["nav-link", ((CoreExtension::getAttribute($this->env, $this->source,                     // line 36
$context["item"], "in_active_trail", [], "any", false, false, true, 36)) ? ("active") : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 37
$context["item"], "url", [], "any", false, false, true, 37), "getOption", ["attributes"], "method", false, false, true, 37), "class", [], "any", false, false, true, 37)) ? (Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 37), "getOption", ["attributes"], "method", false, false, true, 37), "class", [], "any", false, false, true, 37), " ")) : ("")), ("nav-link-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 38
$context["item"], "url", [], "any", false, false, true, 38), "toString", [], "method", false, false, true, 38)))];
                    // line 41
                    yield "        ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 41), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 41), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                    yield "
        ";
                    // line 42
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 42)) {
                        // line 43
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 43), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 43, $context, $this->getSourceContext()));
                        yield "
        ";
                    }
                    // line 45
                    yield "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                yield "    </ul>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "bootstrap_barrio:menu";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  141 => 47,  134 => 45,  128 => 43,  126 => 42,  121 => 41,  119 => 38,  118 => 37,  117 => 36,  116 => 34,  111 => 32,  109 => 29,  108 => 28,  107 => 27,  106 => 25,  104 => 24,  99 => 23,  95 => 21,  89 => 19,  86 => 18,  84 => 15,  83 => 13,  81 => 12,  78 => 11,  75 => 10,  61 => 9,  52 => 7,  49 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "bootstrap_barrio:menu", "themes/contrib/bootstrap_barrio/components/menu/menu.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "macro" => 9, "if" => 11, "set" => 13, "for" => 23);
        static $filters = array("escape" => 19, "without" => 19, "join" => 37, "clean_class" => 38);
        static $functions = array("link" => 41);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'for'],
                ['escape', 'without', 'join', 'clean_class'],
                ['link'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
