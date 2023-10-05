<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ImmutableReadOnlyListStructEnumerator_1MethodsOverride
{
	/**
	 * @return \Avalonia\Utilities\T
	 */
	#[MethodOverride] public  function get_Current_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Current_2(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ImmutableReadOnlyListStructEnumerator_1 extends \System\ValueType implements 
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
	/**
	 * @var \T
	 * @property
	 */
	public readonly $Current;
	/**
	 * @uses ImmutableReadOnlyListStructEnumerator_1MethodsOverride::get_Current_1 ()
	 * @uses ImmutableReadOnlyListStructEnumerator_1MethodsOverride::get_Current_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Current(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Boolean
	 */
	public  function MoveNext(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
}
