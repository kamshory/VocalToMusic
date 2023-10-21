<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Transpose
 * -
 * Transpose is class of element &lt;transpose&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;attributes&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="transpose")
 * @ParentElement(name="attributes")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/transpose/
 * @Data
 */
class Transpose extends MusicXMLWriter
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
     * Diatonic
     *
     * @Element(name="diatonic")
     * @var Diatonic
     */
    public $diatonic;

    /**
     * Chromatic
     *
     * @Element(name="chromatic")
     * @var Chromatic
     */
    public $chromatic;

    /**
     * Octave change
     *
     * @Element(name="octave-change")
     * @var OctaveChange
     */
    public $octaveChange;

    /**
     * XDouble
     *
     * @Element(name="double")
     * @var XDouble
     */
    public $double;
}