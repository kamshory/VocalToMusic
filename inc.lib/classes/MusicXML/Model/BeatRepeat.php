<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * BeatRepeat
 * -
 * BeatRepeat is class of element &lt;beat-repeat&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;measure-style&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="beat-repeat")
 * @ParentElement(name="measure-style")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/beat-repeat/
 * @Data
 */
class BeatRepeat extends MusicXMLWriter
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
	 * Slashes
	 *
	 * @Attribute(name="slashes")
	 * @Value(type="positiveInteger" required="false", min="0", max="infinite")
	 * @var integer
	 */
	public $slashes;

	/**
	 * Use dots
	 *
	 * @Attribute(name="use-dots")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $useDots;

    /**
     * Use dots
     *
     * @Attribute(name="use-dots")
     * @var string
     */
    public $useDot;

    /**
     * Slash type
     *
     * @Element
     * @var SlashType
     */
    public $slashType;

    /**
     * Slash dot
     *
     * @Element
     * @var SlashDot[]
     */
    public $slashDot;

    /**
     * Excpet voice
     *
     * @Element
     * @var ExceptVoice[]
     */
    public $exceptVoice;

}