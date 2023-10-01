<?php
namespace Avalonia\LogicalTree;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LogicalExtensionsMethodsOverride
{
	/**
	 * @return \Avalonia\LogicalTree\ILogical
	 */
	#[MethodOverride] public static function GetLogicalParent_1($logical){}
	/**
	 * @return \Avalonia\LogicalTree\T
	 */
	#[MethodOverride] public static function GetLogicalParent_2($logical){}
}
/**
 */
class LogicalExtensions extends \System\Object
{
	/**
	 * @param \Avalonia\LogicalTree\ILogical $logical
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function GetLogicalAncestors($logical){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $logical
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function GetSelfAndLogicalAncestors($logical){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $logical
	 * @param \System\Boolean $includeSelf
	 * @return \Avalonia\LogicalTree\T
	 */
	public static function FindLogicalAncestorOfType($logical, $includeSelf){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $logical
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function GetLogicalChildren($logical){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $logical
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function GetLogicalDescendants($logical){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $logical
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function GetSelfAndLogicalDescendants($logical){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $logical
	 * @param \System\Boolean $includeSelf
	 * @return \Avalonia\LogicalTree\T
	 */
	public static function FindLogicalDescendantOfType($logical, $includeSelf){}
	/**
	 * @uses LogicalExtensionsMethodsOverride::GetLogicalParent_1 ($logical)
	 * @uses LogicalExtensionsMethodsOverride::GetLogicalParent_2 ($logical)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetLogicalParent(mixed ...$args){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $logical
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function GetLogicalSiblings($logical){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $logical
	 * @param \Avalonia\LogicalTree\ILogical $target
	 * @return \System\Boolean
	 */
	public static function IsLogicalAncestorOf($logical, $target){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $logical
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FindDescendantOfTypeCore($logical){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
