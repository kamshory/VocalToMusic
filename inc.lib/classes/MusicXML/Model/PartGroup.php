<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * PartGroup
 * -
 * PartGroup is class of element &lt;part-group&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;part-list&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="part-group")
 * @ParentElement(name="part-list")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/part-group/
 * @Data
 */
class PartGroup extends MusicXMLWriter
{
	/**
	 * Type
	 *
	 * @Attribute(name="type")
	 * @Value(type="start-stop" required="true", allowed="start,stop")
	 * @var string
	 */
	public $type;

	/**
	 * Number
	 *
	 * @Attribute(name="number")
	 * @Value(type="token" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $number;

	/**
     * Group name
     *
     * @Element(name="group-name")
     * @var GroupName
     */
    public $groupName;

    /**
     * Group name display
     *
     * @Element(name="group-name-display")
     * @var GroupNameDisplay
     */
    public $groupNameDisplay;

    /**
     * Group abbreviation
     *
     * @Element(name="group-abbreviation")
     * @var GroupAbbreviation
     */
    public $groupAbbreviation;

    /**
     * Group abbreviation display
     *
     * @Element(name="group-abbreviation-display")
     * @var GroupAbbreviationDisplay
     */
    public $groupAbbreviationDisplay;

    /**
     * Group symbol
     *
     * @Element(name="group-symbol")
     * @var GroupSymbol
     */
    public $groupSymbol;

    /**
     * Group barline
     *
     * @Element(name="group-barline")
     * @var GroupBarline
     */
    public $groupBarline;

    /**
     * Group time
     *
     * @Element(name="group-time")
     * @var GroupTime
     */
    public $groupTime;

    /**
     * Footnote
     *
     * @Element(name="footnote")
     * @var Footnote
     */
    public $footnote;

    /**
     * Level
     *
     * @Element(name="level")
     * @var Level
     */
    public $level;

}