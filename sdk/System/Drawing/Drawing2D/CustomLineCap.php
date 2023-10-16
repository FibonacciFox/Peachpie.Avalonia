<?php
namespace System\Drawing\Drawing2D;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CustomLineCapMethodsOverride
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
class CustomLineCap extends \System\MarshalByRefObject implements 
	\System\ICloneable,
	\System\IDisposable
{
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
	 * @return \System\Drawing\Drawing2D\LineCap
	 */
	public  function get_BaseCap(){}
	/**
	 * @param \System\Drawing\Drawing2D\LineCap $value
	 * @return \System\Void|void
	 */
	public  function set_BaseCap($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_BaseInset(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function set_BaseInset($value){}
	/**
	 * @return \System\Drawing\Drawing2D\LineJoin
	 */
	public  function get_StrokeJoin(){}
	/**
	 * @param \System\Drawing\Drawing2D\LineJoin $value
	 * @return \System\Void|void
	 */
	public  function set_StrokeJoin($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_WidthScale(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function set_WidthScale($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @uses CustomLineCapMethodsOverride::Dispose_1 ()
	 * @uses CustomLineCapMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @param \System\Drawing\Drawing2D\LineCap& $startCap
	 * @param \System\Drawing\Drawing2D\LineCap& $endCap
	 * @return \System\Void|void
	 */
	public  function GetStrokeCaps($startCap, $endCap){}
	/**
	 * @param \System\Drawing\Drawing2D\LineCap $startCap
	 * @param \System\Drawing\Drawing2D\LineCap $endCap
	 * @return \System\Void|void
	 */
	public  function SetStrokeCaps($startCap, $endCap){}
	/**
	 * @uses CustomLineCapMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses CustomLineCapMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
