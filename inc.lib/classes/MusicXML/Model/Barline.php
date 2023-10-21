<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Barline
 * -
 * Barline is class of element &lt;barline&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;measure&gt; (partwise), &lt;part&gt; (timewise)
 * 
 * @Xml
 * @MusicXML
 * @Element(name="barline")
 * @ParentElement(name="measure (partwise),part (timewise)")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/barline/
 * @Data
 */
class Barline extends MusicXMLWriter
{
	/**
	 * Coda
	 *
	 * @Attribute(name="coda")
	 * @Value(type="token" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $coda;

	/**
	 * Divisions
	 *
	 * @Attribute(name="divisions")
	 * @Value(type="divisions" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $divisions;

	/**
	 * Id
	 *
	 * @Attribute(name="id")
	 * @Value(type="ID" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $id;

	/**
	 * Location
	 *
	 * @Attribute(name="location")
	 * @Value(type="right-left-middle" required="false", allowed="right,left,middle")
	 * @var string
	 */
	public $location;

	/**
	 * Segno
	 *
	 * @Attribute(name="segno")
	 * @Value(type="token" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $segno;

	/**
     * Bar style
     *
     * @Element(name="bar-style")
     * @var BarStyle
     */
    public $barStyle;

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

    /**
     * Wavy line
     *
     * @Element(name="wavy-line")
     * @var WavyLine
     */
    public $wavyLine;

    /**
     * Fermata
     *
     * @Element(name="fermata")
     * @var Fermata[]
     */
    public $fermata;

    /**
     * Ending
     *
     * @Element(name="ending")
     * @var Ending
     */
    public $ending;

    /**
     * Repeat
     *
     * @Element(name="repeat")
     * @var Repeat
     */
    public $repeat;

}