<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CharacterReaderMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TakeIf_1($c){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TakeIf_2($condition){}
}
/**
 */
class CharacterReader extends \System\ValueType
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_End(){}
	/**
	 * @return \System\Char
	 */
	public  function get_Peek(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Position(){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Position($value){}
	/**
	 * @return \System\Char
	 */
	public  function Take(){}
	/**
	 * @return \System\Void|void
	 */
	public  function SkipWhitespace(){}
	/**
	 * @uses CharacterReaderMethodsOverride::TakeIf_1 ($c)
	 * @uses CharacterReaderMethodsOverride::TakeIf_2 ($condition)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TakeIf(mixed ...$args){}
	/**
	 * @param \System\Char $c
	 * @return \System\ReadOnlySpan_1
	 */
	public  function TakeUntil($c){}
	/**
	 * @param \System\Func_2 $condition
	 * @return \System\ReadOnlySpan_1
	 */
	public  function TakeWhile($condition){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\ReadOnlySpan_1
	 */
	public  function TryPeek($count){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	public  function PeekWhitespace(){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public  function Skip($count){}
}
