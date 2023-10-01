<?php
namespace Avalonia\VisualTree;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait VisualExtensionsMethodsOverride
{
	/**
	 * @return \Avalonia\Visual
	 */
	#[MethodOverride] public static function GetVisualAt_1($visual, $p){}
	/**
	 * @return \Avalonia\Visual
	 */
	#[MethodOverride] public static function GetVisualAt_2($visual, $p, $filter){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function GetVisualsAt_1($visual, $p){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function GetVisualsAt_2($visual, $p, $filter){}
	/**
	 * @return \Avalonia\Visual
	 */
	#[MethodOverride] public static function GetVisualParent_1($visual){}
	/**
	 * @return \Avalonia\VisualTree\T
	 */
	#[MethodOverride] public static function GetVisualParent_2($visual){}
}
/**
 */
class VisualExtensions extends \System\Object
{
	/**
	 * @param \Avalonia\Visual $visual
	 * @param \Avalonia\Visual $ancestor
	 * @return \System\Int32|int
	 */
	public static function CalculateDistanceFromAncestor($visual, $ancestor){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Int32|int
	 */
	public static function CalculateDistanceFromRoot($visual){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @param \Avalonia\Visual $target
	 * @return \Avalonia\Visual
	 */
	public static function FindCommonVisualAncestor($visual, $target){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function GetVisualAncestors($visual){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @param \System\Boolean $includeSelf
	 * @return \Avalonia\VisualTree\T
	 */
	public static function FindAncestorOfType($visual, $includeSelf){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @param \System\Boolean $includeSelf
	 * @return \Avalonia\VisualTree\T
	 */
	public static function FindDescendantOfType($visual, $includeSelf){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function GetSelfAndVisualAncestors($visual){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Nullable_1
	 */
	public static function GetTransformedBounds($visual){}
	/**
	 * @uses VisualExtensionsMethodsOverride::GetVisualAt_1 ($visual, $p)
	 * @uses VisualExtensionsMethodsOverride::GetVisualAt_2 ($visual, $p, $filter)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetVisualAt(mixed ...$args){}
	/**
	 * @uses VisualExtensionsMethodsOverride::GetVisualsAt_1 ($visual, $p)
	 * @uses VisualExtensionsMethodsOverride::GetVisualsAt_2 ($visual, $p, $filter)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetVisualsAt(mixed ...$args){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function GetVisualChildren($visual){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function GetVisualDescendants($visual){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function GetSelfAndVisualDescendants($visual){}
	/**
	 * @uses VisualExtensionsMethodsOverride::GetVisualParent_1 ($visual)
	 * @uses VisualExtensionsMethodsOverride::GetVisualParent_2 ($visual)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetVisualParent(mixed ...$args){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \Avalonia\Rendering\IRenderRoot
	 */
	public static function GetVisualRoot($visual){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Boolean
	 */
	public static function IsAttachedToVisualTree($visual){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @param \Avalonia\Visual $target
	 * @return \System\Boolean
	 */
	public static function IsVisualAncestorOf($visual, $target){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $elements
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function SortByZIndex($elements){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FindDescendantOfTypeCore($visual){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
