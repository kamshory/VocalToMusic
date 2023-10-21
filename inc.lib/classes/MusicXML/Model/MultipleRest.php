<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * MultipleRest
 * -
 * MultipleRest is class of element &lt;multiple-rest&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;measure-style&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="multiple-rest")
 * @ParentElement(name="measure-style")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/multiple-rest/
 * @Data
 */
class MultipleRest extends MusicXMLWriter
{
	/**
	 * Use symbols
	 *
	 * @Attribute(name="use-symbols")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $useSymbols;

	/**
	 * Text content
	 *
	 * @TextContent
	 * @var integer
	 */
	public $textContent;
}