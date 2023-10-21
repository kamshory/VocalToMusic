<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * MidiDevice
 * -
 * MidiDevice is class of element &lt;midi-device&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;score-part&gt;, &lt;sound&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="midi-device")
 * @ParentElement(name="score-part,sound")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/midi-device/
 * @Data
 */
class MidiDevice extends MusicXMLWriter
{
	/**
	 * Id
	 *
	 * @Attribute(name="id")
	 * @Value(type="IDREF" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $id;

	/**
	 * Port
	 *
	 * @Attribute(name="port")
	 * @Value(type="midi-16" required="false", min="1", max="16")
	 * @var integer
	 */
	public $port;

    /**
     * Text content
     *
     * @TextContent
     * @var string
     */
    public $textContent = "";

}