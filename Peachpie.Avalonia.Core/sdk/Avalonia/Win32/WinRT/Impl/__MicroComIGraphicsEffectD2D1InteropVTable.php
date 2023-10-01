<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIGraphicsEffectD2D1InteropVTableMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function AddMethod_1($d){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function AddMethod_2($m){}
}
/**
 */
class __MicroComIGraphicsEffectD2D1InteropVTable extends \MicroCom\Runtime\MicroComVtblBase
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Guid* $id
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetEffectId($this, $id){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $name
	 * @param \System\UInt32* $index
	 * @param \Avalonia\Win32\WinRT\GRAPHICS_EFFECT_PROPERTY_MAPPING* $mapping
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetNamedPropertyMapping($this, $name, $index, $mapping){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPropertyCount($this, $count){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32 $index
	 * @param \System\Void** $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetProperty($this, $index, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32 $index
	 * @param \System\Void** $source
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetSource($this, $index, $source){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetSourceCount($this, $count){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIGraphicsEffectD2D1InteropVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIGraphicsEffectD2D1InteropVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
