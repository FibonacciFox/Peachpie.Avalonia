<?php
namespace Avalonia\X11;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait XLibMethodsOverride
{
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function XNextEvent_1($display, $xevent){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function XNextEvent_2($display, $xevent){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function XFree_1($data){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function XFree_2($data){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function XConfigureResizeWindow_1($display, $window, $size){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function XConfigureResizeWindow_2($display, $window, $width, $height){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function XGetGeometry_1($display, $window, $root, $x, $y, $width, $height, $border_width, $depth){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function XGetGeometry_2($display, $window, $root, $x, $y, $width, $height, $border_width, $depth){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function XGetGeometry_3($display, $window, $root, $x, $y, $width, $height, $border_width, $depth){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function XGetGeometry_4($display, $window, $root, $x, $y, $width, $height, $border_width, $depth){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function XGetGeometry_5($display, $window, $geo){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function XChangeProperty_1($display, $window, $property, $type, $format, $mode, $data, $nelements){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function XChangeProperty_2($display, $window, $property, $type, $format, $mode, $value, $nelements){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function XChangeProperty_3($display, $window, $property, $type, $format, $mode, $value, $nelements){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function XChangeProperty_4($display, $window, $property, $type, $format, $mode, $data, $nelements){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function XChangeProperty_5($display, $window, $property, $type, $format, $mode, $data, $nelements){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function XChangeProperty_6($display, $window, $property, $type, $format, $mode, $data, $nelements){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function XChangeProperty_7($display, $window, $property, $type, $format, $mode, $data, $nelements){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function XChangeProperty_8($display, $window, $property, $type, $format, $mode, $data, $nelements){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function XChangeProperty_9($display, $window, $property, $type, $format, $mode, $atoms, $nelements){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function XChangeProperty_10($display, $window, $property, $type, $format, $mode, $text, $text_length){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function XCreateGC_1($display, $window, $valuemask, $values){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function XCreateGC_2($display, $drawable, $valuemask, $values){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function XFilterEvent_1($xevent, $window){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function XFilterEvent_2($xevent, $window){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Xutf8LookupString_1($xic, $xevent, $buffer, $num_bytes, $keysym, $status){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Xutf8LookupString_2($xic, $xevent, $buffer, $num_bytes, $keysym, $status){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function XCreateIC_1($xim, $name, $value, $name2, $value2, $name3, $value3, $terminator){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function XCreateIC_2($xim, $name, $value, $name2, $value2, $name3, $value3, $name4, $value4, $terminator){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function XCreateIC_3($xim, $xnClientWindow, $handle, $xnInputStyle, $value3, $xnResourceName, $optionsWmClass, $xnResourceClass, $wmClass, $xnPreeditAttributes, $list, $zero){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function XCreateIC_4($xim, $xnClientWindow, $handle, $xnFocusWindow, $value2, $xnInputStyle, $value3, $xnResourceName, $optionsWmClass, $xnResourceClass, $wmClass, $xnPreeditAttributes, $list, $zero){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function XVaCreateNestedList_1($unused, $name, $point, $terminator){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function XVaCreateNestedList_2($unused, $xnArea, $point, $xnSpotLocation, $value2, $xnFontSet, $fs, $zero){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function XVaCreateNestedList_3($unused, $xnSpotLocation, $value2, $xnFontSet, $fs, $zero){}
}
/**
 */
class XLib extends \System\Object
{
	/**
	 * @param \System\IntPtr $display
	 * @return \System\IntPtr
	 */
	public static function XOpenDisplay($display){}
	/**
	 * @param \System\IntPtr $display
	 * @return \System\Int32|int
	 */
	public static function XCloseDisplay($display){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\Boolean $onoff
	 * @return \System\IntPtr
	 */
	public static function XSynchronize($display, $onoff){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $parent
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @param \System\Int32|int $border_width
	 * @param \System\Int32|int $depth
	 * @param \System\Int32|int $xclass
	 * @param \System\IntPtr $visual
	 * @param \System\UIntPtr $valuemask
	 * @param \Avalonia\X11\XSetWindowAttributes& $attributes
	 * @return \System\IntPtr
	 */
	public static function XCreateWindow($display, $parent, $x, $y, $width, $height, $border_width, $depth, $xclass, $visual, $valuemask, $attributes){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $parent
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @param \System\Int32|int $border_width
	 * @param \System\IntPtr $border
	 * @param \System\IntPtr $background
	 * @return \System\IntPtr
	 */
	public static function XCreateSimpleWindow($display, $parent, $x, $y, $width, $height, $border_width, $border, $background){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @return \System\Int32|int
	 */
	public static function XMapWindow($display, $window){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @return \System\Int32|int
	 */
	public static function XUnmapWindow($display, $window){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @return \System\Int32|int
	 */
	public static function XMapSubindows($display, $window){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @return \System\Int32|int
	 */
	public static function XUnmapSubwindows($display, $window){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\Int32|int $screen_number
	 * @return \System\IntPtr
	 */
	public static function XRootWindow($display, $screen_number){}
	/**
	 * @param \System\IntPtr $display
	 * @return \System\IntPtr
	 */
	public static function XDefaultRootWindow($display){}
	/**
	 * @uses XLibMethodsOverride::XNextEvent_1 ($display, $xevent)
	 * @uses XLibMethodsOverride::XNextEvent_2 ($display, $xevent)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function XNextEvent(mixed ...$args){}
	/**
	 * @param \System\IntPtr $diplay
	 * @return \System\Int32|int
	 */
	public static function XConnectionNumber($diplay){}
	/**
	 * @param \System\IntPtr $diplay
	 * @return \System\Int32|int
	 */
	public static function XPending($diplay){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \System\IntPtr $mask
	 * @return \System\IntPtr
	 */
	public static function XSelectInput($display, $window, $mask){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @return \System\Int32|int
	 */
	public static function XDestroyWindow($display, $window){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \System\IntPtr $parent
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 * @return \System\Int32|int
	 */
	public static function XReparentWindow($display, $window, $parent, $x, $y){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @return \System\Int32|int
	 */
	public static function XMoveResizeWindow($display, $window, $x, $y, $width, $height){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @return \System\Int32|int
	 */
	public static function XResizeWindow($display, $window, $width, $height){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \Avalonia\X11\XWindowAttributes& $attributes
	 * @return \System\Int32|int
	 */
	public static function XGetWindowAttributes($display, $window, $attributes){}
	/**
	 * @param \System\IntPtr $display
	 * @return \System\Int32|int
	 */
	public static function XFlush($display){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \Avalonia\X11\XTextProperty& $text_prop
	 * @return \System\Int32|int
	 */
	public static function XSetWMName($display, $window, $text_prop){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \System\String|string $window_name
	 * @return \System\Int32|int
	 */
	public static function XStoreName($display, $window, $window_name){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \System\IntPtr& $window_name
	 * @return \System\Int32|int
	 */
	public static function XFetchName($display, $window, $window_name){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \System\Boolean $propagate
	 * @param \System\IntPtr $event_mask
	 * @param \Avalonia\X11\XEvent& $send_event
	 * @return \System\Int32|int
	 */
	public static function XSendEvent($display, $window, $propagate, $event_mask, $send_event){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \System\IntPtr& $root_return
	 * @param \System\IntPtr& $parent_return
	 * @param \System\IntPtr& $children_return
	 * @param \System\Int32& $nchildren_return
	 * @return \System\Int32|int
	 */
	public static function XQueryTree($display, $window, $root_return, $parent_return, $children_return, $nchildren_return){}
	/**
	 * @uses XLibMethodsOverride::XFree_1 ($data)
	 * @uses XLibMethodsOverride::XFree_2 ($data)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function XFree(mixed ...$args){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @return \System\Int32|int
	 */
	public static function XRaiseWindow($display, $window){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @return \System\UInt32
	 */
	public static function XLowerWindow($display, $window){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \Avalonia\X11\ChangeWindowFlags $value_mask
	 * @param \Avalonia\X11\XWindowChanges& $values
	 * @return \System\UInt32
	 */
	public static function XConfigureWindow($display, $window, $value_mask, $values){}
	/**
	 * @uses XLibMethodsOverride::XConfigureResizeWindow_1 ($display, $window, $size)
	 * @uses XLibMethodsOverride::XConfigureResizeWindow_2 ($display, $window, $width, $height)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function XConfigureResizeWindow(mixed ...$args){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\String|string $atom_name
	 * @param \System\Boolean $only_if_exists
	 * @return \System\IntPtr
	 */
	public static function XInternAtom($display, $atom_name, $only_if_exists){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\String[] $atom_names
	 * @param \System\Int32|int $atom_count
	 * @param \System\Boolean $only_if_exists
	 * @param \System\IntPtr[] $atoms
	 * @return \System\Int32|int
	 */
	public static function XInternAtoms($display, $atom_names, $atom_count, $only_if_exists, $atoms){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $atom
	 * @return \System\IntPtr
	 */
	public static function XGetAtomName($display, $atom){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $atom
	 * @return \System\String|string
	 */
	public static function GetAtomName($display, $atom){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \System\IntPtr[] $protocols
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	public static function XSetWMProtocols($display, $window, $protocols, $count){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \System\Boolean $owner_events
	 * @param \Avalonia\X11\EventMask $event_mask
	 * @param \Avalonia\X11\GrabMode $pointer_mode
	 * @param \Avalonia\X11\GrabMode $keyboard_mode
	 * @param \System\IntPtr $confine_to
	 * @param \System\IntPtr $cursor
	 * @param \System\IntPtr $timestamp
	 * @return \System\Int32|int
	 */
	public static function XGrabPointer($display, $window, $owner_events, $event_mask, $pointer_mode, $keyboard_mode, $confine_to, $cursor, $timestamp){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $timestamp
	 * @return \System\Int32|int
	 */
	public static function XUngrabPointer($display, $timestamp){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \System\IntPtr& $root
	 * @param \System\IntPtr& $child
	 * @param \System\Int32& $root_x
	 * @param \System\Int32& $root_y
	 * @param \System\Int32& $win_x
	 * @param \System\Int32& $win_y
	 * @param \System\Int32& $keys_buttons
	 * @return \System\Boolean
	 */
	public static function XQueryPointer($display, $window, $root, $child, $root_x, $root_y, $win_x, $win_y, $keys_buttons){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $src_w
	 * @param \System\IntPtr $dest_w
	 * @param \System\Int32|int $src_x
	 * @param \System\Int32|int $src_y
	 * @param \System\Int32& $intdest_x_return
	 * @param \System\Int32& $dest_y_return
	 * @param \System\IntPtr& $child_return
	 * @return \System\Boolean
	 */
	public static function XTranslateCoordinates($display, $src_w, $dest_w, $src_x, $src_y, $intdest_x_return, $dest_y_return, $child_return){}
	/**
	 * @uses XLibMethodsOverride::XGetGeometry_1 ($display, $window, $root, $x, $y, $width, $height, $border_width, $depth)
	 * @uses XLibMethodsOverride::XGetGeometry_2 ($display, $window, $root, $x, $y, $width, $height, $border_width, $depth)
	 * @uses XLibMethodsOverride::XGetGeometry_3 ($display, $window, $root, $x, $y, $width, $height, $border_width, $depth)
	 * @uses XLibMethodsOverride::XGetGeometry_4 ($display, $window, $root, $x, $y, $width, $height, $border_width, $depth)
	 * @uses XLibMethodsOverride::XGetGeometry_5 ($display, $window, $geo)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function XGetGeometry(mixed ...$args){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $src_w
	 * @param \System\IntPtr $dest_w
	 * @param \System\Int32|int $src_x
	 * @param \System\Int32|int $src_y
	 * @param \System\UInt32 $src_width
	 * @param \System\UInt32 $src_height
	 * @param \System\Int32|int $dest_x
	 * @param \System\Int32|int $dest_y
	 * @return \System\UInt32
	 */
	public static function XWarpPointer($display, $src_w, $dest_w, $src_x, $src_y, $src_width, $src_height, $dest_x, $dest_y){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @return \System\Int32|int
	 */
	public static function XClearWindow($display, $window){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @param \System\Boolean $exposures
	 * @return \System\Int32|int
	 */
	public static function XClearArea($display, $window, $x, $y, $width, $height, $exposures){}
	/**
	 * @param \System\IntPtr $display
	 * @return \System\IntPtr
	 */
	public static function XDefaultScreenOfDisplay($display){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $Screen
	 * @return \System\Int32|int
	 */
	public static function XScreenNumberOfScreen($display, $Screen){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\Int32|int $screen_number
	 * @return \System\IntPtr
	 */
	public static function XDefaultVisual($display, $screen_number){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\Int32|int $screen_number
	 * @return \System\UInt32
	 */
	public static function XDefaultDepth($display, $screen_number){}
	/**
	 * @param \System\IntPtr $display
	 * @return \System\Int32|int
	 */
	public static function XDefaultScreen($display){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\Int32|int $screen_number
	 * @return \System\IntPtr
	 */
	public static function XDefaultColormap($display, $screen_number){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $Colormap
	 * @param \System\String|string $Coloranem
	 * @param \Avalonia\X11\XColor& $exact_def_color
	 * @param \Avalonia\X11\XColor& $screen_def_color
	 * @return \System\Int32|int
	 */
	public static function XLookupColor($display, $Colormap, $Coloranem, $exact_def_color, $screen_def_color){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $Colormap
	 * @param \Avalonia\X11\XColor& $colorcell_def
	 * @return \System\Int32|int
	 */
	public static function XAllocColor($display, $Colormap, $colorcell_def){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \System\IntPtr $parent
	 * @return \System\Int32|int
	 */
	public static function XSetTransientForHint($display, $window, $parent){}
	/**
	 * @uses XLibMethodsOverride::XChangeProperty_1 ($display, $window, $property, $type, $format, $mode, $data, $nelements)
	 * @uses XLibMethodsOverride::XChangeProperty_2 ($display, $window, $property, $type, $format, $mode, $value, $nelements)
	 * @uses XLibMethodsOverride::XChangeProperty_3 ($display, $window, $property, $type, $format, $mode, $value, $nelements)
	 * @uses XLibMethodsOverride::XChangeProperty_4 ($display, $window, $property, $type, $format, $mode, $data, $nelements)
	 * @uses XLibMethodsOverride::XChangeProperty_5 ($display, $window, $property, $type, $format, $mode, $data, $nelements)
	 * @uses XLibMethodsOverride::XChangeProperty_6 ($display, $window, $property, $type, $format, $mode, $data, $nelements)
	 * @uses XLibMethodsOverride::XChangeProperty_7 ($display, $window, $property, $type, $format, $mode, $data, $nelements)
	 * @uses XLibMethodsOverride::XChangeProperty_8 ($display, $window, $property, $type, $format, $mode, $data, $nelements)
	 * @uses XLibMethodsOverride::XChangeProperty_9 ($display, $window, $property, $type, $format, $mode, $atoms, $nelements)
	 * @uses XLibMethodsOverride::XChangeProperty_10 ($display, $window, $property, $type, $format, $mode, $text, $text_length)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function XChangeProperty(mixed ...$args){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \System\IntPtr $property
	 * @return \System\Int32|int
	 */
	public static function XDeleteProperty($display, $window, $property){}
	/**
	 * @uses XLibMethodsOverride::XCreateGC_1 ($display, $window, $valuemask, $values)
	 * @uses XLibMethodsOverride::XCreateGC_2 ($display, $drawable, $valuemask, $values)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function XCreateGC(mixed ...$args){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $gc
	 * @return \System\Int32|int
	 */
	public static function XFreeGC($display, $gc){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $gc
	 * @param \Avalonia\X11\GXFunction $function
	 * @return \System\Int32|int
	 */
	public static function XSetFunction($display, $gc, $function){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $gc
	 * @param \System\Int32|int $line_width
	 * @param \Avalonia\X11\GCLineStyle $line_style
	 * @param \Avalonia\X11\GCCapStyle $cap_style
	 * @param \Avalonia\X11\GCJoinStyle $join_style
	 * @return \System\Int32|int
	 */
	protected static function XSetLineAttributes($display, $gc, $line_width, $line_style, $cap_style, $join_style){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $drawable
	 * @param \System\IntPtr $gc
	 * @param \System\Int32|int $x1
	 * @param \System\Int32|int $y1
	 * @param \System\Int32|int $x2
	 * @param \System\Int32|int $y2
	 * @return \System\Int32|int
	 */
	public static function XDrawLine($display, $drawable, $gc, $x1, $y1, $x2, $y2){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $drawable
	 * @param \System\IntPtr $gc
	 * @param \System\Int32|int $x1
	 * @param \System\Int32|int $y1
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @return \System\Int32|int
	 */
	public static function XDrawRectangle($display, $drawable, $gc, $x1, $y1, $width, $height){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $drawable
	 * @param \System\IntPtr $gc
	 * @param \System\Int32|int $x1
	 * @param \System\Int32|int $y1
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @return \System\Int32|int
	 */
	public static function XFillRectangle($display, $drawable, $gc, $x1, $y1, $width, $height){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \System\IntPtr $background
	 * @return \System\Int32|int
	 */
	public static function XSetWindowBackground($display, $window, $background){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $src
	 * @param \System\IntPtr $dest
	 * @param \System\IntPtr $gc
	 * @param \System\Int32|int $src_x
	 * @param \System\Int32|int $src_y
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @param \System\Int32|int $dest_x
	 * @param \System\Int32|int $dest_y
	 * @return \System\Int32|int
	 */
	public static function XCopyArea($display, $src, $dest, $gc, $src_x, $src_y, $width, $height, $dest_x, $dest_y){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \System\IntPtr $atom
	 * @param \System\IntPtr $long_offset
	 * @param \System\IntPtr $long_length
	 * @param \System\Boolean $delete
	 * @param \System\IntPtr $req_type
	 * @param \System\IntPtr& $actual_type
	 * @param \System\Int32& $actual_format
	 * @param \System\IntPtr& $nitems
	 * @param \System\IntPtr& $bytes_after
	 * @param \System\IntPtr& $prop
	 * @return \System\Int32|int
	 */
	public static function XGetWindowProperty($display, $window, $atom, $long_offset, $long_length, $delete, $req_type, $actual_type, $actual_format, $nitems, $bytes_after, $prop){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \Avalonia\X11\RevertTo $revert_to
	 * @param \System\IntPtr $time
	 * @return \System\Int32|int
	 */
	public static function XSetInputFocus($display, $window, $revert_to, $time){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \System\Int32|int $screen_number
	 * @return \System\Int32|int
	 */
	public static function XIconifyWindow($display, $window, $screen_number){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \System\IntPtr $cursor
	 * @return \System\Int32|int
	 */
	public static function XDefineCursor($display, $window, $cursor){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @return \System\Int32|int
	 */
	public static function XUndefineCursor($display, $window){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $cursor
	 * @return \System\Int32|int
	 */
	public static function XFreeCursor($display, $cursor){}
	/**
	 * @param \System\IntPtr $display
	 * @param \Avalonia\X11\CursorFontShape $shape
	 * @return \System\IntPtr
	 */
	public static function XCreateFontCursor($display, $shape){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $source
	 * @param \System\IntPtr $mask
	 * @param \Avalonia\X11\XColor& $foreground_color
	 * @param \Avalonia\X11\XColor& $background_color
	 * @param \System\Int32|int $x_hot
	 * @param \System\Int32|int $y_hot
	 * @return \System\IntPtr
	 */
	public static function XCreatePixmapCursor($display, $source, $mask, $foreground_color, $background_color, $x_hot, $y_hot){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $drawable
	 * @param \System\Byte[] $data
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @return \System\IntPtr
	 */
	public static function XCreateBitmapFromData($display, $drawable, $data, $width, $height){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $drawable
	 * @param \System\Byte[] $data
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @param \System\IntPtr $fg
	 * @param \System\IntPtr $bg
	 * @param \System\Int32|int $depth
	 * @return \System\IntPtr
	 */
	public static function XCreatePixmapFromBitmapData($display, $drawable, $data, $width, $height, $fg, $bg, $depth){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $d
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @param \System\Int32|int $depth
	 * @return \System\IntPtr
	 */
	public static function XCreatePixmap($display, $d, $width, $height, $depth){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $pixmap
	 * @return \System\IntPtr
	 */
	public static function XFreePixmap($display, $pixmap){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $drawable
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @param \System\Int32& $best_width
	 * @param \System\Int32& $best_height
	 * @return \System\Int32|int
	 */
	public static function XQueryBestCursor($display, $drawable, $width, $height, $best_width, $best_height){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\Int32|int $screen_no
	 * @return \System\IntPtr
	 */
	public static function XWhitePixel($display, $screen_no){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\Int32|int $screen_no
	 * @return \System\IntPtr
	 */
	public static function XBlackPixel($display, $screen_no){}
	/**
	 * @param \System\IntPtr $display
	 * @return \System\Void|void
	 */
	public static function XGrabServer($display){}
	/**
	 * @param \System\IntPtr $display
	 * @return \System\Void|void
	 */
	public static function XUngrabServer($display){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \Avalonia\X11\XSizeHints& $hints
	 * @param \System\IntPtr& $supplied_return
	 * @return \System\Void|void
	 */
	public static function XGetWMNormalHints($display, $window, $hints, $supplied_return){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \Avalonia\X11\XSizeHints& $hints
	 * @return \System\Void|void
	 */
	public static function XSetWMNormalHints($display, $window, $hints){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \Avalonia\X11\XSizeHints& $hints
	 * @return \System\Void|void
	 */
	public static function XSetZoomHints($display, $window, $hints){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \Avalonia\X11\XWMHints& $wmhints
	 * @return \System\Void|void
	 */
	public static function XSetWMHints($display, $window, $wmhints){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @return \System\IntPtr
	 */
	public static function XGetWMHints($display, $window){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \System\IntPtr& $size_list
	 * @param \System\Int32& $count
	 * @return \System\Int32|int
	 */
	public static function XGetIconSizes($display, $window, $size_list, $count){}
	/**
	 * @param \Avalonia\X11\XErrorHandler $error_handler
	 * @return \System\IntPtr
	 */
	public static function XSetErrorHandler($error_handler){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\Byte $code
	 * @param \System\Text\StringBuilder $buffer
	 * @param \System\Int32|int $length
	 * @return \System\IntPtr
	 */
	public static function XGetErrorText($display, $code, $buffer, $length){}
	/**
	 * @return \System\Int32|int
	 */
	public static function XInitThreads(){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $selection
	 * @param \System\IntPtr $target
	 * @param \System\IntPtr $property
	 * @param \System\IntPtr $requestor
	 * @param \System\IntPtr $time
	 * @return \System\Int32|int
	 */
	public static function XConvertSelection($display, $selection, $target, $property, $requestor, $time){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $selection
	 * @return \System\IntPtr
	 */
	public static function XGetSelectionOwner($display, $selection){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $selection
	 * @param \System\IntPtr $owner
	 * @param \System\IntPtr $time
	 * @return \System\Int32|int
	 */
	public static function XSetSelectionOwner($display, $selection, $owner, $time){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $gc
	 * @param \System\IntPtr $mask
	 * @return \System\Int32|int
	 */
	public static function XSetPlaneMask($display, $gc, $mask){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $gc
	 * @param \System\UIntPtr $foreground
	 * @return \System\Int32|int
	 */
	public static function XSetForeground($display, $gc, $foreground){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $gc
	 * @param \System\UIntPtr $background
	 * @return \System\Int32|int
	 */
	public static function XSetBackground($display, $gc, $background){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\Int32|int $percent
	 * @return \System\Int32|int
	 */
	public static function XBell($display, $percent){}
	/**
	 * @param \System\IntPtr $display
	 * @param \Avalonia\X11\EventMask $event_mask
	 * @param \System\IntPtr $cursor
	 * @param \System\IntPtr $time
	 * @return \System\Int32|int
	 */
	public static function XChangeActivePointerGrab($display, $event_mask, $cursor, $time){}
	/**
	 * @uses XLibMethodsOverride::XFilterEvent_1 ($xevent, $window)
	 * @uses XLibMethodsOverride::XFilterEvent_2 ($xevent, $window)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function XFilterEvent(mixed ...$args){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\Boolean $detectable
	 * @param \System\IntPtr $supported
	 * @return \System\Void|void
	 */
	public static function XkbSetDetectableAutoRepeat($display, $detectable, $supported){}
	/**
	 * @param \System\IntPtr $display
	 * @param \Avalonia\X11\XEvent& $xevent
	 * @return \System\Void|void
	 */
	public static function XPeekEvent($display, $xevent){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\Int32|int $screen
	 * @param \System\Int32|int $depth
	 * @param \System\Int32|int $klass
	 * @param \Avalonia\X11\XVisualInfo& $info
	 * @return \System\Void|void
	 */
	public static function XMatchVisualInfo($display, $screen, $depth, $klass, $info){}
	/**
	 * @param \System\IntPtr $display
	 * @return \System\IntPtr
	 */
	public static function XLockDisplay($display){}
	/**
	 * @param \System\IntPtr $display
	 * @return \System\IntPtr
	 */
	public static function XUnlockDisplay($display){}
	/**
	 * @param \Avalonia\X11\XImage& $image
	 * @return \System\Int32|int
	 */
	public static function XInitImage($image){}
	/**
	 * @param \Avalonia\X11\XImage& $image
	 * @return \System\Int32|int
	 */
	public static function XDestroyImage($image){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $drawable
	 * @param \System\IntPtr $gc
	 * @param \Avalonia\X11\XImage& $image
	 * @param \System\Int32|int $srcx
	 * @param \System\Int32|int $srcy
	 * @param \System\Int32|int $destx
	 * @param \System\Int32|int $desty
	 * @param \System\UInt32 $width
	 * @param \System\UInt32 $height
	 * @return \System\Int32|int
	 */
	public static function XPutImage($display, $drawable, $gc, $image, $srcx, $srcy, $destx, $desty, $width, $height){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\Boolean $discard
	 * @return \System\Int32|int
	 */
	public static function XSync($display, $discard){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \System\IntPtr $visual
	 * @param \System\Int32|int $create
	 * @return \System\IntPtr
	 */
	public static function XCreateColormap($display, $window, $visual, $create){}
	/**
	 * @param \Avalonia\X11\XEvent& $xevent
	 * @param \System\Void* $buffer
	 * @param \System\Int32|int $num_bytes
	 * @param \System\IntPtr& $keysym
	 * @param \System\IntPtr& $status
	 * @return \System\Int32|int
	 */
	public static function XLookupString($xevent, $buffer, $num_bytes, $keysym, $status){}
	/**
	 * @uses XLibMethodsOverride::Xutf8LookupString_1 ($xic, $xevent, $buffer, $num_bytes, $keysym, $status)
	 * @uses XLibMethodsOverride::Xutf8LookupString_2 ($xic, $xevent, $buffer, $num_bytes, $keysym, $status)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Xutf8LookupString(mixed ...$args){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\Int32|int $keycode
	 * @param \System\Int32|int $index
	 * @return \System\IntPtr
	 */
	public static function XKeycodeToKeysym($display, $keycode, $index){}
	/**
	 * @param \System\String|string $modifiers
	 * @return \System\IntPtr
	 */
	public static function XSetLocaleModifiers($modifiers){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $rdb
	 * @param \System\IntPtr $res_name
	 * @param \System\IntPtr $res_class
	 * @return \System\IntPtr
	 */
	public static function XOpenIM($display, $rdb, $res_name, $res_class){}
	/**
	 * @param \System\IntPtr $xim
	 * @param \System\String|string $name
	 * @param \Avalonia\X11\XIMStyles*& $value
	 * @param \System\IntPtr $terminator
	 * @return \System\IntPtr
	 */
	public static function XGetIMValues($xim, $name, $value, $terminator){}
	/**
	 * @uses XLibMethodsOverride::XCreateIC_1 ($xim, $name, $value, $name2, $value2, $name3, $value3, $terminator)
	 * @uses XLibMethodsOverride::XCreateIC_2 ($xim, $name, $value, $name2, $value2, $name3, $value3, $name4, $value4, $terminator)
	 * @uses XLibMethodsOverride::XCreateIC_3 ($xim, $xnClientWindow, $handle, $xnInputStyle, $value3, $xnResourceName, $optionsWmClass, $xnResourceClass, $wmClass, $xnPreeditAttributes, $list, $zero)
	 * @uses XLibMethodsOverride::XCreateIC_4 ($xim, $xnClientWindow, $handle, $xnFocusWindow, $value2, $xnInputStyle, $value3, $xnResourceName, $optionsWmClass, $xnResourceClass, $wmClass, $xnPreeditAttributes, $list, $zero)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function XCreateIC(mixed ...$args){}
	/**
	 * @param \System\IntPtr $xic
	 * @return \System\Void|void
	 */
	public static function XSetICFocus($xic){}
	/**
	 * @param \System\IntPtr $xic
	 * @return \System\Void|void
	 */
	public static function XUnsetICFocus($xic){}
	/**
	 * @param \System\IntPtr $xic
	 * @return \System\IntPtr
	 */
	public static function XmbResetIC($xic){}
	/**
	 * @uses XLibMethodsOverride::XVaCreateNestedList_1 ($unused, $name, $point, $terminator)
	 * @uses XLibMethodsOverride::XVaCreateNestedList_2 ($unused, $xnArea, $point, $xnSpotLocation, $value2, $xnFontSet, $fs, $zero)
	 * @uses XLibMethodsOverride::XVaCreateNestedList_3 ($unused, $xnSpotLocation, $value2, $xnFontSet, $fs, $zero)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function XVaCreateNestedList(mixed ...$args){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\String|string $name
	 * @param \System\IntPtr& $list
	 * @param \System\Int32& $count
	 * @param \System\IntPtr $unused
	 * @return \System\IntPtr
	 */
	public static function XCreateFontSet($display, $name, $list, $count, $unused){}
	/**
	 * @param \System\IntPtr $ic
	 * @param \System\String|string $name
	 * @param \System\IntPtr $data
	 * @param \System\IntPtr $terminator
	 * @return \System\IntPtr
	 */
	public static function XSetICValues($ic, $name, $data, $terminator){}
	/**
	 * @param \System\IntPtr $xim
	 * @return \System\Void|void
	 */
	public static function XCloseIM($xim){}
	/**
	 * @param \System\IntPtr $xic
	 * @return \System\Void|void
	 */
	public static function XDestroyIC($xic){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\String|string $name
	 * @param \System\Int32& $majorOpcode
	 * @param \System\Int32& $firstEvent
	 * @param \System\Int32& $firstError
	 * @return \System\Boolean
	 */
	public static function XQueryExtension($display, $name, $majorOpcode, $firstEvent, $firstError){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\Void* $cookie
	 * @return \System\Boolean
	 */
	public static function XGetEventData($display, $cookie){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\Void* $cookie
	 * @return \System\Void|void
	 */
	public static function XFreeEventData($display, $cookie){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \System\Int32& $event_base_return
	 * @param \System\Int32& $error_base_return
	 * @return \System\Int32|int
	 */
	public static function XRRQueryExtension($dpy, $event_base_return, $error_base_return){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \System\Int32& $event_base_return
	 * @param \System\Int32& $error_base_return
	 * @return \Avalonia\X11\Status
	 */
	public static function XSyncInitialize($dpy, $event_base_return, $error_base_return){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \Avalonia\X11\XSyncValue $initialValue
	 * @return \System\IntPtr
	 */
	public static function XSyncCreateCounter($dpy, $initialValue){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \System\IntPtr $counter
	 * @return \System\Int32|int
	 */
	public static function XSyncDestroyCounter($dpy, $counter){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \System\IntPtr $counter
	 * @param \Avalonia\X11\XSyncValue $value
	 * @return \System\Int32|int
	 */
	public static function XSyncSetCounter($dpy, $counter, $value){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \System\Int32& $major_version_return
	 * @param \System\Int32& $minor_version_return
	 * @return \System\Int32|int
	 */
	public static function XRRQueryVersion($dpy, $major_version_return, $minor_version_return){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \System\IntPtr $window
	 * @param \System\Boolean $get_active
	 * @param \System\Int32& $nmonitors
	 * @return \Avalonia\X11\XRRMonitorInfo*
	 */
	public static function XRRGetMonitors($dpy, $window, $get_active, $nmonitors){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \System\IntPtr $output
	 * @param \System\Int32& $count
	 * @return \System\IntPtr*
	 */
	public static function XRRListOutputProperties($dpy, $output, $count){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \System\IntPtr $output
	 * @param \System\IntPtr $atom
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $length
	 * @param \System\Boolean $_delete
	 * @param \System\Boolean $pending
	 * @param \System\IntPtr $req_type
	 * @param \System\IntPtr& $actual_type
	 * @param \System\Int32& $actual_format
	 * @param \System\Int32& $nitems
	 * @param \System\Int64& $bytes_after
	 * @param \System\IntPtr& $prop
	 * @return \System\Int32|int
	 */
	public static function XRRGetOutputProperty($dpy, $output, $atom, $offset, $length, $_delete, $pending, $req_type, $actual_type, $actual_format, $nitems, $bytes_after, $prop){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \System\IntPtr $window
	 * @param \Avalonia\X11\RandrEventMask $mask
	 * @return \System\Void|void
	 */
	public static function XRRSelectInput($dpy, $window, $mask){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \System\Int32& $major
	 * @param \System\Int32& $minor
	 * @return \Avalonia\X11\Status
	 */
	public static function XIQueryVersion($dpy, $major, $minor){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \System\Int32|int $deviceid
	 * @param \System\Int32& $ndevices_return
	 * @return \System\IntPtr
	 */
	public static function XIQueryDevice($dpy, $deviceid, $ndevices_return){}
	/**
	 * @param \Avalonia\X11\XIDeviceInfo* $info
	 * @return \System\Void|void
	 */
	public static function XIFreeDeviceInfo($info){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $image
	 * @return \System\IntPtr
	 */
	public static function XcursorImageLoadCursor($display, $image){}
	/**
	 * @param \System\IntPtr $image
	 * @return \System\IntPtr
	 */
	public static function XcursorImageDestroy($image){}
	/**
	 * @param \System\Int32& $mask
	 * @param \Avalonia\X11\XiEventType $ev
	 * @return \System\Void|void
	 */
	public static function XISetMask($mask, $ev){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_XiEventMaskLen(){}
	/**
	 * @param \System\Void* $ptr
	 * @param \System\Int32|int $shift
	 * @return \System\Boolean
	 */
	public static function XIMaskIsSet($ptr, $shift){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \System\IntPtr $win
	 * @param \Avalonia\X11\XIEventMask* $masks
	 * @param \System\Int32|int $num_masks
	 * @return \Avalonia\X11\Status
	 */
	public static function XISelectEvents($dpy, $win, $masks, $num_masks){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \System\Collections\Generic\Dictionary_2 $devices
	 * @return \Avalonia\X11\Status
	 */
	public static function XiSelectEvents($display, $window, $devices){}
	/**
	 * @return \Avalonia\X11\XClassHint*
	 */
	public static function XAllocClassHint(){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $window
	 * @param \Avalonia\X11\XClassHint* $class_hints
	 * @return \System\Int32|int
	 */
	public static function XSetClassHint($display, $window, $class_hints){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $w
	 * @param \System\IntPtr& $root
	 * @param \System\IntPtr& $child
	 * @param \System\Int32& $root_x
	 * @param \System\Int32& $root_y
	 * @param \System\Int32& $child_x
	 * @param \System\Int32& $child_y
	 * @param \System\Int32& $mask
	 * @return \System\Void|void
	 */
	public static function QueryPointer($display, $w, $root, $child, $root_x, $root_y, $child_x, $child_y, $mask){}
	/**
	 * @param \Avalonia\X11\X11Info $x11
	 * @param \System\Nullable_1 $handle
	 * @return \System\ValueTuple_2
	 */
	public static function GetCursorPos($x11, $handle){}
	/**
	 * @param \Avalonia\X11\AvaloniaX11Platform $plat
	 * @param \Avalonia\X11\EventHandler $handler
	 * @return \System\IntPtr
	 */
	public static function CreateEventWindow($plat, $handler){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
