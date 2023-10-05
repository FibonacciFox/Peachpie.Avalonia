<?php
namespace Avalonia\Input\TextInput;
/**
 */
class TransformTrackingHelper extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Nullable_1[Avalonia\Matrix]
	 * @property
	 */
	public $Matrix;
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Void|void
	 */
	public  function SetVisual($visual){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_Matrix(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Matrix($value){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function add_MatrixChanged($value){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function remove_MatrixChanged($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SubscribeToParents(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UnsubscribeFromParents(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateMatrix(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\VisualTreeAttachmentEventArgs $visualTreeAttachmentEventArgs
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnAttachedToVisualTree($sender, $visualTreeAttachmentEventArgs){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnqueueForUpdate(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PropertyChangedHandler($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\VisualTreeAttachmentEventArgs $visualTreeAttachmentEventArgs
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnDetachedFromVisualTree($sender, $visualTreeAttachmentEventArgs){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @param \System\Action_2 $cb
	 * @return \System\IDisposable
	 */
	public static function Track($visual, $cb){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
