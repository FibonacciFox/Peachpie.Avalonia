<?php
namespace System\Drawing\Drawing2D;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LinearGradientBrushMethodsOverride
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
class LinearGradientBrush extends \System\Drawing\Brush implements 
	\System\ICloneable,
	\System\IDisposable
{
	/**
	 * @var \System\Drawing\Drawing2D\Blend
	 * @property
	 */
	public $Blend;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $GammaCorrection;
	/**
	 * @var \System\Drawing\Drawing2D\ColorBlend
	 * @property
	 */
	public $InterpolationColors;
	/**
	 * @var \System\Drawing\Color[]
	 * @property
	 */
	public $LinearColors;
	/**
	 * @var \System\Drawing\RectangleF
	 * @property
	 */
	public readonly $Rectangle;
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
	 * @return \System\Boolean
	 */
	public  function get_GammaCorrection(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_GammaCorrection($value){}
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
	 * @return \System\Drawing\Color[]
	 */
	public  function get_LinearColors(){}
	/**
	 * @param \System\Drawing\Color[] $value
	 * @return \System\Void|void
	 */
	public  function set_LinearColors($value){}
	/**
	 * @return \System\Drawing\RectangleF
	 */
	public  function get_Rectangle(){}
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
	 * @uses LinearGradientBrushMethodsOverride::MultiplyTransform_1 ($matrix)
	 * @uses LinearGradientBrushMethodsOverride::MultiplyTransform_2 ($matrix, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MultiplyTransform(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function ResetTransform(){}
	/**
	 * @uses LinearGradientBrushMethodsOverride::RotateTransform_1 ($angle)
	 * @uses LinearGradientBrushMethodsOverride::RotateTransform_2 ($angle, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RotateTransform(mixed ...$args){}
	/**
	 * @uses LinearGradientBrushMethodsOverride::ScaleTransform_1 ($sx, $sy)
	 * @uses LinearGradientBrushMethodsOverride::ScaleTransform_2 ($sx, $sy, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ScaleTransform(mixed ...$args){}
	/**
	 * @uses LinearGradientBrushMethodsOverride::SetBlendTriangularShape_1 ($focus)
	 * @uses LinearGradientBrushMethodsOverride::SetBlendTriangularShape_2 ($focus, $scale)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetBlendTriangularShape(mixed ...$args){}
	/**
	 * @uses LinearGradientBrushMethodsOverride::SetSigmaBellShape_1 ($focus)
	 * @uses LinearGradientBrushMethodsOverride::SetSigmaBellShape_2 ($focus, $scale)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetSigmaBellShape(mixed ...$args){}
	/**
	 * @uses LinearGradientBrushMethodsOverride::TranslateTransform_1 ($dx, $dy)
	 * @uses LinearGradientBrushMethodsOverride::TranslateTransform_2 ($dx, $dy, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TranslateTransform(mixed ...$args){}
	/**
	 * @uses LinearGradientBrushMethodsOverride::Dispose_1 ()
	 * @uses LinearGradientBrushMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses LinearGradientBrushMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses LinearGradientBrushMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
