<?php
namespace Avalonia\Media;
final class TextCollapsingCreateInfo extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Double|double
	 */
	public $Width;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Media\TextFormatting\TextRunProperties
	 */
	public $TextRunProperties;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Media\FlowDirection
	 */
	public $FlowDirection;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\TextCollapsingCreateInfo $left
	 * @param \Avalonia\Media\TextCollapsingCreateInfo $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\TextCollapsingCreateInfo $left
	 * @param \Avalonia\Media\TextCollapsingCreateInfo $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Double|double $width
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $textRunProperties
	 * @param \Avalonia\Media\FlowDirection $flowDirection
	 */
	public function __construct($width, $textRunProperties, $flowDirection){}
}