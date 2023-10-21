<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * LyricLanguage
 * -
 * LyricLanguage is class of element &lt;lyric-language&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;defaults&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="lyric-language")
 * @ParentElement(name="defaults")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/lyric-language/
 * @Data
 */
class LyricLanguage extends MusicXMLWriter
{
	/**
	 * Xml:lang
	 *
	 * @Attribute(name="xml:lang")
	 * @Value(type="xml:lang" required="true", allowed="ANY_VALUE")
	 * @var string
	 */
	public $xmlLang;

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

}