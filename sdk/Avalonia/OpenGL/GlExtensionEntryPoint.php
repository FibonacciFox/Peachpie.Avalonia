<?php
namespace Avalonia\OpenGL;
/**
 */
class GlExtensionEntryPoint extends \System\Attribute
{
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @param \System\Func_2 $getProcAddress
	 * @param \Avalonia\OpenGL\GlContextInfo $context
	 * @param \System\String|string $entry
	 * @param \System\String|string $extension
	 * @param \System\Nullable_1 $profile
	 * @return \System\IntPtr
	 */
	public static function GetProcAddress($getProcAddress, $context, $entry, $extension, $profile){}
}
