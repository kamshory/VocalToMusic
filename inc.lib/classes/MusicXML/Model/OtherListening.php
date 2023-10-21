<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * OtherListening
 * -
 * OtherListening is class of element &lt;other-listening&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;listening&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="other-listening")
 * @ParentElement(name="listening")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/other-listening/
 * @Data
 */
class OtherListening extends MusicXMLWriter
{
	/**
	 * Type
	 *
	 * @Attribute(name="type")
	 * @Value(type="token" required="true", allowed="ANY_VALUE")
	 * @var string
	 */
	public $type;

	/**
	 * Player
	 *
	 * @Attribute(name="player")
	 * @Value(type="IDREF" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $player;

	/**
	 * Time only
	 *
	 * @Attribute(name="time-only")
	 * @Value(type="time-only" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $timeOnly;

	/**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}