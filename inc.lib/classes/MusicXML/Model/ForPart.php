<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * ForPart
 * -
 * ForPart is class of element &lt;for-part&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;attributes&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="for-part")
 * @ParentElement(name="attributes")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/for-part/
 * @Data
 */
class ForPart extends MusicXMLWriter
{
	/**
	 * Id
	 *
	 * @Attribute(name="id")
	 * @Value(type="ID" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $id;

	/**
	 * Number
	 *
	 * @Attribute(name="number")
	 * @Value(type="staff-number" required="false", min="1", max="infinite")
	 * @var integer
	 */
	public $number;

    /**
     * Part clef
     *
     * @Element
     * @var PartClef(name="part-clef")
     */
    public $partClef;

    /**
     * Part transpose
     *
     * @Element(name="part-transpose")
     * @var PartTranspose
     */
    public $partTranspose;

}