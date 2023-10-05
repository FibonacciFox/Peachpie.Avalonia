<?php
namespace Avalonia\Win32\Input;
/**
 */
class Imm32InputMethod extends \System\Object implements 
	\Avalonia\Input\TextInput\ITextInputMethodImpl
{
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public $Hwnd;
	/**
	 * @var \Avalonia\Input\TextInput\TextInputMethodClient
	 * @property
	 */
	public $Client;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsActive;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsComposing;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $ShowCompositionWindow;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Composition;
	/**
	 * @var \Avalonia\Win32\Input\Imm32InputMethod
	 * @property
	 */
	public readonly $Current;
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Hwnd(){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Hwnd($value){}
	/**
	 * @return \Avalonia\Input\TextInput\TextInputMethodClient
	 */
	public  function get_Client(){}
	/**
	 * @param \Avalonia\Input\TextInput\TextInputMethodClient $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Client($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsActive(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsComposing(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsComposing($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ShowCompositionWindow(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Composition(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	protected  function set_Composition($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function CreateCaret(){}
	/**
	 * @return \System\Void|void
	 */
	public  function EnableImm(){}
	/**
	 * @return \System\Void|void
	 */
	public  function DisableImm(){}
	/**
	 * @param \Avalonia\Win32\WindowImpl $parent
	 * @param \System\IntPtr $hwnd
	 * @param \System\IntPtr $HKL
	 * @return \System\Void|void
	 */
	public  function SetLanguageAndWindow($parent, $hwnd, $HKL){}
	/**
	 * @return \System\Void|void
	 */
	public  function ClearLanguageAndWindow(){}
	/**
	 * @return \Avalonia\Win32\Input\Imm32InputMethod
	 */
	public static function get_Current(){}
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
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	public  function SetCursorRect($rect){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @param \System\IntPtr $himc
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MoveImeWindow($rect, $himc){}
	/**
	 * @param \System\Int32|int $x1
	 * @param \System\Int32|int $y1
	 * @param \System\IntPtr $himc
	 * @param \System\Int32|int $height
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ConfigureCompositionWindow($x1, $y1, $himc, $height){}
	/**
	 * @param \Avalonia\Input\TextInput\TextInputOptions $options
	 * @return \System\Void|void
	 */
	public  function SetOptions($options){}
	/**
	 * @param \System\String|string $composition
	 * @return \System\Void|void
	 */
	public  function CompositionChanged($composition){}
	/**
	 * @param \Avalonia\Win32\Interop\GCS $flag
	 * @return \System\String|string
	 */
	public  function GetCompositionString($flag){}
	/**
	 * @return \System\Void|void
	 */
	public  function HandleCompositionStart(){}
	/**
	 * @return \System\Void|void
	 */
	public  function HandleCompositionEnd(){}
	/**
	 * @param \System\IntPtr $wParam
	 * @param \System\IntPtr $lParam
	 * @param \System\UInt32 $timestamp
	 * @return \System\Void|void
	 */
	public  function HandleComposition($wParam, $lParam, $timestamp){}
	/**
	 * @param \System\IntPtr $ptr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ToInt32($ptr){}
	/**
	 * @param \Avalonia\Input\Key $key
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function KeyPress($key){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
