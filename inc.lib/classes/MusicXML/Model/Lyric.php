<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Lyric
 * -
 * Lyric is class of element &lt;lyric&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;note&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="lyric")
 * @ParentElement(name="note")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/lyric/
 * @Data
 */
class Lyric extends MusicXMLWriter
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
	 * Id
	 *
	 * @Attribute(name="id")
	 * @Value(type="ID" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $id;

	/**
	 * Justify
	 *
	 * @Attribute(name="justify")
	 * @Value(type="left-center-right" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $justify;

	/**
	 * Name
	 *
	 * @Attribute(name="name")
	 * @Value(type="token" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $name;

	/**
	 * Number
	 *
	 * @Attribute(name="number")
	 * @Value(type="NMTOKEN" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $number;

	/**
	 * Placement
	 *
	 * @Attribute(name="placement")
	 * @Value(type="above-below" required="false", allowed="ubove,below")
	 * @var string
	 */
	public $placement;

	/**
	 * Print object
	 *
	 * @Attribute(name="print-object")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $printObject;

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
	 * Time only
	 *
	 * @Attribute(name="time-only")
	 * @Value(type="time-only" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $timeOnly;

    /**
     * Syllabic
     *
     * @Element
     * @var Syllabic
     */
    public $syllabic;

    /**
     * Elision
     *
     * @Element
     * @var Elision
     */
    public $elision;

    /**
     * Text
     *
     * @Element
     * @var Text
     */
    public $text;

    /**
     * End line
     *
     * @Element(name="end-line")
     * @var EndLine
     */
    public $endLine;

    /**
     * End paragraph
     *
     * @Element(name="end-line")
     * @var EndParagraph
     */
    public $endParagraph;

    /**
     * Humming
     *
     * @Element
     * @var Humming
     */
    public $humming;

    /**
     * Laughing
     *
     * @Element
     * @var Laughing
     */
    public $laughing;
}