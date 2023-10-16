<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LockCookieMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
}
/**
 */
class LockCookie extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Threading\LockCookieFlags
	 * @field
	 */
	protected $_flags;
	/**
	 * @var \System\UInt16
	 * @field
	 */
	protected $_readerLevel;
	/**
	 * @var \System\UInt16
	 * @field
	 */
	protected $_writerLevel;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_threadID;
	/**
	 * @uses LockCookieMethodsOverride::Equals_1 ($obj)
	 * @uses LockCookieMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Threading\LockCookie $a
	 * @param \System\Threading\LockCookie $b
	 * @return \System\Boolean
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \System\Threading\LockCookie $a
	 * @param \System\Threading\LockCookie $b
	 * @return \System\Boolean
	 */
	public static function op_Inequality($a, $b){}
}
