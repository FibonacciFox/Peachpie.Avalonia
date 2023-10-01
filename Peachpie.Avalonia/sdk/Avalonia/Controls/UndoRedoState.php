<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait UndoRedoStateMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
}
/**
 */
class UndoRedoState extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \System\String|string
	 */
	public  function get_Text(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_CaretPosition(){}
	/**
	 * @uses UndoRedoStateMethodsOverride::Equals_1 ($other)
	 * @uses UndoRedoStateMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
