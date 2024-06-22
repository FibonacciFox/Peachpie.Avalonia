<?php
namespace Avalonia\Controls\Documents;
class EmbeddedControlRun extends \Avalonia\Media\TextFormatting\DrawableTextRun
{

	/**
	 * @property
	 * @var \Avalonia\Controls\Control
	 * @since readonly
	 */
	public $Control;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\TextRunProperties
	 * @since readonly
	 */
	public $Properties;
	/**
	 * @property
	 * @var \Avalonia\Size
	 * @since readonly
	 */
	public $Size;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Baseline;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @property
	 * @var \System\ReadOnlyMemory_1[System\Char]
	 * @since readonly
	 */
	public $Text;
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $properties
	 */
	public function __construct($control, $properties){}
}