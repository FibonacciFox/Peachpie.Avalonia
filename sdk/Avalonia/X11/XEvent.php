<?php
namespace Avalonia\X11;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait XEventMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function ToString_2($ev){}
}
/**
 */
class XEvent extends \System\ValueType
{
	/**
	 * @var \Avalonia\X11\XEventName
	 * @field
	 */
	protected $type;
	/**
	 * @var \Avalonia\X11\XAnyEvent
	 * @field
	 */
	protected $AnyEvent;
	/**
	 * @var \Avalonia\X11\XKeyEvent
	 * @field
	 */
	protected $KeyEvent;
	/**
	 * @var \Avalonia\X11\XButtonEvent
	 * @field
	 */
	protected $ButtonEvent;
	/**
	 * @var \Avalonia\X11\XMotionEvent
	 * @field
	 */
	protected $MotionEvent;
	/**
	 * @var \Avalonia\X11\XCrossingEvent
	 * @field
	 */
	protected $CrossingEvent;
	/**
	 * @var \Avalonia\X11\XFocusChangeEvent
	 * @field
	 */
	protected $FocusChangeEvent;
	/**
	 * @var \Avalonia\X11\XExposeEvent
	 * @field
	 */
	protected $ExposeEvent;
	/**
	 * @var \Avalonia\X11\XGraphicsExposeEvent
	 * @field
	 */
	protected $GraphicsExposeEvent;
	/**
	 * @var \Avalonia\X11\XNoExposeEvent
	 * @field
	 */
	protected $NoExposeEvent;
	/**
	 * @var \Avalonia\X11\XVisibilityEvent
	 * @field
	 */
	protected $VisibilityEvent;
	/**
	 * @var \Avalonia\X11\XCreateWindowEvent
	 * @field
	 */
	protected $CreateWindowEvent;
	/**
	 * @var \Avalonia\X11\XDestroyWindowEvent
	 * @field
	 */
	protected $DestroyWindowEvent;
	/**
	 * @var \Avalonia\X11\XUnmapEvent
	 * @field
	 */
	protected $UnmapEvent;
	/**
	 * @var \Avalonia\X11\XMapEvent
	 * @field
	 */
	protected $MapEvent;
	/**
	 * @var \Avalonia\X11\XMapRequestEvent
	 * @field
	 */
	protected $MapRequestEvent;
	/**
	 * @var \Avalonia\X11\XReparentEvent
	 * @field
	 */
	protected $ReparentEvent;
	/**
	 * @var \Avalonia\X11\XConfigureEvent
	 * @field
	 */
	protected $ConfigureEvent;
	/**
	 * @var \Avalonia\X11\XGravityEvent
	 * @field
	 */
	protected $GravityEvent;
	/**
	 * @var \Avalonia\X11\XResizeRequestEvent
	 * @field
	 */
	protected $ResizeRequestEvent;
	/**
	 * @var \Avalonia\X11\XConfigureRequestEvent
	 * @field
	 */
	protected $ConfigureRequestEvent;
	/**
	 * @var \Avalonia\X11\XCirculateEvent
	 * @field
	 */
	protected $CirculateEvent;
	/**
	 * @var \Avalonia\X11\XCirculateRequestEvent
	 * @field
	 */
	protected $CirculateRequestEvent;
	/**
	 * @var \Avalonia\X11\XPropertyEvent
	 * @field
	 */
	protected $PropertyEvent;
	/**
	 * @var \Avalonia\X11\XSelectionClearEvent
	 * @field
	 */
	protected $SelectionClearEvent;
	/**
	 * @var \Avalonia\X11\XSelectionRequestEvent
	 * @field
	 */
	protected $SelectionRequestEvent;
	/**
	 * @var \Avalonia\X11\XSelectionEvent
	 * @field
	 */
	protected $SelectionEvent;
	/**
	 * @var \Avalonia\X11\XColormapEvent
	 * @field
	 */
	protected $ColormapEvent;
	/**
	 * @var \Avalonia\X11\XClientMessageEvent
	 * @field
	 */
	protected $ClientMessageEvent;
	/**
	 * @var \Avalonia\X11\XMappingEvent
	 * @field
	 */
	protected $MappingEvent;
	/**
	 * @var \Avalonia\X11\XErrorEvent
	 * @field
	 */
	protected $ErrorEvent;
	/**
	 * @var \Avalonia\X11\XKeymapEvent
	 * @field
	 */
	protected $KeymapEvent;
	/**
	 * @var \Avalonia\X11\XGenericEventCookie
	 * @field
	 */
	protected $GenericEventCookie;
	/**
	 * @var \Avalonia\X11\XEventPad
	 * @field
	 */
	protected $Pad;
	/**
	 * @uses XEventMethodsOverride::ToString_1 ()
	 * @uses XEventMethodsOverride::ToString_2 ($ev)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToString(mixed ...$args){}
}
