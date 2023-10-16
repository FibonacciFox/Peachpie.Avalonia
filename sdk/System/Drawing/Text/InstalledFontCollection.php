<?php
namespace System\Drawing\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait InstalledFontCollectionMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
}
/**
 */
class InstalledFontCollection extends \System\Drawing\Text\FontCollection implements 
	\System\IDisposable
{
	/**
	 * @var \System\Drawing\FontFamily[]
	 * @property
	 */
	public readonly $Families;
	/**
	 * @uses InstalledFontCollectionMethodsOverride::Dispose_1 ()
	 * @uses InstalledFontCollectionMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
