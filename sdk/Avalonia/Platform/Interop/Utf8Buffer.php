<?php
namespace Avalonia\Platform\Interop;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Utf8BufferMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
}
/**
 */
class Utf8Buffer extends \System\Runtime\InteropServices\SafeHandle implements 
	\System\IDisposable
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $handle;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $ByteLen;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsInvalid;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsClosed;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ByteLen(){}
	/**
	 * @param \System\IntPtr $s
	 * @return \System\String|string
	 */
	public static function StringFromPtr($s){}
	/**
	 * @uses Utf8BufferMethodsOverride::Dispose_1 ()
	 * @uses Utf8BufferMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
