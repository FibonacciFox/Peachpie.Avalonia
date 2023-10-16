<?php
namespace System\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SolidBrushMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
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
class SolidBrush extends \System\Drawing\Brush implements 
	\System\ICloneable,
	\System\IDisposable
{
	/**
	 * @var \System\Drawing\Color
	 * @property
	 */
	public $Color;
	/**
	 * @return \System\Drawing\Color
	 */
	public  function get_Color(){}
	/**
	 * @param \System\Drawing\Color $value
	 * @return \System\Void|void
	 */
	public  function set_Color($value){}
	/**
	 * @uses SolidBrushMethodsOverride::Dispose_1 ($disposing)
	 * @uses SolidBrushMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses SolidBrushMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses SolidBrushMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
