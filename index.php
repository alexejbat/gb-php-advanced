<?php

class Page {
    protected $template;
    protected $params;

    public function __construct($template = "main", $params = [])
    {
        $this->template = $template;
        $this->params = $params;
    }

    public function render() {
        ob_start();
        extract($this->params);
        include $this->template . ".php";
        return ob_get_clean();
    }
}

$params = [
    "menu" => (new Page("menu"))->render(),
    "content" => "Каталог"
];

$page = new Page("main", $params);
echo $page->render();


