<?php
namespace Avalonia\Media\Fonts;
final class FontCollectionKey extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \Avalonia\Media\FontStyle
	 */
	public $Style;
	/**
	 * @property
	 * @var \Avalonia\Media\FontWeight
	 */
	public $Weight;
	/**
	 * @property
	 * @var \Avalonia\Media\FontStretch
	 */
	public $Stretch;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\Fonts\FontCollectionKey $left
	 * @param \Avalonia\Media\Fonts\FontCollectionKey $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\Fonts\FontCollectionKey $left
	 * @param \Avalonia\Media\Fonts\FontCollectionKey $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Media\FontStyle& &$Style
	 * @param \Avalonia\Media\FontWeight& &$Weight
	 * @param \Avalonia\Media\FontStretch& &$Stretch
	 * @return \System\Void|void
	 */
	public function Deconstruct(&$Style, &$Weight, &$Stretch){}
	/**
	 * @param \Avalonia\Media\FontStyle $Style
	 * @param \Avalonia\Media\FontWeight $Weight
	 * @param \Avalonia\Media\FontStretch $Stretch
	 */
	public function __construct($Style, $Weight, $Stretch){}
}