<?php
namespace Avalonia\X11;
/**
 */
class X11Atoms extends \System\Object
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $AnyPropertyType;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_PRIMARY;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_SECONDARY;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_ARC;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_ATOM;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_BITMAP;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_CARDINAL;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_COLORMAP;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_CURSOR;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_CUT_BUFFER0;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_CUT_BUFFER1;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_CUT_BUFFER2;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_CUT_BUFFER3;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_CUT_BUFFER4;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_CUT_BUFFER5;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_CUT_BUFFER6;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_CUT_BUFFER7;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_DRAWABLE;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_FONT;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_INTEGER;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_PIXMAP;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_POINT;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_RECTANGLE;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_RESOURCE_MANAGER;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_RGB_COLOR_MAP;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_RGB_BEST_MAP;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_RGB_BLUE_MAP;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_RGB_DEFAULT_MAP;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_RGB_GRAY_MAP;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_RGB_GREEN_MAP;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_RGB_RED_MAP;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_STRING;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_VISUALID;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_WINDOW;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_WM_COMMAND;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_WM_HINTS;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_WM_CLIENT_MACHINE;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_WM_ICON_NAME;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_WM_ICON_SIZE;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_WM_NAME;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_WM_NORMAL_HINTS;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_WM_SIZE_HINTS;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_WM_ZOOM_HINTS;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_MIN_SPACE;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_NORM_SPACE;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_MAX_SPACE;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_END_SPACE;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_SUPERSCRIPT_X;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_SUPERSCRIPT_Y;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_SUBSCRIPT_X;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_SUBSCRIPT_Y;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_UNDERLINE_POSITION;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_UNDERLINE_THICKNESS;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_STRIKEOUT_ASCENT;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_STRIKEOUT_DESCENT;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_ITALIC_ANGLE;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_X_HEIGHT;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_QUAD_WIDTH;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_WEIGHT;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_POINT_SIZE;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_RESOLUTION;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_COPYRIGHT;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_NOTICE;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_FONT_NAME;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_FAMILY_NAME;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_FULL_NAME;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_CAP_HEIGHT;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_WM_CLASS;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $XA_WM_TRANSIENT_FOR;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $EDID;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $WM_PROTOCOLS;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $WM_DELETE_WINDOW;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $WM_TAKE_FOCUS;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_SUPPORTED;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_CLIENT_LIST;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_NUMBER_OF_DESKTOPS;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_DESKTOP_GEOMETRY;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_DESKTOP_VIEWPORT;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_CURRENT_DESKTOP;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_DESKTOP_NAMES;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_ACTIVE_WINDOW;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WORKAREA;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_SUPPORTING_WM_CHECK;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_VIRTUAL_ROOTS;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_DESKTOP_LAYOUT;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_SHOWING_DESKTOP;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_CLOSE_WINDOW;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_MOVERESIZE_WINDOW;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_MOVERESIZE;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_RESTACK_WINDOW;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_REQUEST_FRAME_EXTENTS;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_NAME;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_VISIBLE_NAME;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_ICON_NAME;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_VISIBLE_ICON_NAME;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_DESKTOP;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_WINDOW_TYPE;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_STATE;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_ALLOWED_ACTIONS;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_STRUT;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_STRUT_PARTIAL;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_ICON_GEOMETRY;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_ICON;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_PID;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_HANDLED_ICONS;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_USER_TIME;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_FRAME_EXTENTS;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_PING;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_SYNC_REQUEST;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_SYNC_REQUEST_COUNTER;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_SYSTEM_TRAY_S;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_SYSTEM_TRAY_ORIENTATION;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_SYSTEM_TRAY_OPCODE;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_STATE_MAXIMIZED_HORZ;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_STATE_MAXIMIZED_VERT;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_STATE_FULLSCREEN;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_XEMBED;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_XEMBED_INFO;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_MOTIF_WM_HINTS;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_STATE_SKIP_TASKBAR;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_STATE_ABOVE;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_STATE_MODAL;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_STATE_HIDDEN;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_CONTEXT_HELP;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_WINDOW_OPACITY;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_WINDOW_TYPE_DESKTOP;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_WINDOW_TYPE_DOCK;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_WINDOW_TYPE_TOOLBAR;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_WINDOW_TYPE_MENU;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_WINDOW_TYPE_UTILITY;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_WINDOW_TYPE_SPLASH;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_WINDOW_TYPE_DIALOG;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_NET_WM_WINDOW_TYPE_NORMAL;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $CLIPBOARD;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $CLIPBOARD_MANAGER;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $SAVE_TARGETS;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $MULTIPLE;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $PRIMARY;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $OEMTEXT;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $UNICODETEXT;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $TARGETS;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $UTF8_STRING;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $UTF16_STRING;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $ATOM_PAIR;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $MANAGER;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $_KDE_NET_WM_BLUR_BEHIND_REGION;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $INCR;
	/**
	 * @param \System\IntPtr& $field
	 * @param \System\String|string $name
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitAtom($field, $name, $value){}
	/**
	 * @param \System\String|string $name
	 * @return \System\IntPtr
	 */
	public  function GetAtom($name){}
	/**
	 * @param \System\IntPtr $atom
	 * @return \System\String|string
	 */
	public  function GetAtomName($atom){}
	/**
	 * @param \System\IntPtr $display
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PopulateAtoms($display){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
