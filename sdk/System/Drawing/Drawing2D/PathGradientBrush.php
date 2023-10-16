<?php
namespace System\Drawing\Drawing2D;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PathGradientBrushMethodsOverride
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
	#[MethodOverride] public  function SetBlendTriangularShape_1($focus){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetBlendTriangularShape_2($focus, $scale){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetSigmaBellShape_1($focus){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetSigmaBellShape_2($focus, $scale){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function TranslateTransform_1($dx, $dy){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function TranslateTransform_2($dx, $dy, $order){}
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
class PathGradientBrush extends \System\Drawing\Brush implements 
	\System\ICloneable,
	\System\IDisposable
{
	/**
	 * @var \System\Drawing\Drawing2D\Blend
	 * @property
	 */
	public $Blend;
	/**
	 * @var \System\Drawing\Color
	 * @property
	 */
	public $CenterColor;
	/**
	 * @var \System\Drawing\PointF
	 * @property
	 */
	public $CenterPoint;
	/**
	 * @var \System\Drawing\PointF
	 * @property
	 */
	public $FocusScales;
	/**
	 * @var \System\Drawing\Drawing2D\ColorBlend
	 * @property
	 */
	public $InterpolationColors;
	/**
	 * @var \System\Drawing\RectangleF
	 * @property
	 */
	public readonly $Rectangle;
	/**
	 * @var \System\Drawing\Color[]
	 * @property
	 */
	public $SurroundColors;
	/**
	 * @var \System\Drawing\Drawing2D\Matrix
	 * @property
	 */
	public $Transform;
	/**
	 * @var \System\Drawing\Drawing2D\WrapMode
	 * @property
	 */
	public $WrapMode;
	/**
	 * @return \System\Drawing\Drawing2D\Blend
	 */
	public  function get_Blend(){}
	/**
	 * @param \System\Drawing\Drawing2D\Blend $value
	 * @return \System\Void|void
	 */
	public  function set_Blend($value){}
	/**
	 * @return \System\Drawing\Color
	 */
	public  function get_CenterColor(){}
	/**
	 * @param \System\Drawing\Color $value
	 * @return \System\Void|void
	 */
	public  function set_CenterColor($value){}
	/**
	 * @return \System\Drawing\PointF
	 */
	public  function get_CenterPoint(){}
	/**
	 * @param \System\Drawing\PointF $value
	 * @return \System\Void|void
	 */
	public  function set_CenterPoint($value){}
	/**
	 * @return \System\Drawing\PointF
	 */
	public  function get_FocusScales(){}
	/**
	 * @param \System\Drawing\PointF $value
	 * @return \System\Void|void
	 */
	public  function set_FocusScales($value){}
	/**
	 * @return \System\Drawing\Drawing2D\ColorBlend
	 */
	public  function get_InterpolationColors(){}
	/**
	 * @param \System\Drawing\Drawing2D\ColorBlend $value
	 * @return \System\Void|void
	 */
	public  function set_InterpolationColors($value){}
	/**
	 * @return \System\Drawing\RectangleF
	 */
	public  function get_Rectangle(){}
	/**
	 * @return \System\Drawing\Color[]
	 */
	public  function get_SurroundColors(){}
	/**
	 * @param \System\Drawing\Color[] $value
	 * @return \System\Void|void
	 */
	public  function set_SurroundColors($value){}
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
	 * @return \System\Drawing\Drawing2D\WrapMode
	 */
	public  function get_WrapMode(){}
	/**
	 * @param \System\Drawing\Drawing2D\WrapMode $value
	 * @return \System\Void|void
	 */
	public  function set_WrapMode($value){}
	/**
	 * @uses PathGradientBrushMethodsOverride::MultiplyTransform_1 ($matrix)
	 * @uses PathGradientBrushMethodsOverride::MultiplyTransform_2 ($matrix, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MultiplyTransform(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function ResetTransform(){}
	/**
	 * @uses PathGradientBrushMethodsOverride::RotateTransform_1 ($angle)
	 * @uses PathGradientBrushMethodsOverride::RotateTransform_2 ($angle, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RotateTransform(mixed ...$args){}
	/**
	 * @uses PathGradientBrushMethodsOverride::ScaleTransform_1 ($sx, $sy)
	 * @uses PathGradientBrushMethodsOverride::ScaleTransform_2 ($sx, $sy, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ScaleTransform(mixed ...$args){}
	/**
	 * @uses PathGradientBrushMethodsOverride::SetBlendTriangularShape_1 ($focus)
	 * @uses PathGradientBrushMethodsOverride::SetBlendTriangularShape_2 ($focus, $scale)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetBlendTriangularShape(mixed ...$args){}
	/**
	 * @uses PathGradientBrushMethodsOverride::SetSigmaBellShape_1 ($focus)
	 * @uses PathGradientBrushMethodsOverride::SetSigmaBellShape_2 ($focus, $scale)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetSigmaBellShape(mixed ...$args){}
	/**
	 * @uses PathGradientBrushMethodsOverride::TranslateTransform_1 ($dx, $dy)
	 * @uses PathGradientBrushMethodsOverride::TranslateTransform_2 ($dx, $dy, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TranslateTransform(mixed ...$args){}
	/**
	 * @uses PathGradientBrushMethodsOverride::Dispose_1 ()
	 * @uses PathGradientBrushMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses PathGradientBrushMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses PathGradientBrushMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
