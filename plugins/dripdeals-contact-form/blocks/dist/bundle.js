/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./app/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./app/index.js":
/*!**********************!*\
  !*** ./app/index.js ***!
  \**********************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("var registerBlockType = wp.blocks.registerBlockType;\nvar __ = wp.i18n.__;\nconsole.log(wp); //  import { Icon, shortcode } from wordpress/icons;\n\nvar _wp$blockEditor = wp.blockEditor,\n    InspectorControls = _wp$blockEditor.InspectorControls,\n    BlockControls = _wp$blockEditor.BlockControls,\n    AlignmentToolbar = _wp$blockEditor.AlignmentToolbar,\n    BlockAlignmentToolbar = _wp$blockEditor.BlockAlignmentToolbar;\nvar _wp$components = wp.components,\n    PanelBody = _wp$components.PanelBody,\n    PanelRow = _wp$components.PanelRow,\n    TextControl = _wp$components.TextControl,\n    SelectControl = _wp$components.SelectControl;\nvar RawHTML = wp.element.RawHTML;\nregisterBlockType('jb/dripdeals', {\n  title: __('drip Form', 'dripdeals'),\n  description: __('Add contact form to any page or post using blocks', 'dripdeals'),\n  //common, formatting, layout, widget, embed\n  category: 'common',\n  icon: 'buddicons-pm',\n  keywords: [__('contact', 'dripdeals'), __('form', 'dripdeals'), __('contact form', 'dripdeals')],\n  supports: {\n    html: false\n  },\n  attributes: {\n    text_alignment: {\n      type: 'string'\n    },\n    text: {\n      type: 'string',\n      default: '[dripdeals-contact-form]'\n    }\n  },\n  edit: function edit(props) {\n    return [wp.element.createElement(\"div\", {\n      className: props.className\n    }, wp.element.createElement(BlockControls, null, wp.element.createElement(AlignmentToolbar, {\n      value: props.attributes.text_alignment,\n      onChange: function onChange(new_val) {\n        props.setAttributes({\n          text_alignment: new_val\n        });\n      }\n    })), wp.element.createElement(TextControl, {\n      label: __('Form shortcode', 'dripdeals'),\n      help: __('', 'dripdeals'),\n      value: props.attributes.text,\n      onChange: function onChange(text) {\n        return props.setAttributes({\n          text: text\n        });\n      }\n    }))];\n  },\n  save: function save(props) {\n    return wp.element.createElement(RawHTML, null, props.attributes.text);\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9hcHAvaW5kZXguanMuanMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hcHAvaW5kZXguanM/ZTkyNSJdLCJzb3VyY2VzQ29udGVudCI6WyJ2YXIgcmVnaXN0ZXJCbG9ja1R5cGUgPSB3cC5ibG9ja3MucmVnaXN0ZXJCbG9ja1R5cGU7XG52YXIgX18gPSB3cC5pMThuLl9fO1xuY29uc29sZS5sb2cod3ApOyAvLyAgaW1wb3J0IHsgSWNvbiwgc2hvcnRjb2RlIH0gZnJvbSB3b3JkcHJlc3MvaWNvbnM7XG5cbnZhciBfd3AkYmxvY2tFZGl0b3IgPSB3cC5ibG9ja0VkaXRvcixcbiAgICBJbnNwZWN0b3JDb250cm9scyA9IF93cCRibG9ja0VkaXRvci5JbnNwZWN0b3JDb250cm9scyxcbiAgICBCbG9ja0NvbnRyb2xzID0gX3dwJGJsb2NrRWRpdG9yLkJsb2NrQ29udHJvbHMsXG4gICAgQWxpZ25tZW50VG9vbGJhciA9IF93cCRibG9ja0VkaXRvci5BbGlnbm1lbnRUb29sYmFyLFxuICAgIEJsb2NrQWxpZ25tZW50VG9vbGJhciA9IF93cCRibG9ja0VkaXRvci5CbG9ja0FsaWdubWVudFRvb2xiYXI7XG52YXIgX3dwJGNvbXBvbmVudHMgPSB3cC5jb21wb25lbnRzLFxuICAgIFBhbmVsQm9keSA9IF93cCRjb21wb25lbnRzLlBhbmVsQm9keSxcbiAgICBQYW5lbFJvdyA9IF93cCRjb21wb25lbnRzLlBhbmVsUm93LFxuICAgIFRleHRDb250cm9sID0gX3dwJGNvbXBvbmVudHMuVGV4dENvbnRyb2wsXG4gICAgU2VsZWN0Q29udHJvbCA9IF93cCRjb21wb25lbnRzLlNlbGVjdENvbnRyb2w7XG52YXIgUmF3SFRNTCA9IHdwLmVsZW1lbnQuUmF3SFRNTDtcbnJlZ2lzdGVyQmxvY2tUeXBlKCdqYi9kcmlwZGVhbHMnLCB7XG4gIHRpdGxlOiBfXygnZHJpcCBGb3JtJywgJ2RyaXBkZWFscycpLFxuICBkZXNjcmlwdGlvbjogX18oJ0FkZCBjb250YWN0IGZvcm0gdG8gYW55IHBhZ2Ugb3IgcG9zdCB1c2luZyBibG9ja3MnLCAnZHJpcGRlYWxzJyksXG4gIC8vY29tbW9uLCBmb3JtYXR0aW5nLCBsYXlvdXQsIHdpZGdldCwgZW1iZWRcbiAgY2F0ZWdvcnk6ICdjb21tb24nLFxuICBpY29uOiAnYnVkZGljb25zLXBtJyxcbiAga2V5d29yZHM6IFtfXygnY29udGFjdCcsICdkcmlwZGVhbHMnKSwgX18oJ2Zvcm0nLCAnZHJpcGRlYWxzJyksIF9fKCdjb250YWN0IGZvcm0nLCAnZHJpcGRlYWxzJyldLFxuICBzdXBwb3J0czoge1xuICAgIGh0bWw6IGZhbHNlXG4gIH0sXG4gIGF0dHJpYnV0ZXM6IHtcbiAgICB0ZXh0X2FsaWdubWVudDoge1xuICAgICAgdHlwZTogJ3N0cmluZydcbiAgICB9LFxuICAgIHRleHQ6IHtcbiAgICAgIHR5cGU6ICdzdHJpbmcnLFxuICAgICAgZGVmYXVsdDogJ1tkcmlwZGVhbHMtY29udGFjdC1mb3JtXSdcbiAgICB9XG4gIH0sXG4gIGVkaXQ6IGZ1bmN0aW9uIGVkaXQocHJvcHMpIHtcbiAgICByZXR1cm4gW3dwLmVsZW1lbnQuY3JlYXRlRWxlbWVudChcImRpdlwiLCB7XG4gICAgICBjbGFzc05hbWU6IHByb3BzLmNsYXNzTmFtZVxuICAgIH0sIHdwLmVsZW1lbnQuY3JlYXRlRWxlbWVudChCbG9ja0NvbnRyb2xzLCBudWxsLCB3cC5lbGVtZW50LmNyZWF0ZUVsZW1lbnQoQWxpZ25tZW50VG9vbGJhciwge1xuICAgICAgdmFsdWU6IHByb3BzLmF0dHJpYnV0ZXMudGV4dF9hbGlnbm1lbnQsXG4gICAgICBvbkNoYW5nZTogZnVuY3Rpb24gb25DaGFuZ2UobmV3X3ZhbCkge1xuICAgICAgICBwcm9wcy5zZXRBdHRyaWJ1dGVzKHtcbiAgICAgICAgICB0ZXh0X2FsaWdubWVudDogbmV3X3ZhbFxuICAgICAgICB9KTtcbiAgICAgIH1cbiAgICB9KSksIHdwLmVsZW1lbnQuY3JlYXRlRWxlbWVudChUZXh0Q29udHJvbCwge1xuICAgICAgbGFiZWw6IF9fKCdGb3JtIHNob3J0Y29kZScsICdkcmlwZGVhbHMnKSxcbiAgICAgIGhlbHA6IF9fKCcnLCAnZHJpcGRlYWxzJyksXG4gICAgICB2YWx1ZTogcHJvcHMuYXR0cmlidXRlcy50ZXh0LFxuICAgICAgb25DaGFuZ2U6IGZ1bmN0aW9uIG9uQ2hhbmdlKHRleHQpIHtcbiAgICAgICAgcmV0dXJuIHByb3BzLnNldEF0dHJpYnV0ZXMoe1xuICAgICAgICAgIHRleHQ6IHRleHRcbiAgICAgICAgfSk7XG4gICAgICB9XG4gICAgfSkpXTtcbiAgfSxcbiAgc2F2ZTogZnVuY3Rpb24gc2F2ZShwcm9wcykge1xuICAgIHJldHVybiB3cC5lbGVtZW50LmNyZWF0ZUVsZW1lbnQoUmF3SFRNTCwgbnVsbCwgcHJvcHMuYXR0cmlidXRlcy50ZXh0KTtcbiAgfVxufSk7Il0sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./app/index.js\n");

/***/ })

/******/ });