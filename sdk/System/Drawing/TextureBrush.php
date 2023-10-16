<?php
namespace System\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TextureBrushMethodsOverride
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
class TextureBrush extends \System\Drawing\Brush implements 
	\System\ICloneable,
	\System\IDisposable
{
	/**
	 * @var \System\Drawing\Image
	 * @property
	 */
	public readonly $Image;
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
	 * @return \System\Drawing\Image
	 */
	public  function get_Image(){}
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
	 * @uses TextureBrushMethodsOverride::MultiplyTransform_1 ($matrix)
	 * @uses TextureBrushMethodsOverride::MultiplyTransform_2 ($matrix, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MultiplyTransform(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function ResetTransform(){}
	/**
	 * @uses TextureBrushMethodsOverride::RotateTransform_1 ($angle)
	 * @uses TextureBrushMethodsOverride::RotateTransform_2 ($angle, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RotateTransform(mixed ...$args){}
	/**
	 * @uses TextureBrushMethodsOverride::ScaleTransform_1 ($sx, $sy)
	 * @uses TextureBrushMethodsOverride::ScaleTransform_2 ($sx, $sy, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ScaleTransform(mixed ...$args){}
	/**
	 * @uses TextureBrushMethodsOverride::TranslateTransform_1 ($dx, $dy)
	 * @uses TextureBrushMethodsOverride::TranslateTransform_2 ($dx, $dy, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TranslateTransform(mixed ...$args){}
	/**
	 * @uses TextureBrushMethodsOverride::Dispose_1 ()
	 * @uses TextureBrushMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses TextureBrushMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses TextureBrushMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
