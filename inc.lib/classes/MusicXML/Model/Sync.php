<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Sync
 * -
 * Sync is class of element &lt;sync&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;listening&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="sync")
 * @ParentElement(name="listening")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/sync/
 * @Data
 */
class Sync extends MusicXMLWriter
{
	/**
	 * Type
	 *
	 * @Attribute(name="type")
	 * @Value(type="sync-type" required="true", allowed="none,tempo,mostly-tempo,mostly-event,event,always-event")
	 * @var string
	 */
	public $type;

	/**
	 * Latency
	 *
	 * @Attribute(name="latency")
	 * @Value(type="milliseconds" required="false", min="-infinite", max="infinite")
	 * @var integer
	 */
	public $latency;

	/**
	 * Player
	 *
	 * @Attribute(name="player")
	 * @Value(type="IDREF" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $player;

	/**
	 * Time only
	 *
	 * @Attribute(name="time-only")
	 * @Value(type="time-only" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $timeOnly;

}