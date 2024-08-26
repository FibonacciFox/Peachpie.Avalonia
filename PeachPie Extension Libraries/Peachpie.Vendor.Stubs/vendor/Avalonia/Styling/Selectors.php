<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SelectorsOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Styling\Selector $previous
	 * @param \System\Type $type
	 * @return \Avalonia\Styling\Selector
	 */
	#[MethodOverride]public static function Is_1 ($previous, $type){}
	/**
	 * @deprecated
	 * @param \Avalonia\Styling\Selector $previous
	 * @return \Avalonia\Styling\Selector
	 */
	#[MethodOverride]public static function Is_2 ($previous){}
	/**
	 * @deprecated
	 * @param \Avalonia\Styling\Selector $previous
	 * @param \System\Func_2 $argument [generic: Avalonia\Styling\Selector,Avalonia\Styling\Selector]
	 * @return \Avalonia\Styling\Selector
	 */
	#[MethodOverride]public static function Not_1 ($previous, $argument){}
	/**
	 * @deprecated
	 * @param \Avalonia\Styling\Selector $previous
	 * @param \Avalonia\Styling\Selector $argument
	 * @return \Avalonia\Styling\Selector
	 */
	#[MethodOverride]public static function Not_2 ($previous, $argument){}
	/**
	 * @deprecated
	 * @param \Avalonia\Styling\Selector $previous
	 * @param \System\Type $type
	 * @return \Avalonia\Styling\Selector
	 */
	#[MethodOverride]public static function OfType_1 ($previous, $type){}
	/**
	 * @deprecated
	 * @param \Avalonia\Styling\Selector $previous
	 * @return \Avalonia\Styling\Selector
	 */
	#[MethodOverride]public static function OfType_2 ($previous){}
	/**
	 * @deprecated
	 * @param \Avalonia\Styling\Selector ...$selectors
	 * @return \Avalonia\Styling\Selector
	 */
	#[MethodOverride]public static function Or_1 (...$selectors){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IReadOnlyList_1 $selectors [generic: Avalonia\Styling\Selector]
	 * @return \Avalonia\Styling\Selector
	 */
	#[MethodOverride]public static function Or_2 ($selectors){}
	/**
	 * @deprecated
	 * @param \Avalonia\Styling\Selector $previous
	 * @param \Avalonia\AvaloniaProperty_1 $property [generic: T]
	 * @param \System\Object|object $value
	 * @return \Avalonia\Styling\Selector
	 */
	#[MethodOverride]public static function PropertyEquals_1 ($previous, $property, $value){}
	/**
	 * @deprecated
	 * @param \Avalonia\Styling\Selector $previous
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \System\Object|object $value
	 * @return \Avalonia\Styling\Selector
	 */
	#[MethodOverride]public static function PropertyEquals_2 ($previous, $property, $value){}
}
class Selectors extends \System\Object
{
	use SelectorsOverride;

	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @return \Avalonia\Styling\Selector
	 */
	public static function Child($previous){}
	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @param \System\String|string $name
	 * @return \Avalonia\Styling\Selector
	 */
	public static function Class($previous, $name){}
	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @return \Avalonia\Styling\Selector
	 */
	public static function Descendant($previous){}
	/**
	 * @uses SelectorsOverride::Is_1 <br>public , args: ($previous, $type)<br>
	 * @uses SelectorsOverride::Is_2 <br>public , args: ($previous)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Styling\Selector|mixed|\override
	 */
	#[MethodOverridePublic]function Is (\override ...$args){}
	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @param \System\String|string $name
	 * @return \Avalonia\Styling\Selector
	 */
	public static function Name($previous, $name){}
	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @return \Avalonia\Styling\Selector
	 */
	public static function Nesting($previous){}
	/**
	 * @uses SelectorsOverride::Not_1 <br>public , args: ($previous, $argument)<br>
	 * @uses SelectorsOverride::Not_2 <br>public , args: ($previous, $argument)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Styling\Selector|mixed|\override
	 */
	#[MethodOverridePublic]function Not (\override ...$args){}
	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @param \System\Int32|int $step
	 * @param \System\Int32|int $offset
	 * @return \Avalonia\Styling\Selector
	 */
	public static function NthChild($previous, $step, $offset){}
	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @param \System\Int32|int $step
	 * @param \System\Int32|int $offset
	 * @return \Avalonia\Styling\Selector
	 */
	public static function NthLastChild($previous, $step, $offset){}
	/**
	 * @uses SelectorsOverride::OfType_1 <br>public , args: ($previous, $type)<br>
	 * @uses SelectorsOverride::OfType_2 <br>public , args: ($previous)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Styling\Selector|mixed|\override
	 */
	#[MethodOverridePublic]function OfType (\override ...$args){}
	/**
	 * @uses SelectorsOverride::Or_1 <br>public , args: (...$selectors)<br>
	 * @uses SelectorsOverride::Or_2 <br>public , args: ($selectors)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Styling\Selector|mixed|\override
	 */
	#[MethodOverridePublic]function Or (\override ...$args){}
	/**
	 * @uses SelectorsOverride::PropertyEquals_1 <br>public , args: ($previous, $property, $value)<br>
	 * @uses SelectorsOverride::PropertyEquals_2 <br>public , args: ($previous, $property, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Styling\Selector|mixed|\override
	 */
	#[MethodOverridePublic]function PropertyEquals (\override ...$args){}
	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @return \Avalonia\Styling\Selector
	 */
	public static function Template($previous){}
}