<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Sound
 * -
 * Sound is class of element &lt;sound&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;direction&gt;, &lt;measure&gt; (partwise), &lt;part&gt; (timewise)
 * 
 * @Xml
 * @MusicXML
 * @Element(name="sound")
 * @ParentElement(name="direction,measure (partwise),part (timewise)")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/sound/
 * @Data
 */
class Sound extends MusicXMLWriter
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
	 * Dacapo
	 *
	 * @Attribute(name="dacapo")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $dacapo;

	/**
	 * Dalsegno
	 *
	 * @Attribute(name="dalsegno")
	 * @Value(type="token" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $dalsegno;

	/**
	 * Damper pedal
	 *
	 * @Attribute(name="damper-pedal")
	 * @Value(type="yes-no-number" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $damperPedal;

	/**
	 * Divisions
	 *
	 * @Attribute(name="divisions")
	 * @Value(type="divisions" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $divisions;

	/**
	 * Dynamics
	 *
	 * @Attribute(name="dynamics")
	 * @Value(type="non-negative-decimal" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $dynamics;

	/**
	 * Elevation
	 *
	 * @Attribute(name="elevation")
	 * @Value(type="rotation-degrees" required="false", min="-180", max="180")
	 * @var float
	 */
	public $elevation;

	/**
	 * Fine
	 *
	 * @Attribute(name="fine")
	 * @Value(type="token" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $fine;

	/**
	 * Forward repeat
	 *
	 * @Attribute(name="forward-repeat")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $forwardRepeat;

	/**
	 * Id
	 *
	 * @Attribute(name="id")
	 * @Value(type="ID" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $id;

	/**
	 * Pan
	 *
	 * @Attribute(name="pan")
	 * @Value(type="rotation-degrees" required="false", min="-180", max="180")
	 * @var float
	 */
	public $pan;

	/**
	 * Pizzicato
	 *
	 * @Attribute(name="pizzicato")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $pizzicato;

	/**
	 * Segno
	 *
	 * @Attribute(name="segno")
	 * @Value(type="token" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $segno;

	/**
	 * Soft pedal
	 *
	 * @Attribute(name="soft-pedal")
	 * @Value(type="yes-no-number" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $softPedal;

	/**
	 * Sostenuto pedal
	 *
	 * @Attribute(name="sostenuto-pedal")
	 * @Value(type="yes-no-number" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $sostenutoPedal;

	/**
	 * Tempo
	 *
	 * @Attribute(name="tempo")
	 * @Value(type="non-negative-decimal" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $tempo;

	/**
	 * Time only
	 *
	 * @Attribute(name="time-only")
	 * @Value(type="time-only" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $timeOnly;

	/**
	 * Tocoda
	 *
	 * @Attribute(name="tocoda")
	 * @Value(type="token" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $tocoda;

	/**
	 * Instrument change
	 *
	 * @Element(name="instrument-change")
	 * @var InstrumentChange[]
	 */
	public $instrumentChange;

	/**
	 * Midi device
	 *
	 * @Element(name="midi-device")
	 * @var MidiDevice[]
	 */
	public $midiDevice;

	/**
	 * Midi instrument
	 *
	 * @Element(name="midi-instrument")
	 * @var MidiInstrument[]
	 */
	public $midiInstrument;

	/**
	 * Play
	 *
	 * @Element(name="play")
	 * @var Play[]
	 */
	public $play;

	/**
	 * Swing
	 *
	 * @Element(name="swing")
	 * @var Swing
	 */
	public $swing;

	/**
	 * Offset
	 *
	 * @Element(name="offset")
	 * @var Offset
	 */
	public $offset;

}