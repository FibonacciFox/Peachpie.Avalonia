<?php
namespace Avalonia\Win32\WinRT\Composition;
/**
 */
class WinUiCompositionUtils extends \System\Object
{
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositor $compositor
	 * @param \System\Single $color
	 * @param \System\Single $opacity
	 * @return \Avalonia\Win32\WinRT\ICompositionBrush
	 */
	public static function CreateMicaBackdropBrush($compositor, $color, $opacity){}
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositor $compositor
	 * @return \Avalonia\Win32\WinRT\ICompositionBrush
	 */
	public static function CreateAcrylicBlurBackdropBrush($compositor){}
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositor $compositor
	 * @param \System\Nullable_1 $_backdropCornerRadius
	 * @param \Avalonia\Win32\WinRT\IVisual[] $containerVisuals
	 * @return \Avalonia\Win32\WinRT\ICompositionRoundedRectangleGeometry
	 */
	public static function ClipVisual($compositor, $_backdropCornerRadius, $containerVisuals){}
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositor $compositor
	 * @param \Avalonia\Win32\WinRT\ICompositionBrush $compositionBrush
	 * @return \Avalonia\Win32\WinRT\IVisual
	 */
	public static function CreateBlurVisual($compositor, $compositionBrush){}
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositor $compositor
	 * @return \Avalonia\Win32\WinRT\ICompositionBrush
	 */
	public static function CreateBackdropBrush($compositor){}
	/**
	 * @param \System\String|string $name
	 * @param \Avalonia\Win32\WinRT\ICompositionEffectSourceParameterFactory $backDropParameterFactory
	 * @param \System\IntPtr& $handle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetParameterSource($name, $backDropParameterFactory, $handle){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
