<?php
namespace System\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BrushMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
	/**
	 * @return \System\MarshalByRefObject
	 */
	#[MethodOverride] protected  function MemberwiseClone_1($cloneIdentity){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_2(){}
}
/**
 */
class Brush extends \System\MarshalByRefObject implements 
	\System\ICloneable,
	\System\IDisposable
{
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @uses BrushMethodsOverride::Dispose_1 ()
	 * @uses BrushMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @param \System\IntPtr $brush
	 * @return \System\Void|void
	 */
	protected  function SetNativeBrush($brush){}
	/**
	 * @uses BrushMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses BrushMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
