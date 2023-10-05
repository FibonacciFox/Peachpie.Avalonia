<?php
namespace Avalonia\Controls\Documents;
/**
 */
class EmbeddedControlRun extends \Avalonia\Media\TextFormatting\DrawableTextRun
{
	/**
	 * @var \Avalonia\Controls\Control
	 * @property
	 */
	public readonly $Control;
	/**
	 * @var \Avalonia\Media\TextFormatting\TextRunProperties
	 * @property
	 */
	public readonly $Properties;
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public readonly $Size;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Baseline;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Length;
	/**
	 * @var \System\ReadOnlyMemory_1[System\Char]
	 * @property
	 */
	public readonly $Text;
	/**
	 * @return \Avalonia\Controls\Control
	 */
	public  function get_Control(){}
}
