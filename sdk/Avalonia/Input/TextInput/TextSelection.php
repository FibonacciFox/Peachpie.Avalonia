<?php
namespace Avalonia\Input\TextInput;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TextSelectionMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class TextSelection extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Start;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $End;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Start(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Start($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_End(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_End($value){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Input\TextInput\TextSelection $left
	 * @param \Avalonia\Input\TextInput\TextSelection $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Input\TextInput\TextSelection $left
	 * @param \Avalonia\Input\TextInput\TextSelection $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses TextSelectionMethodsOverride::Equals_1 ($obj)
	 * @uses TextSelectionMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Int32& $Start
	 * @param \System\Int32& $End
	 * @return \System\Void|void
	 */
	public  function Deconstruct($Start, $End){}
}
