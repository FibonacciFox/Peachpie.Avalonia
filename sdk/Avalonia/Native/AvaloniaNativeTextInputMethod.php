<?php
namespace Avalonia\Native;
/**
 */
class AvaloniaNativeTextInputMethod extends \System\Object implements 
	\Avalonia\Input\TextInput\ITextInputMethodImpl,
	\System\IDisposable
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @param \Avalonia\Input\TextInput\TextInputMethodClient $client
	 * @return \System\Void|void
	 */
	public  function SetClient($client){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnCursorRectangleChanged($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnSurroundingTextChanged($sender, $e){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	public  function SetCursorRect($rect){}
	/**
	 * @param \Avalonia\Input\TextInput\TextInputOptions $options
	 * @return \System\Void|void
	 */
	public  function SetOptions($options){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
