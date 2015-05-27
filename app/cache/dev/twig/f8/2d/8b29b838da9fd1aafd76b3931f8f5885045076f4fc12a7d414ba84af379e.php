<?php

/* ValBundle::layout.html.twig */
class __TwigTemplate_f82d8b29b838da9fd1aafd76b3931f8f5885045076f4fc12a7d414ba84af379e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ValBundle::layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'main_contents' => array($this, 'block_main_contents'),
            'flash_message' => array($this, 'block_flash_message'),
            'left_content' => array($this, 'block_left_content'),
            'left_content_01' => array($this, 'block_left_content_01'),
            'left_content_02' => array($this, 'block_left_content_02'),
            'left_content_03' => array($this, 'block_left_content_03'),
            'right_content' => array($this, 'block_right_content'),
            'right_content_01' => array($this, 'block_right_content_01'),
            'right_content_02' => array($this, 'block_right_content_02'),
            'right_content_03' => array($this, 'block_right_content_03'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "    <link type=\"text/css\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/cepertino/jquery-ui.css\" rel=\"stylesheet\" />
    ";
        // line 6
        $this->displayBlock('stylesheet', $context, $blocks);
    }

    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        // line 11
        echo "    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.min.js\"></script>
    ";
        // line 15
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 34
        echo "
    ";
        // line 35
        $this->displayBlock('main_contents', $context, $blocks);
        // line 59
        echo "
    ";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        // line 20
        echo "    <nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
            <div class=\"nav-header\">
                <a class=\"navbar-brand\" href=\"#\">Boostrap</a>
            </div>

            <ul class=\"nav navbar-nav\">
              <li><a href=\"#\">Hoge</a></li>
              <li><a href=\"#\">Fuga</a></li>
              <li><a href=\"#\">Piyo</a></li>
            </ul>
        </div>
    </nav>
    ";
    }

    // line 35
    public function block_main_contents($context, array $blocks = array())
    {
        // line 36
        echo "    <div id=\"main_contents\">
        ";
        // line 37
        $this->displayBlock('flash_message', $context, $blocks);
        // line 41
        echo "        ";
        $this->displayBlock('left_content', $context, $blocks);
        // line 49
        echo "        ";
        $this->displayBlock('right_content', $context, $blocks);
        // line 57
        echo "    </div><!-- / #main_contents -->
    ";
    }

    // line 37
    public function block_flash_message($context, array $blocks = array())
    {
        // line 38
        echo "            ";
        // line 39
        echo "            ";
        $this->loadTemplate("AppDefaultBundle::_message.html.twig", "ValBundle::layout.html.twig", 39)->display($context);
        // line 40
        echo "        ";
    }

    // line 41
    public function block_left_content($context, array $blocks = array())
    {
        // line 42
        echo "        <div id=\"left_contents\">
            ";
        // line 44
        echo "            ";
        $this->displayBlock('left_content_01', $context, $blocks);
        // line 45
        echo "            ";
        $this->displayBlock('left_content_02', $context, $blocks);
        // line 46
        echo "            ";
        $this->displayBlock('left_content_03', $context, $blocks);
        // line 47
        echo "        </div><!-- / #left_contents -->
        ";
    }

    // line 44
    public function block_left_content_01($context, array $blocks = array())
    {
    }

    // line 45
    public function block_left_content_02($context, array $blocks = array())
    {
    }

    // line 46
    public function block_left_content_03($context, array $blocks = array())
    {
    }

    // line 49
    public function block_right_content($context, array $blocks = array())
    {
        // line 50
        echo "        <div id=\"right_contents\">
            ";
        // line 52
        echo "            ";
        $this->displayBlock('right_content_01', $context, $blocks);
        // line 53
        echo "            ";
        $this->displayBlock('right_content_02', $context, $blocks);
        // line 54
        echo "            ";
        $this->displayBlock('right_content_03', $context, $blocks);
        // line 55
        echo "        </div><!-- / #right_contents -->
        ";
    }

    // line 52
    public function block_right_content_01($context, array $blocks = array())
    {
    }

    // line 53
    public function block_right_content_02($context, array $blocks = array())
    {
    }

    // line 54
    public function block_right_content_03($context, array $blocks = array())
    {
    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        echo "        <div id=\"footer\">
            <div class=\"footer_navi\">
                <p id=\"copyright\">Copyright &copy; 2015 www.starlod.net All Rights Reserved.</p>
            </div>
        </div><!-- / #footer -->
    ";
    }

    public function getTemplateName()
    {
        return "ValBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 61,  218 => 60,  213 => 54,  208 => 53,  203 => 52,  198 => 55,  195 => 54,  192 => 53,  189 => 52,  186 => 50,  183 => 49,  178 => 46,  173 => 45,  168 => 44,  163 => 47,  160 => 46,  157 => 45,  154 => 44,  151 => 42,  148 => 41,  144 => 40,  141 => 39,  139 => 38,  136 => 37,  131 => 57,  128 => 49,  125 => 41,  123 => 37,  120 => 36,  117 => 35,  100 => 20,  97 => 19,  93 => 60,  90 => 59,  88 => 35,  85 => 34,  82 => 19,  79 => 18,  71 => 15,  65 => 11,  63 => 10,  60 => 9,  52 => 6,  49 => 5,  47 => 4,  44 => 3,  11 => 1,);
    }
}
