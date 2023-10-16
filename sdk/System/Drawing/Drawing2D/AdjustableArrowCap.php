<?php
namespace System\Drawing\Drawing2D;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AdjustableArrowCapMethodsOverride
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
class AdjustableArrowCap extends \System\Drawing\Drawing2D\CustomLineCap implements 
	\System\ICloneable,
	\System\IDisposable
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Filled;
	/**
	 * @var \System\Single
	 * @property
	 */
	public $Height;
	/**
	 * @var \System\Single
	 * @property
	 */
	public $MiddleInset;
	/**
	 * @var \System\Single
	 * @property
	 */
	public $Width;
	/**
	 * @var \System\Drawing\Drawing2D\LineCap
	 * @property
	 */
	public $BaseCap;
	/**
	 * @var \System\Single
	 * @property
	 */
	public $BaseInset;
	/**
	 * @var \System\Drawing\Drawing2D\LineJoin
	 * @property
	 */
	public $StrokeJoin;
	/**
	 * @var \System\Single
	 * @property
	 */
	public $WidthScale;
	/**
	 * @return \System\Boolean
	 */
	public  function get_Filled(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Filled($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_Height(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function set_Height($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_MiddleInset(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function set_MiddleInset($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_Width(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function set_Width($value){}
	/**
	 * @uses AdjustableArrowCapMethodsOverride::Dispose_1 ()
	 * @uses AdjustableArrowCapMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses AdjustableArrowCapMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses AdjustableArrowCapMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
