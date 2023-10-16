<?php
namespace System\Drawing\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PrivateFontCollectionMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
}
/**
 */
class PrivateFontCollection extends \System\Drawing\Text\FontCollection implements 
	\System\IDisposable
{
	/**
	 * @var \System\Drawing\FontFamily[]
	 * @property
	 */
	public readonly $Families;
	/**
	 * @param \System\String|string $filename
	 * @return \System\Void|void
	 */
	public  function AddFontFile($filename){}
	/**
	 * @param \System\IntPtr $memory
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	public  function AddMemoryFont($memory, $length){}
	/**
	 * @uses PrivateFontCollectionMethodsOverride::Dispose_1 ($disposing)
	 * @uses PrivateFontCollectionMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
