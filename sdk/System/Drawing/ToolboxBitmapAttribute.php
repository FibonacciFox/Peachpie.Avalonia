<?php
namespace System\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ToolboxBitmapAttributeMethodsOverride
{
	/**
	 * @return \System\Drawing\Image
	 */
	#[MethodOverride] public  function GetImage_1($component){}
	/**
	 * @return \System\Drawing\Image
	 */
	#[MethodOverride] public  function GetImage_2($component, $large){}
	/**
	 * @return \System\Drawing\Image
	 */
	#[MethodOverride] public  function GetImage_3($type){}
	/**
	 * @return \System\Drawing\Image
	 */
	#[MethodOverride] public  function GetImage_4($type, $large){}
	/**
	 * @return \System\Drawing\Image
	 */
	#[MethodOverride] public  function GetImage_5($type, $imgName, $large){}
}
/**
 */
class ToolboxBitmapAttribute extends \System\Attribute
{
	/**
	 * @var \System\Drawing\ToolboxBitmapAttribute
	 * @field
	 */
	public readonly $Default;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @uses ToolboxBitmapAttributeMethodsOverride::GetImage_1 ($component)
	 * @uses ToolboxBitmapAttributeMethodsOverride::GetImage_2 ($component, $large)
	 * @uses ToolboxBitmapAttributeMethodsOverride::GetImage_3 ($type)
	 * @uses ToolboxBitmapAttributeMethodsOverride::GetImage_4 ($type, $large)
	 * @uses ToolboxBitmapAttributeMethodsOverride::GetImage_5 ($type, $imgName, $large)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetImage(mixed ...$args){}
	/**
	 * @param \System\Type $t
	 * @param \System\String|string $imageName
	 * @param \System\Boolean $large
	 * @return \System\Drawing\Image
	 */
	public static function GetImageFromResource($t, $imageName, $large){}
}
