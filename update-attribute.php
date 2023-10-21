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
        $attributes[] = array(trim($li->childNodes->item(0)->attributes->getNamedItem('href')->nodeValue, "/"), trim($li->childNodes->item(0)->nodeValue, '<>'));   
    }
}
foreach($attributes as $attribute)
{
    $className = str_replace(' ', '', ucwords(str_replace('-', ' ', $attribute[1])));
    getObject($attribute[0], $attribute[1]);
    echo "UPDATE $attribute[0] - <$attribute[1]>\r\n";
}
