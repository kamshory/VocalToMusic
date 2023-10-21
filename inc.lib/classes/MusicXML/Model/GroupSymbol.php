<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * GroupSymbol
 * -
 * GroupSymbol is class of element &lt;group-symbol&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;part-group&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="group-symbol")
 * @ParentElement(name="part-group")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/group-symbol/
 * @Data
 */
class GroupSymbol extends MusicXMLWriter
{
	/**
	 * Color
	 *
	 * @Attribute(name="color")
	 * @Value(type="color" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $color;

	/**
	 * Default x
	 *
	 * @Attribute(name="default-x")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $defaultX;

	/**
	 * Default y
	 *
	 * @Attribute(name="default-y")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $defaultY;

	/**
	 * Relative x
	 *
	 * @Attribute(name="relative-x")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $relativeX;

	/**
	 * Relative y
	 *
	 * @Attribute(name="relative-y")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $relativeY;

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