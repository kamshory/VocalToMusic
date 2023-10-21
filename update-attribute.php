<?php

require_once __DIR__ . "/musicxml.php";
require_once "inc.lib/autoload.php";

$url = "https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/";
libxml_use_internal_errors(true);
$attributes = array();

$doc = new DomDocument;
$doc->validateOnParse = true;
$html = file_get_contents($url);

$doc->loadHtml($html);

$containers = $doc->getElementsByTagName('ul');
$lis = $containers->item(8)->childNodes;
foreach($lis as $li)
{
    if(isset($li->childNodes->item(0)->attributes))
    {
        $attributes[] = trim($li->childNodes->item(0)->attributes->getNamedItem('href')->nodeValue, "/");   
    }
}
foreach($attributes as $attribute)
{
    $className = str_replace(' ', '', ucwords(str_replace('-', ' ', $attribute)));
    getObject($attribute);
    echo "UPDATE $attribute\r\n";
}
