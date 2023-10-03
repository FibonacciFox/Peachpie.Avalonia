<?php
namespace Avalonia\Win32;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Win32NativeControlHostMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\Platform\INativeControlHostControlTopLevelAttachment
	 */
	#[MethodOverride] public  function CreateNewAttachment_1($create){}
	/**
	 * @return \Avalonia\Controls\Platform\INativeControlHostControlTopLevelAttachment
	 */
	#[MethodOverride] public  function CreateNewAttachment_2($handle){}
}
/**
 */
class Win32NativeControlHost extends \System\Object implements 
	\Avalonia\Controls\Platform\INativeControlHostImpl
{
	/**
	 * @return \Avalonia\Win32\WindowImpl
	 */
	public  function get_Window(){}
	/**
	 * @param \Avalonia\Platform\IPlatformHandle $handle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AssertCompatible($handle){}
	/**
	 * @param \Avalonia\Platform\IPlatformHandle $parent
	 * @return \Avalonia\Controls\Platform\INativeControlHostDestroyableControlHandle
	 */
	public  function CreateDefaultChild($parent){}
	/**
	 * @uses Win32NativeControlHostMethodsOverride::CreateNewAttachment_1 ($create)
	 * @uses Win32NativeControlHostMethodsOverride::CreateNewAttachment_2 ($handle)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateNewAttachment(mixed ...$args){}
	/**
	 * @param \Avalonia\Platform\IPlatformHandle $handle
	 * @return \System\Boolean
	 */
	public  function IsCompatibleWith($handle){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
