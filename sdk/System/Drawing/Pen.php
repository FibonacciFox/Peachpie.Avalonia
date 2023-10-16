<?php
namespace System\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PenMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function MultiplyTransform_1($matrix){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function MultiplyTransform_2($matrix, $order){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RotateTransform_1($angle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RotateTransform_2($angle, $order){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ScaleTransform_1($sx, $sy){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ScaleTransform_2($sx, $sy, $order){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function TranslateTransform_1($dx, $dy){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function TranslateTransform_2($dx, $dy, $order){}
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
class Pen extends \System\MarshalByRefObject implements 
	\System\ICloneable,
	\System\IDisposable
{
	/**
	 * @var \System\Drawing\Drawing2D\PenAlignment
	 * @property
	 */
	public $Alignment;
	/**
	 * @var \System\Drawing\Brush
	 * @property
	 */
	public $Brush;
	/**
	 * @var \System\Drawing\Color
	 * @property
	 */
	public $Color;
	/**
	 * @var \System\Single[]
	 * @property
	 */
	public $CompoundArray;
	/**
	 * @var \System\Drawing\Drawing2D\CustomLineCap
	 * @property
	 */
	public $CustomEndCap;
	/**
	 * @var \System\Drawing\Drawing2D\CustomLineCap
	 * @property
	 */
	public $CustomStartCap;
	/**
	 * @var \System\Drawing\Drawing2D\DashCap
	 * @property
	 */
	public $DashCap;
	/**
	 * @var \System\Single
	 * @property
	 */
	public $DashOffset;
	/**
	 * @var \System\Single[]
	 * @property
	 */
	public $DashPattern;
	/**
	 * @var \System\Drawing\Drawing2D\DashStyle
	 * @property
	 */
	public $DashStyle;
	/**
	 * @var \System\Drawing\Drawing2D\LineCap
	 * @property
	 */
	public $EndCap;
	/**
	 * @var \System\Drawing\Drawing2D\LineJoin
	 * @property
	 */
	public $LineJoin;
	/**
	 * @var \System\Single
	 * @property
	 */
	public $MiterLimit;
	/**
	 * @var \System\Drawing\Drawing2D\PenType
	 * @property
	 */
	public readonly $PenType;
	/**
	 * @var \System\Drawing\Drawing2D\LineCap
	 * @property
	 */
	public $StartCap;
	/**
	 * @var \System\Drawing\Drawing2D\Matrix
	 * @property
	 */
	public $Transform;
	/**
	 * @var \System\Single
	 * @property
	 */
	public $Width;
	/**
	 * @return \System\Drawing\Drawing2D\PenAlignment
	 */
	public  function get_Alignment(){}
	/**
	 * @param \System\Drawing\Drawing2D\PenAlignment $value
	 * @return \System\Void|void
	 */
	public  function set_Alignment($value){}
	/**
	 * @return \System\Drawing\Brush
	 */
	public  function get_Brush(){}
	/**
	 * @param \System\Drawing\Brush $value
	 * @return \System\Void|void
	 */
	public  function set_Brush($value){}
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
	 * @return \System\Single[]
	 */
	public  function get_CompoundArray(){}
	/**
	 * @param \System\Single[] $value
	 * @return \System\Void|void
	 */
	public  function set_CompoundArray($value){}
	/**
	 * @return \System\Drawing\Drawing2D\CustomLineCap
	 */
	public  function get_CustomEndCap(){}
	/**
	 * @param \System\Drawing\Drawing2D\CustomLineCap $value
	 * @return \System\Void|void
	 */
	public  function set_CustomEndCap($value){}
	/**
	 * @return \System\Drawing\Drawing2D\CustomLineCap
	 */
	public  function get_CustomStartCap(){}
	/**
	 * @param \System\Drawing\Drawing2D\CustomLineCap $value
	 * @return \System\Void|void
	 */
	public  function set_CustomStartCap($value){}
	/**
	 * @return \System\Drawing\Drawing2D\DashCap
	 */
	public  function get_DashCap(){}
	/**
	 * @param \System\Drawing\Drawing2D\DashCap $value
	 * @return \System\Void|void
	 */
	public  function set_DashCap($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_DashOffset(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function set_DashOffset($value){}
	/**
	 * @return \System\Single[]
	 */
	public  function get_DashPattern(){}
	/**
	 * @param \System\Single[] $value
	 * @return \System\Void|void
	 */
	public  function set_DashPattern($value){}
	/**
	 * @return \System\Drawing\Drawing2D\DashStyle
	 */
	public  function get_DashStyle(){}
	/**
	 * @param \System\Drawing\Drawing2D\DashStyle $value
	 * @return \System\Void|void
	 */
	public  function set_DashStyle($value){}
	/**
	 * @return \System\Drawing\Drawing2D\LineCap
	 */
	public  function get_EndCap(){}
	/**
	 * @param \System\Drawing\Drawing2D\LineCap $value
	 * @return \System\Void|void
	 */
	public  function set_EndCap($value){}
	/**
	 * @return \System\Drawing\Drawing2D\LineJoin
	 */
	public  function get_LineJoin(){}
	/**
	 * @param \System\Drawing\Drawing2D\LineJoin $value
	 * @return \System\Void|void
	 */
	public  function set_LineJoin($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_MiterLimit(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function set_MiterLimit($value){}
	/**
	 * @return \System\Drawing\Drawing2D\PenType
	 */
	public  function get_PenType(){}
	/**
	 * @return \System\Drawing\Drawing2D\LineCap
	 */
	public  function get_StartCap(){}
	/**
	 * @param \System\Drawing\Drawing2D\LineCap $value
	 * @return \System\Void|void
	 */
	public  function set_StartCap($value){}
	/**
	 * @return \System\Drawing\Drawing2D\Matrix
	 */
	public  function get_Transform(){}
	/**
	 * @param \System\Drawing\Drawing2D\Matrix $value
	 * @return \System\Void|void
	 */
	public  function set_Transform($value){}
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
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @uses PenMethodsOverride::MultiplyTransform_1 ($matrix)
	 * @uses PenMethodsOverride::MultiplyTransform_2 ($matrix, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MultiplyTransform(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function ResetTransform(){}
	/**
	 * @uses PenMethodsOverride::RotateTransform_1 ($angle)
	 * @uses PenMethodsOverride::RotateTransform_2 ($angle, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RotateTransform(mixed ...$args){}
	/**
	 * @uses PenMethodsOverride::ScaleTransform_1 ($sx, $sy)
	 * @uses PenMethodsOverride::ScaleTransform_2 ($sx, $sy, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ScaleTransform(mixed ...$args){}
	/**
	 * @param \System\Drawing\Drawing2D\LineCap $startCap
	 * @param \System\Drawing\Drawing2D\LineCap $endCap
	 * @param \System\Drawing\Drawing2D\DashCap $dashCap
	 * @return \System\Void|void
	 */
	public  function SetLineCap($startCap, $endCap, $dashCap){}
	/**
	 * @uses PenMethodsOverride::TranslateTransform_1 ($dx, $dy)
	 * @uses PenMethodsOverride::TranslateTransform_2 ($dx, $dy, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TranslateTransform(mixed ...$args){}
	/**
	 * @uses PenMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses PenMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
