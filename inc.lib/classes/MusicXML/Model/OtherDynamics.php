<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * OtherDynamics
 * -
 * OtherDynamics is class of element &lt;other-dynamics&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;dynamics&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="other-dynamics")
 * @ParentElement(name="dynamics")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/other-dynamics/
 * @Data
 */
class OtherDynamics extends MusicXMLWriter
{
	/**
	 * Smufl
	 *
	 * @Attribute(name="smufl")
	 * @Value(type="smufl-glyph-name" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $smufl;

}