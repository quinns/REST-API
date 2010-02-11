<br />
<?php
$controller = $this->params['controller'];
$action = $this->params['action'];
$url = $this->params['url']['url'];
$link = "/$url";
$link .= '/'.urlencode(Inflector::slug($this->pageTitle)).'/'.$action.'.xml';
echo $html->link('Get XML Data for '.Inflector::humanize(Inflector::singularize($controller).' '.$action), $link);

// debug($this->viewVars);
?>