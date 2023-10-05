<?php
namespace Avalonia\FreeDesktop\DBusIme\Fcitx;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FcitxX11TextInputMethodMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Reset_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Reset_2(){}
}
/**
 */
class FcitxX11TextInputMethod extends \Avalonia\FreeDesktop\DBusIme\DBusTextInputMethodBase implements 
	\Avalonia\FreeDesktop\IX11InputMethodControl,
	\System\IDisposable,
	\Avalonia\Input\TextInput\ITextInputMethodImpl
{
	/**
	 * @var \Avalonia\Input\TextInput\TextInputMethodClient
	 * @property
	 */
	public readonly $Client;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsActive;
	/**
	 * @uses FcitxX11TextInputMethodMethodsOverride::Reset_1 ()
	 * @uses FcitxX11TextInputMethodMethodsOverride::Reset_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Reset(mixed ...$args){}
	/**
	 * @param \System\Exception $e
	 * @param \System\ValueTuple_3 $ev
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnForward($e, $ev){}
	/**
	 * @param \System\Exception $e
	 * @param \System\String|string $s
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnCommitString($e, $s){}
	/**
	 * @param \System\Boolean $active
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetWindowActive($active){}
	/**
	 * @param \Avalonia\Input\TextInput\TextInputMethodClient $client
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetClient($client){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsEnabled(){}
	/**
	 * @param \Avalonia\Input\Raw\RawKeyEventArgs $args
	 * @param \System\Int32|int $keyVal
	 * @param \System\Int32|int $keyCode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HandleEventAsync($args, $keyVal, $keyCode){}
	/**
	 * @param \System\Action_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function add_Commit($value){}
	/**
	 * @param \System\Action_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function remove_Commit($value){}
	/**
	 * @param \System\Action_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function add_ForwardKey($value){}
	/**
	 * @param \System\Action_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function remove_ForwardKey($value){}
	/**
	 * @param \Avalonia\PixelPoint $position
	 * @param \System\Double|double $scaling
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateWindowInfo($position, $scaling){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetCursorRect($rect){}
}
