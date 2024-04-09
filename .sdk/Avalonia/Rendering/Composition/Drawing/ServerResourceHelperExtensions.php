<?php
namespace Avalonia\Rendering\Composition\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ServerResourceHelperExtensionsOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @return \Avalonia\Media\IBrush
	 */
	#[MethodOverride]public static function GetServer_1 ($brush, $compositor){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @return \Avalonia\Media\IPen
	 */
	#[MethodOverride]public static function GetServer_2 ($pen, $compositor){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\ITransform $transform
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @return \Avalonia\Media\ITransform
	 */
	#[MethodOverride]public static function GetServer_3 ($transform, $compositor){}
}
class ServerResourceHelperExtensions extends \System\Object
{
	use ServerResourceHelperExtensionsOverride;

	/**
	 * @uses ServerResourceHelperExtensionsOverride::GetServer_1 <br>public , args: ($brush, $compositor)<br>
	 * @uses ServerResourceHelperExtensionsOverride::GetServer_2 <br>public , args: ($pen, $compositor)<br>
	 * @uses ServerResourceHelperExtensionsOverride::GetServer_3 <br>public , args: ($transform, $compositor)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Media\IBrush|\Avalonia\Media\IPen|\Avalonia\Media\ITransform|mixed|\override
	 */
	#[MethodOverridePublic]function GetServer (\override ...$args){}
	private static function ThrowNotCompatible($o){}
}