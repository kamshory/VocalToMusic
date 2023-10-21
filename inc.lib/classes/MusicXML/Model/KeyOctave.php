<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * KeyOctave
 * -
 * KeyOctave is class of element &lt;key-octave&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;key&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="key-octave")
 * @ParentElement(name="key")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/key-octave/
 * @Data
 */
class KeyOctave extends MusicXMLWriter
{
	/**
	 * Number
	 *
	 * @Attribute(name="number")
	 * @Value(type="positiveInteger" required="true", min="0", max="infinite")
	 * @var integer
	 */
	public $number;

	/**
	 * Cancel
	 *
	 * @Attribute(name="cancel")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $cancel;

	/**
	 * Text content
	 *
	 * @TextContent
	 * @var integer
	 */
	public $textContent;
}