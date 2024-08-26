<?php
namespace Avalonia\LogicalTree;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait LogicalExtensionsOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\LogicalTree\ILogical $logical
	 * @return \Avalonia\LogicalTree\ILogical
	 */
	#[MethodOverride]public static function GetLogicalParent_1 ($logical){}
	/**
	 * @deprecated
	 * @param \Avalonia\LogicalTree\ILogical $logical
	 * @return \T|object
	 */
	#[MethodOverride]public static function GetLogicalParent_2 ($logical){}
}
class LogicalExtensions extends \System\Object
{
	use LogicalExtensionsOverride;

	/**
	 * @param \Avalonia\LogicalTree\ILogical $logical
	 * @return \System\Collections\Generic\IEnumerable_1[Avalonia\LogicalTree\ILogical]
	 */
	public static function GetLogicalAncestors($logical){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $logical
	 * @return \System\Collections\Generic\IEnumerable_1[Avalonia\LogicalTree\ILogical]
	 */
	public static function GetSelfAndLogicalAncestors($logical){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $logical
	 * @param \System\Boolean|bool $includeSelf
	 * @return \T|object
	 */
	public static function FindLogicalAncestorOfType($logical, $includeSelf){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $logical
	 * @return \System\Collections\Generic\IEnumerable_1[Avalonia\LogicalTree\ILogical]
	 */
	public static function GetLogicalChildren($logical){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $logical
	 * @return \System\Collections\Generic\IEnumerable_1[Avalonia\LogicalTree\ILogical]
	 */
	public static function GetLogicalDescendants($logical){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $logical
	 * @return \System\Collections\Generic\IEnumerable_1[Avalonia\LogicalTree\ILogical]
	 */
	public static function GetSelfAndLogicalDescendants($logical){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $logical
	 * @param \System\Boolean|bool $includeSelf
	 * @return \T|object
	 */
	public static function FindLogicalDescendantOfType($logical, $includeSelf){}
	/**
	 * @uses LogicalExtensionsOverride::GetLogicalParent_1 <br>public , args: ($logical)<br>
	 * @uses LogicalExtensionsOverride::GetLogicalParent_2 <br>public , args: ($logical)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\LogicalTree\ILogical|\T|object|mixed|\override
	 */
	#[MethodOverridePublic]function GetLogicalParent (\override ...$args){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $logical
	 * @return \System\Collections\Generic\IEnumerable_1[Avalonia\LogicalTree\ILogical]
	 */
	public static function GetLogicalSiblings($logical){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $logical
	 * @param \Avalonia\LogicalTree\ILogical $target
	 * @return \System\Boolean|bool
	 */
	public static function IsLogicalAncestorOf($logical, $target){}
	private static function FindDescendantOfTypeCore($logical){}
}