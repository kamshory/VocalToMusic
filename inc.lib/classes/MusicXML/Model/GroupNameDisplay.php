<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * GroupNameDisplay
 * -
 * GroupNameDisplay is class of element &lt;group-name-display&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;part-group&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="group-name-display")
 * @ParentElement(name="part-group")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/group-name-display/
 * @Data
 */
class GroupNameDisplay extends MusicXMLWriter
{
	/**
	 * Print object
	 *
	 * @Attribute(name="print-object")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $printObject;

	/**
     * Display text
     *
     * @Element(name="display-text")
     * @var DisplayText[]
     */
    public $displayText;

    /**
     * Accidental text
     *
     * @Element(name="accidental-text")
     * @var AccidentalText[]
     */
    public $accidentalText;
}