<?php
namespace Avalonia\VisualTree;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait VisualExtensionsOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Visual $visual
	 * @param \Avalonia\Point $p
	 * @return \Avalonia\Visual
	 */
	#[MethodOverride]public static function GetVisualAt_1 ($visual, $p){}
	/**
	 * @deprecated
	 * @param \Avalonia\Visual $visual
	 * @param \Avalonia\Point $p
	 * @param \System\Func_2 $filter [generic: Avalonia\Visual,System\Boolean]
	 * @return \Avalonia\Visual
	 */
	#[MethodOverride]public static function GetVisualAt_2 ($visual, $p, $filter){}
	/**
	 * @deprecated
	 * @param \Avalonia\Visual $visual
	 * @param \Avalonia\Point $p
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function GetVisualsAt_1 ($visual, $p){}
	/**
	 * @deprecated
	 * @param \Avalonia\Visual $visual
	 * @param \Avalonia\Point $p
	 * @param \System\Func_2 $filter [generic: Avalonia\Visual,System\Boolean]
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride]public static function GetVisualsAt_2 ($visual, $p, $filter){}
	/**
	 * @deprecated
	 * @param \Avalonia\Visual $visual
	 * @return \Avalonia\Visual
	 */
	#[MethodOverride]public static function GetVisualParent_1 ($visual){}
	/**
	 * @deprecated
	 * @param \Avalonia\Visual $visual
	 * @return \T|object
	 */
	#[MethodOverride]public static function GetVisualParent_2 ($visual){}
}
class VisualExtensions extends \System\Object
{
	use VisualExtensionsOverride;

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
	 * @return \System\Collections\Generic\IEnumerable_1[Avalonia\Visual]
	 */
	public static function GetVisualAncestors($visual){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @param \System\Boolean|bool $includeSelf
	 * @return \T|object
	 */
	public static function FindAncestorOfType($visual, $includeSelf){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @param \System\Boolean|bool $includeSelf
	 * @return \T|object
	 */
	public static function FindDescendantOfType($visual, $includeSelf){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Collections\Generic\IEnumerable_1[Avalonia\Visual]
	 */
	public static function GetSelfAndVisualAncestors($visual){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Nullable_1[Avalonia\VisualTree\TransformedBounds]
	 */
	public static function GetTransformedBounds($visual){}
	/**
	 * @uses VisualExtensionsOverride::GetVisualAt_1 <br>public , args: ($visual, $p)<br>
	 * @uses VisualExtensionsOverride::GetVisualAt_2 <br>public , args: ($visual, $p, $filter)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Visual|mixed|\override
	 */
	#[MethodOverridePublic]function GetVisualAt (\override ...$args){}
	/**
	 * @uses VisualExtensionsOverride::GetVisualsAt_1 <br>public , args: ($visual, $p)<br>
	 * @uses VisualExtensionsOverride::GetVisualsAt_2 <br>public , args: ($visual, $p, $filter)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetVisualsAt (\override ...$args){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Collections\Generic\IEnumerable_1[Avalonia\Visual]
	 */
	public static function GetVisualChildren($visual){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Collections\Generic\IEnumerable_1[Avalonia\Visual]
	 */
	public static function GetVisualDescendants($visual){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Collections\Generic\IEnumerable_1[Avalonia\Visual]
	 */
	public static function GetSelfAndVisualDescendants($visual){}
	/**
	 * @uses VisualExtensionsOverride::GetVisualParent_1 <br>public , args: ($visual)<br>
	 * @uses VisualExtensionsOverride::GetVisualParent_2 <br>public , args: ($visual)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Visual|\T|object|mixed|\override
	 */
	#[MethodOverridePublic]function GetVisualParent (\override ...$args){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \Avalonia\Rendering\IRenderRoot
	 */
	public static function GetVisualRoot($visual){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Boolean|bool
	 */
	public static function IsAttachedToVisualTree($visual){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @param \Avalonia\Visual $target
	 * @return \System\Boolean|bool
	 */
	public static function IsVisualAncestorOf($visual, $target){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $elements [generic: Avalonia\Visual]
	 * @return \System\Collections\Generic\IEnumerable_1[Avalonia\Visual]
	 */
	public static function SortByZIndex($elements){}
	private static function FindDescendantOfTypeCore($visual){}
}