<?php
namespace Avalonia\Styling\Activators;
final class StyleClassActivator extends \Avalonia\Styling\Activators\StyleActivatorBase implements
	\Avalonia\Styling\Activators\IStyleActivator,
	\System\IDisposable,
	\Avalonia\Controls\IClassesChangedListener
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSubscribed;
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $classes [generic: System\String]
	 * @param \System\Collections\Generic\IList_1 $toMatch [generic: System\String]
	 * @return \System\Boolean|bool
	 */
	public static function AreClassesMatching($classes, $toMatch){}
	private function Changed(){}
	/**
	 * @param \Avalonia\Controls\Classes $classes
	 * @param \System\Collections\Generic\IList_1 $match [generic: System\String]
	 */
	public function __construct($classes, $match){}
}