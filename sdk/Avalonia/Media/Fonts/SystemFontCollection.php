<?php
namespace Avalonia\Media\Fonts;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SystemFontCollectionMethodsOverride
{
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
}
/**
 */
class SystemFontCollection extends \Avalonia\Media\Fonts\FontCollectionBase implements 
	\Avalonia\Media\Fonts\IFontCollection,
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\IDisposable
{
	/**
	 * @uses SystemFontCollectionMethodsOverride::GetEnumerator_1 ()
	 * @uses SystemFontCollectionMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Dispose(){}
}
