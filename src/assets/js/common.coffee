# 変数　
resize_timer = false

# 実行
$ ->
	setTimeout ->
		initCommon()
	,100
	return

# 初期化
initCommon = ->
	#リサイズ
	#setResize()
	#スムーススクロール
	setSmoothScroll()
	#イベント
	setEvent()


#イベント
setEvent = ->
	#スクロール
	###
	scroll_target = $(getScrollTarget())
	last_scroll_top = 0
	$(window).scroll ()->
		st = scroll_target.scrollTop()
		if st > last_scroll_top
			$('.headerFix').addClass('hide').removeClass 'fix'
		else
			$('.headerFix').removeClass('hide').addClass 'fix'
		last_scroll_top = st
		if scroll_target.scrollTop() < 176
			$('header').removeClass('headerFix').removeClass 'fix'
		else
			$('header').addClass 'headerFix'
		return
	###
	return


#リサイズ
setResize = ->
	$(window).resize () ->
		if resize_timer!=false
			clearTimeout resize_timer
		resize_timer = setTimeout ->
			return
		, 100

#スムーズスクロール設定
setSmoothScroll = (e) ->
	$(document).on "click", 'a[href^="#"]', (e) ->
		e.preventDefault()
		smoothScroll $(this).attr('href')
		return
	return

#スムーズスクロール実行
smoothScroll = (href) ->
	speed = 600

	if href != '#'
		target = $(if href == '' then 'html' else href)
		position = target.offset().top
		$(getScrollTarget()).stop().animate { scrollTop: position }, speed, 'easeOutExpo'
		false
	else
		true

#スムーズターゲット取得
getScrollTarget = ->
	scrollableElement = undefined
	firefox = navigator.userAgent.match(/Firefox\/([0-9]+)\./)
	if 'scrollingElement' of document
		scrollableElement = document.scrollingElement
	else if ! !window.MSInputMethodContext and ! !document.documentMode
		scrollableElement = document.documentElement
	else if firefox and parseInt(firefox[1]) <= 47
		scrollableElement = document.documentElement
	else
		scrollableElement = document.body
	return scrollableElement

#ブラウザ判定
checkBrowser = ->
	userAgent = window.navigator.userAgent.toLowerCase()
	appVersion = window.navigator.appVersion.toLowerCase()
	if userAgent.indexOf('iphone') != -1
		# IPHONE
		'iphone'
	else if userAgent.indexOf('ipad') != -1
		# IPAD
		'ipad'
	else if userAgent.indexOf('android') != -1
		# ANDOROID
		'android'
	else if userAgent.indexOf('opera') != -1
		# OPERA
		'opera'
	else if userAgent.indexOf('msie') != -1 or userAgent.indexOf('trident') != -1
		# IE
		if appVersion.indexOf('msie 6.') != -1
			'ie6'
		else if appVersion.indexOf('msie 7.') != -1
			'ie7'
		else if appVersion.indexOf('msie 8.') != -1
			'ie8'
		else if appVersion.indexOf('msie 9.') != -1
			'ie9'
		else if appVersion.indexOf('msie 10.') != -1
			'ie10'
		else if userAgent.indexOf('rv:11') != -1
			'ie11'
		else
			'ie'
	else if userAgent.indexOf('edge') != -1
		### Edge. ###
		'edge'
	else if userAgent.indexOf('chrome') != -1
		# CHROME
		'chrome'
	else if userAgent.indexOf('safari') != -1
		# SAFARI
		'safari'
	else if userAgent.indexOf('firefox') != -1
		#Firefoxでの処理
		'firefox'
	else if userAgent.indexOf('gecko') != -1
		# GECHO
		'gecko'
	else
		# IE
		false

#スマホ判定
checkSmp = ->
	b = checkBrowser()
	if b == 'iphone' or b == 'android'
		true
	else
		false

#タブレット判定
checkTbl = ->
	b = checkBrowser()
	if b == 'ipad'
		true
	else
		false

#OS判定
checkOS = ->
	userAgent = window.navigator.userAgent.toLowerCase()
	if userAgent.indexOf('win') > -1
		'windows'
	else if userAgent.indexOf('mac') > -1
		'mac'
	else
		'other'

#ファイル名取得
getScriptName = ->
	url = window.location.href
	filename = url.match(".+/(.+?)\.[a-z]+([\?#;].*)?$")
	if filename
		filename = filename[1]
	else
		filename = ""
	return filename
