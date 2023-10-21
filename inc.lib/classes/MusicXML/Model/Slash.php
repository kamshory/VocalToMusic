<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Slash
 * -
 * Slash is class of element &lt;slash&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;measure-style&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="slash")
 * @ParentElement(name="measure-style")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/slash/
 * @Data
 */
class Slash extends MusicXMLWriter
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
	 * Use dots
	 *
	 * @Attribute(name="use-dots")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $useDots;

	/**
	 * Use stems
	 *
	 * @Attribute(name="use-stems")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $useStems;

    /**
     * Use dot
     *
     * @Attribute
     * @var string
     */
    public $useDot;

    /**
     * Slash type
     *
     * @Element(name="slash-type")
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