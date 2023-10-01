<?php
namespace Avalonia\Native;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NativeControlHostImplMethodsOverride
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
class NativeControlHostImpl extends \System\Object implements 
	\System\IDisposable,
	\Avalonia\Controls\Platform\INativeControlHostImpl
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Platform\IPlatformHandle $parent
	 * @return \Avalonia\Controls\Platform\INativeControlHostDestroyableControlHandle
	 */
	public  function CreateDefaultChild($parent){}
	/**
	 * @uses NativeControlHostImplMethodsOverride::CreateNewAttachment_1 ($create)
	 * @uses NativeControlHostImplMethodsOverride::CreateNewAttachment_2 ($handle)
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
