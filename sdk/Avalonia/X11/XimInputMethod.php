<?php
namespace Avalonia\X11;
/**
 */
class XimInputMethod extends \System\Object implements 
	\Avalonia\Input\TextInput\ITextInputMethodImpl,
	\Avalonia\FreeDesktop\IX11InputMethodControl,
	\System\IDisposable
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
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsEnabled;
	/**
	 * @return \Avalonia\Input\TextInput\TextInputMethodClient
	 */
	public  function get_Client(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsActive(){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	public  function SetCursorRect($rect){}
	/**
	 * @param \System\Boolean $active
	 * @return \System\Void|void
	 */
	public  function SetWindowActive($active){}
	/**
	 * @param \Avalonia\Input\TextInput\TextInputMethodClient $client
	 * @return \System\Void|void
	 */
	public  function SetClient($client){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateActive(){}
	/**
	 * @param \Avalonia\PixelPoint $position
	 * @param \System\Double|double $scaling
	 * @return \System\Void|void
	 */
	public  function UpdateWindowInfo($position, $scaling){}
	/**
	 * @param \Avalonia\Input\TextInput\TextInputOptions $options
	 * @return \System\Void|void
	 */
	public  function SetOptions($options){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsEnabled(){}
	/**
	 * @param \Avalonia\Input\Raw\RawKeyEventArgs $args
	 * @param \System\Int32|int $keyVal
	 * @param \System\Int32|int $keyCode
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	public  function HandleEventAsync($args, $keyVal, $keyCode){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function add_Commit($value){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_Commit($value){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function add_ForwardKey($value){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_ForwardKey($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
