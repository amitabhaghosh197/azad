/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'Flat-UI-Icons\'">' + entity + '</span>' + html;
	}
	var icons = {
			'fui-triangle-up' : '&#xe000;',
			'fui-triangle-up-small' : '&#xe001;',
			'fui-triangle-right-large' : '&#xe002;',
			'fui-triangle-left-large' : '&#xe003;',
			'fui-triangle-down' : '&#xe004;',
			'fui-info' : '&#xe016;',
			'fui-alert' : '&#xe017;',
			'fui-question' : '&#xe018;',
			'fui-window' : '&#xe019;',
			'fui-windows' : '&#xe01a;',
			'fui-arrow-right' : '&#xe02c;',
			'fui-arrow-left' : '&#xe02d;',
			'fui-loop' : '&#xe02e;',
			'fui-cmd' : '&#xe02f;',
			'fui-mic' : '&#xe030;',
			'fui-triangle-down-small' : '&#xe005;',
			'fui-check-inverted' : '&#xe006;',
			'fui-heart' : '&#xe007;',
			'fui-location' : '&#xe008;',
			'fui-plus' : '&#xe009;',
			'fui-check' : '&#xe00a;',
			'fui-cross' : '&#xe00b;',
			'fui-list' : '&#xe00c;',
			'fui-new' : '&#xe00d;',
			'fui-video' : '&#xe00e;',
			'fui-photo' : '&#xe00f;',
			'fui-volume' : '&#xe010;',
			'fui-time' : '&#xe011;',
			'fui-eye' : '&#xe012;',
			'fui-chat' : '&#xe013;',
			'fui-home' : '&#xe015;',
			'fui-upload' : '&#xe01b;',			
			'fui-search' : '&#xe01c;',
			'fui-user' : '&#xe01d;',
			'fui-mail' : '&#xe01e;',
			'fui-lock' : '&#xe01f;',
			'fui-power' : '&#xe020;',
			'fui-star' : '&#xe021;',
			'fui-calendar' : '&#xe022;',
			'fui-gear' : '&#xe023;',
			'fui-book' : '&#xe024;',
			'fui-exit' : '&#xe025;',
			'fui-trash' : '&#xe026;',
			'fui-folder' : '&#xe027;',
			'fui-bubble' : '&#xe028;',
			'fui-cross-inverted' : '&#xe029;',
			'fui-plus-inverted' : '&#xe02a;',
			'fui-export' : '&#xe031;',
			'fui-radio-unchecked' : '&#xe02b;',
			'fui-radio-checked' : '&#xe032;',
			'fui-checkbox-unchecked' : '&#xe033;',
			'fui-checkbox-checked' : '&#xe034;',
			'fui-calendar-solid' : '&#xe022;',
			'fui-star-2' : '&#xe036;',
			'fui-credit-card' : '&#xe037;',
			'fui-clip' : '&#xe038;',
			'fui-link' : '&#xe039;',
			'fui-pause' : '&#xe03b;',
			'fui-play' : '&#xe03c;',
			'fui-tag' : '&#xe03d;',
			'fui-document' : '&#xe03e;',
			'fui-image' : '&#xe03a;',
			'fui-facebook' : '&#xe03f;',
			'fui-youtube' : '&#xe040;',
			'fui-vimeo' : '&#xe041;',
			'fui-twitter' : '&#xe042;',
			'fui-stumbleupon' : '&#xe043;',
			'fui-spotify' : '&#xe044;',
			'fui-skype' : '&#xe045;',
			'fui-pinterest' : '&#xe046;',
			'fui-path' : '&#xe047;',
			'fui-myspace' : '&#xe048;',
			'fui-linkedin' : '&#xe049;',
			'fui-googleplus' : '&#xe04a;',
			'fui-dribbble' : '&#xe04c;',
			'fui-blogger' : '&#xe04d;',
			'fui-behance' : '&#xe04e;',
			'fui-list-thumbnailed' : '&#xe04b;',
			'fui-list-small-thumbnails' : '&#xe04f;',
			'fui-list-numbered' : '&#xe050;',
			'fui-list-large-thumbnails' : '&#xe051;',
			'fui-list-columned' : '&#xe052;',
			'fui-list-bulleted' : '&#xe053;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/fui-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};