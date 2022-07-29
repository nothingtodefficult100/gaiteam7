if (self.CavalryLogger) { CavalryLogger.start_js_script(document.currentScript); }/*FB_PKG_DELIM*/

__d("AddOnEndOverride.react",["react","stylex"],(function(a,b,c,d,e,f,g){"use strict";var h=d("react");function a(a,b){var d=a.children,e=a.xstyle;a=babelHelpers.objectWithoutPropertiesLoose(a,["children","xstyle"]);return h.jsx("div",babelHelpers["extends"]({},a,{className:c("stylex")(e),ref:b,children:d}))}a.displayName=a.name+" [from "+f.id+"]";b=h.forwardRef(a);g["default"]=b}),98);
__d("DisclosureAddOn.react",["ix","AddOnEndOverride.react","CometIcon.react","CometListCellContext","Locale","TetraText.react","fbicon","react","stylex"],(function(a,b,c,d,e,f,g,h){"use strict";var i=d("react"),j=d("react").useContext,k=c("Locale").isRTL(),l={spacer:{width:"loos5mxf"},textNode:{alignItems:"bp9cbjyn",display:"j83agx80"}};function a(a){var b=a.color,e=a.icon,f=a.text;a=babelHelpers.objectWithoutPropertiesLoose(a,["color","icon","text"]);var g=j(c("CometListCellContext")),m=g.disabled;m=m===void 0?!1:m;g=g.level;g=g===void 0?3:g;e=e;g===3?e=k?d("fbicon")._(h("492521"),24):d("fbicon")._(h("492575"),24):e=k?d("fbicon")._(h("492518"),20):d("fbicon")._(h("492572"),20);b=i.jsx(c("CometIcon.react"),babelHelpers["extends"]({},a,{color:m?"disabled":(a=b)!=null?a:"secondary",disabled:m,icon:e}));f!=null&&(b=i.jsxs(c("AddOnEndOverride.react"),{xstyle:l.textNode,children:[i.jsx(c("TetraText.react"),{color:m?"disabled":"secondary",numberOfLines:1,type:g===3?"body2":"body3",children:f}),i.jsx("div",{className:c("stylex")(l.spacer)}),b]}));return b}a.displayName=a.name+" [from "+f.id+"]";g["default"]=a}),98);
__d("useCometPressableEventHandlers",["ExecutionEnvironment","emptyObject","react","useLayoutEffect_SAFE_FOR_SSR"],(function(a,b,c,d,e,f,g){"use strict";var h=d("react");b=d("react");e=b.createContext;var i=b.useCallback,j=b.useContext,k=b.useEffect,l=b.useRef,m=b.useState,n=new Set();d("ExecutionEnvironment").canUseDOM&&document.addEventListener("mousedown",function(){n.forEach(function(a){return a()})},!0);var o=function(a){n.add(a);return function(){n["delete"](a)}},p=new Set();d("ExecutionEnvironment").canUseDOM&&document.addEventListener("keydown",function(a){switch(a.key){case"ArrowUp":case"ArrowRight":case"ArrowDown":case"ArrowLeft":case"Tab":case"Enter":case" ":case"Escape":p.forEach(function(a){return a()})}},!0);var q=function(a){p.add(a);return function(){p["delete"](a)}},r=d("ExecutionEnvironment").canUseDOM?null:!0;function s(){r==null&&(r=!window.matchMedia("(pointer: coarse)").matches);return r}var t=0,u=1,v=e(!1);function a(a){var b=a.clickOnSpace,d=b===void 0?!1:b;b=a.disabled;b=b===void 0?!1:b;var e=a.onFocusChange,f=a.onFocusIn,g=a.onFocusOut,n=a.onFocusVisibleChange,p=a.onHoverChange,r=a.onHoverIn,w=a.onHoverOut,x=a.onPress,y=a.onPressChange,z=a.onPressIn,A=a.onPressOut;a=a.testOnly_pressed;var B=a===void 0?!1:a;a=j(v);var C=l(t),D=m(!1),E=D[0],F=D[1];D=m(b);var G=D[0];D=D[1];var H=m(B),I=H[0],J=H[1];H=m(!1);var K=H[0],L=H[1];H=m(!1);var M=H[0],N=H[1];H=m(!1);var O=H[0],P=H[1];k(function(){var a=o(function(){C.current=t}),b=q(function(){C.current=u});return function(){a(),b()}},[]);var Q=i(function(a){J(a),y&&y(a)},[y]),R=i(function(a){L(a),e&&e(a),(C.current===u||!a&&M)&&(N(a),n&&n(a))},[e,n,M]),S=i(function(a){P(a),p&&p(a)},[p]);H=m(B);var T=H[0],U=H[1];c("useLayoutEffect_SAFE_FOR_SSR")(function(){B!==T&&(Q(B),U(B))},[T,Q,B]);H=l(null);var V=i(function(a){R(!0),f&&f(a)},[f,R]),W=i(function(a){K&&(R(!1),g&&g(a))},[K,g,R]),X=i(function(a){if(!s())return;E&&(Q(!0),!I&&z&&z(a));S(!0);r&&r(a)},[E,r,z,I,S,Q]),Y=i(function(a){I&&(Q(!1),A&&A(a)),O&&(S(!1),w&&w(a))},[O,w,A,I,S,Q]),Z=i(function(a){F(!0),Q(!0),z&&z(a)},[z,Q]),aa=i(function(a){F(!1),I&&(Q(!1),A&&A(a))},[A,I,Q]),ba=i(function(a){F(!1),I&&(Q(!1),A&&A(a))},[A,I,Q]),$=l(!1),ca=i(function(a){$.current=a.touches.length===1,Q($.current),$.current&&z!=null&&z(a)},[z,Q]),da=i(function(a){$.current=!1,I&&(Q(!1),A&&A(a))},[A,I,Q]),ea=i(function(a){I&&(Q(!1),$.current&&a.touches.length===1&&(A&&A(a)))},[A,I,Q]);k(function(){if(E&&!O){var a=function(){F(!1)};document.addEventListener("mouseup",a,{capture:!0,passive:!0});return function(){document.removeEventListener("mouseup",a,{capture:!0,passive:!0})}}return function(){}},[a,E,Q,O]);var fa=i(function(a){F(!1),x&&x(a)},[x]),ga=i(function(a){a.key==="Enter"&&(x&&x(a)),a.key===" "&&d&&(x&&x(a))},[d,x]);b!==G&&(b&&(Q(!1),R(!1),S(!1)),D(b));G=b?c("emptyObject"):{onBlur:W,onClick:fa,onDragStart:ba,onFocus:V,onKeyDown:ga,onMouseDown:Z,onMouseEnter:X,onMouseLeave:Y,onMouseUp:aa,onTouchEnd:ea,onTouchMove:da,onTouchStart:ca};D=i(function(a){a=a.children;return h.jsx(v.Provider,{value:!0,children:a})},[]);return[H,a,{disabled:b,focused:K,focusVisible:M,hovered:O,pressed:I},G,D]}g["default"]=a}),98);
__d("BaseCheckbox.react",["BaseFocusRing.react","BaseInput.react","BaseView.react","mergeRefs","react","useLayoutEffect_SAFE_FOR_SSR"],(function(a,b,c,d,e,f,g){"use strict";var h=d("react");b=d("react");var i=b.useMemo,j=b.useRef,k={checkbox:{cursor:"nhd2j8a9",height:"datstx6m",marginTop:"kvgmc6g5",marginEnd:"cxmmr5t8",marginBottom:"oygrvhab",marginStart:"hcukyx3x",opacity:"b5wmifdl",outline:"lzcic4wl",paddingTop:"jb3vyjys",paddingEnd:"rz4wbd8a",paddingBottom:"qt6c0cv9",paddingStart:"a8nywdso",position:"pmk7jnqg",start:"j9ispegn",top:"kr520xx4",width:"k4urcfbm"},wrapper:{position:"l9j0dhe7"}};function a(a,b){var d=a.children,e=a.indeterminate,f=e===void 0?!1:e;e=a.suppressFocusRing;var g=a.testid,l=a.xstyle,m=babelHelpers.objectWithoutPropertiesLoose(a,["children","indeterminate","suppressFocusRing","testid","xstyle"]),n=j(null);c("useLayoutEffect_SAFE_FOR_SSR")(function(){n.current!=null&&(n.current.indeterminate=f)},[f]);var o=i(function(){return c("mergeRefs")(b,n)},[b]);return h.jsx(c("BaseFocusRing.react"),{suppressFocusRing:e,children:function(a){return h.jsxs(c("BaseView.react"),{testid:void 0,xstyle:[k.wrapper,a,l],children:[d,h.jsx(c("BaseInput.react"),babelHelpers["extends"]({},m,{"aria-checked":f?"mixed":(a=m.checked)!=null?a:!1,ref:o,type:"checkbox",xstyle:k.checkbox}))]})}})}a.displayName=a.name+" [from "+f.id+"]";e=h.memo(h.forwardRef(a));g["default"]=e}),98);
__d("BaseRadio.react",["BaseFocusRing.react","BaseInput.react","BaseView.react","mergeRefs","react"],(function(a,b,c,d,e,f,g){"use strict";var h=d("react");b=d("react");var i=b.useLayoutEffect,j=b.useMemo,k=b.useRef,l={radio:{cursor:"nhd2j8a9",height:"datstx6m",marginTop:"kvgmc6g5",marginEnd:"cxmmr5t8",marginBottom:"oygrvhab",marginStart:"hcukyx3x",opacity:"b5wmifdl",outline:"lzcic4wl",paddingTop:"jb3vyjys",paddingEnd:"rz4wbd8a",paddingBottom:"qt6c0cv9",paddingStart:"a8nywdso",position:"pmk7jnqg",start:"j9ispegn",top:"kr520xx4",width:"k4urcfbm"},wrapper:{position:"l9j0dhe7"}};function a(a,b){var d=a.children,e=a.indeterminate,f=e===void 0?!1:e;e=a.suppressFocusRing;var g=a.testid,m=a.xstyle,n=babelHelpers.objectWithoutPropertiesLoose(a,["children","indeterminate","suppressFocusRing","testid","xstyle"]),o=k(null);i(function(){o.current!=null&&(o.current.indeterminate=f)},[f]);var p=j(function(){return c("mergeRefs")(b,o)},[b]);return h.jsx(c("BaseFocusRing.react"),{suppressFocusRing:e,children:function(a){return h.jsxs(c("BaseView.react"),{testid:void 0,xstyle:[l.wrapper,a,m],children:[d,h.jsx(c("BaseInput.react"),babelHelpers["extends"]({},n,{"aria-checked":f?"mixed":(a=n.checked)!=null?a:!1,ref:p,type:"radio",xstyle:l.radio}))]})}})}a.displayName=a.name+" [from "+f.id+"]";e=h.memo(h.forwardRef(a));g["default"]=e}),98);
__d("BaseStyledCheckbox.react",["BaseCheckbox.react","react"],(function(a,b,c,d,e,f,g){"use strict";var h=d("react"),i=d("react").useCallback,j={checkbox:{display:"j83agx80"}};function a(a,b){var d=a["aria-label"],e=a["aria-labelledby"],f=a.checked,g=a.checkedIcon,k=a.children,l=a.disabled;l=l===void 0?!1:l;var m=a.id,n=a.name,o=a.onChange,p=a.suppressFocusRing,q=a.tabIndex,r=a.testid;r=a.uncheckedIcon;var s=a.value;a=i(function(a,b){o(s,b)},[o,s]);return h.jsxs(c("BaseCheckbox.react"),{"aria-label":d,"aria-labelledby":e,checked:f,disabled:l,id:m,name:n,onValueChange:a,ref:b,suppressFocusRing:p,tabIndex:q,testid:void 0,xstyle:j.checkbox,children:[f?g:r,k]})}a.displayName=a.name+" [from "+f.id+"]";b=h.forwardRef(a);g["default"]=b}),98);
__d("CometCheckbox.react",["ix","BaseStyledCheckbox.react","CometIcon.react","CometPressableOverlay.react","TetraText.react","fbicon","react","useCometPressableEventHandlers"],(function(a,b,c,d,e,f,g,h){"use strict";var i=d("react");function a(a,b){var e=a.checked,f=a.disabled;f=f===void 0?!1:f;var g=a.iconSize;g=g===void 0?24:g;var j=a.id,k=a.label,l=a.labelIsHidden;l=l===void 0?!1:l;var m=a.name,n=a.onChange,o=a.reduceEmphasis;o=o===void 0?!1:o;var p=a.smallerLabel;p=p===void 0?!1:p;var q=a.testid;q=a.value;a=c("useCometPressableEventHandlers")({disabled:f});var r=a[0];a[1];var s=a[2],t=s.focusVisible,u=s.hovered;s=s.pressed;a=a[3];return i.jsxs("label",babelHelpers["extends"]({className:"f1sip0of l9j0dhe7 cxgpxx05 sj5x9vvc j83agx80 bp9cbjyn oajrlxb2"},a,{ref:r,children:[i.jsx(c("BaseStyledCheckbox.react"),{"aria-label":l?k:void 0,checked:e,checkedIcon:i.jsx(c("CometIcon.react"),{color:f?"disabled":"highlight",icon:g===16?d("fbicon")._(h("492790"),16):d("fbicon")._(h("531032"),24)}),disabled:f,id:j,name:m,onChange:n,ref:b,testid:void 0,uncheckedIcon:i.jsx(c("CometIcon.react"),{color:f?"disabled":"secondary",icon:g===16?d("fbicon")._(h("659287"),16):d("fbicon")._(h("659289"),24)}),value:q,children:i.jsx(c("CometPressableOverlay.react"),{focusVisible:t,hovered:u,offset:8,pressed:s,radius:"50%"})}),l?null:i.jsx("div",{className:"hpfvmrgz h676nmdw buofh1pr rj1gh0hx",children:i.jsx(c("TetraText.react"),{color:f?"disabled":"primary",type:o?p===!0?"body4":"body3":"button2",children:k})})]}))}a.displayName=a.name+" [from "+f.id+"]";b=i.forwardRef(a);g["default"]=b}),98);