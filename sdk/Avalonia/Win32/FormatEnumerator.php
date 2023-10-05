<?php
namespace Avalonia\Win32;
/**
 */
class FormatEnumerator extends \Avalonia\MicroCom\CallbackBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\MicroCom\Runtime\IMicroComShadowContainer,
	\Avalonia\Win32\Win32Com\IEnumFORMATETC
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDestroyed;
	/**
	 * @var \MicroCom\Runtime\MicroComShadow
	 * @property
	 */
	public $Shadow;
	/**
	 * @param \System\String|string $aFormatName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConvertToFormatEtc($aFormatName){}
	/**
	 * @param \System\UInt32 $celt
	 * @param \Avalonia\Win32\Interop\FORMATETC* $rgelt
	 * @param \System\UInt32* $results
	 * @return \System\UInt32
	 */
	public  function Next($celt, $rgelt, $results){}
	/**
	 * @param \System\UInt32 $celt
	 * @return \System\UInt32
	 */
	public  function Skip($celt){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @return \Avalonia\Win32\Win32Com\IEnumFORMATETC
	 */
	public  function Clone(){}
}
