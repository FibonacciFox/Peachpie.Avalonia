<?php
namespace Avalonia\X11;
/**
 */
enum Atom implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case AnyPropertyType = 0;
	case XA_PRIMARY = 1;
	case XA_SECONDARY = 2;
	case XA_ARC = 3;
	case XA_ATOM = 4;
	case XA_BITMAP = 5;
	case XA_CARDINAL = 6;
	case XA_COLORMAP = 7;
	case XA_CURSOR = 8;
	case XA_CUT_BUFFER0 = 9;
	case XA_CUT_BUFFER1 = 10;
	case XA_CUT_BUFFER2 = 11;
	case XA_CUT_BUFFER3 = 12;
	case XA_CUT_BUFFER4 = 13;
	case XA_CUT_BUFFER5 = 14;
	case XA_CUT_BUFFER6 = 15;
	case XA_CUT_BUFFER7 = 16;
	case XA_DRAWABLE = 17;
	case XA_FONT = 18;
	case XA_INTEGER = 19;
	case XA_PIXMAP = 20;
	case XA_POINT = 21;
	case XA_RECTANGLE = 22;
	case XA_RESOURCE_MANAGER = 23;
	case XA_RGB_COLOR_MAP = 24;
	case XA_RGB_BEST_MAP = 25;
	case XA_RGB_BLUE_MAP = 26;
	case XA_RGB_DEFAULT_MAP = 27;
	case XA_RGB_GRAY_MAP = 28;
	case XA_RGB_GREEN_MAP = 29;
	case XA_RGB_RED_MAP = 30;
	case XA_STRING = 31;
	case XA_VISUALID = 32;
	case XA_WINDOW = 33;
	case XA_WM_COMMAND = 34;
	case XA_WM_HINTS = 35;
	case XA_WM_CLIENT_MACHINE = 36;
	case XA_WM_ICON_NAME = 37;
	case XA_WM_ICON_SIZE = 38;
	case XA_WM_NAME = 39;
	case XA_WM_NORMAL_HINTS = 40;
	case XA_WM_SIZE_HINTS = 41;
	case XA_WM_ZOOM_HINTS = 42;
	case XA_MIN_SPACE = 43;
	case XA_NORM_SPACE = 44;
	case XA_MAX_SPACE = 45;
	case XA_END_SPACE = 46;
	case XA_SUPERSCRIPT_X = 47;
	case XA_SUPERSCRIPT_Y = 48;
	case XA_SUBSCRIPT_X = 49;
	case XA_SUBSCRIPT_Y = 50;
	case XA_UNDERLINE_POSITION = 51;
	case XA_UNDERLINE_THICKNESS = 52;
	case XA_STRIKEOUT_ASCENT = 53;
	case XA_STRIKEOUT_DESCENT = 54;
	case XA_ITALIC_ANGLE = 55;
	case XA_X_HEIGHT = 56;
	case XA_QUAD_WIDTH = 57;
	case XA_WEIGHT = 58;
	case XA_POINT_SIZE = 59;
	case XA_RESOLUTION = 60;
	case XA_COPYRIGHT = 61;
	case XA_NOTICE = 62;
	case XA_FONT_NAME = 63;
	case XA_FAMILY_NAME = 64;
	case XA_FULL_NAME = 65;
	case XA_CAP_HEIGHT = 66;
	case XA_WM_CLASS = 67;
	case XA_WM_TRANSIENT_FOR = 68;
	case XA_LAST_PREDEFINED = 68;
}
