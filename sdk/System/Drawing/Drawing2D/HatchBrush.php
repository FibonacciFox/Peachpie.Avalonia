<?php
namespace System\Drawing\Drawing2D;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait HatchBrushMethodsOverride
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
class HatchBrush extends \System\Drawing\Brush implements 
	\System\ICloneable,
	\System\IDisposable
{
	/**
	 * @var \System\Drawing\Color
	 * @property
	 */
	public readonly $BackgroundColor;
	/**
	 * @var \System\Drawing\Color
	 * @property
	 */
	public readonly $ForegroundColor;
	/**
	 * @var \System\Drawing\Drawing2D\HatchStyle
	 * @property
	 */
	public readonly $HatchStyle;
	/**
	 * @return \System\Drawing\Color
	 */
	public  function get_BackgroundColor(){}
	/**
	 * @return \System\Drawing\Color
	 */
	public  function get_ForegroundColor(){}
	/**
	 * @return \System\Drawing\Drawing2D\HatchStyle
	 */
	public  function get_HatchStyle(){}
	/**
	 * @uses HatchBrushMethodsOverride::Dispose_1 ()
	 * @uses HatchBrushMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses HatchBrushMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses HatchBrushMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
