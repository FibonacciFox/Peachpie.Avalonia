<?php
namespace Avalonia\OpenGL\Egl;
/**
 */
enum EglErrors implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case EGL_SUCCESS = 12288;
	case EGL_NOT_INITIALIZED = 12289;
	case EGL_BAD_ACCESS = 12290;
	case EGL_BAD_ALLOC = 12291;
	case EGL_BAD_ATTRIBUTE = 12292;
	case EGL_BAD_CONTEXT = 12293;
	case EGL_BAD_CONFIG = 12294;
	case EGL_BAD_CURRENT_SURFACE = 12295;
	case EGL_BAD_DISPLAY = 12296;
	case EGL_BAD_SURFACE = 12297;
	case EGL_BAD_MATCH = 12298;
	case EGL_BAD_PARAMETER = 12299;
	case EGL_BAD_NATIVE_PIXMAP = 12300;
	case EGL_BAD_NATIVE_WINDOW = 12301;
	case EGL_CONTEXT_LOST = 12302;
}
