<?php
namespace System\StubHelpers;
final class AsAnyMarshaler extends \System\ValueType
{

	private static function IsIn($dwFlags){}
	private static function IsOut($dwFlags){}
	private static function IsAnsi($dwFlags){}
	private static function IsThrowOn($dwFlags){}
	private static function IsBestFit($dwFlags){}
	private function ConvertArrayToNative($pManagedHome, $dwFlags){}
	private static function ConvertStringToNative($pManagedHome, $dwFlags){}
	private function ConvertStringBuilderToNative($pManagedHome, $dwFlags){}
	private function ConvertLayoutToNative($pManagedHome, $dwFlags){}
	/**
	 * @param \System\Object|object $pManagedHome
	 * @param \System\Int32|int $dwFlags
	 * @return \System\IntPtr
	 */
	protected function ConvertToNative($pManagedHome, $dwFlags){}
	/**
	 * @param \System\Object|object $pManagedHome
	 * @param \System\IntPtr $pNativeHome
	 * @return \System\Void|void
	 */
	protected function ConvertToManaged($pManagedHome, $pNativeHome){}
	/**
	 * @param \System\IntPtr $pNativeHome
	 * @return \System\Void|void
	 */
	protected function ClearNative($pNativeHome){}
}