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

/* contato/teste.php */
class __TwigTemplate_c2b6d5c5fe01552cd59c3aa8c21309d07376b72813cff7330ae2a14f989a816b extends Template
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
        // line 1
        echo "<div>
   <h1>Metal Omega</h1>
</div>";
    }

    public function getTemplateName()
    {
        return "contato/teste.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contato/teste.php", "/opt/lampp/htdocs/satellasoft-academy-aulas-php-modulo-02/semana-03/aula03/view/contato/teste.php");
    }
}
