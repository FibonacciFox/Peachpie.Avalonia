<?php
namespace Avalonia\Styling\Activators;
/**
 */
class StyleClassActivator extends \Avalonia\Styling\Activators\StyleActivatorBase implements 
	\Avalonia\Styling\Activators\IStyleActivator,
	\System\IDisposable,
	\Avalonia\Controls\IClassesChangedListener
{
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $classes
	 * @param \System\Collections\Generic\IList_1 $toMatch
	 * @return \System\Boolean
	 */
	public static function AreClassesMatching($classes, $toMatch){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Changed(){}
}
