<!DOCTYPE html>

<html  dir="ltr" lang="en" xml:lang="en">
<head>
    <title>Log in to the site | Moodle</title>
    <link rel="shortcut icon" href="//moodle.lse.ac.uk/pluginfile.php/1/theme_catawesome/favicon/1729253918/apple-touch-icon.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, Log in to the site | Moodle" />
<link rel="stylesheet" type="text/css" href="https://moodle.lse.ac.uk/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://moodle.lse.ac.uk/theme/styles.php/catawesome/1729253918_1728974681/all" />
<script>
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/moodle.lse.ac.uk","homeurl":{},"sesskey":"LsthSNTQjD","sessiontimeout":"28800","sessiontimeoutwarning":1200,"themerev":"1729253918","slasharguments":1,"theme":"catawesome","iconsystemmodule":"core\/icon_system_fontawesome","jsrev":"1728974251","admin":"admin","svgicons":true,"usertimezone":"Europe\/London","language":"en","courseId":1,"courseContextId":2,"contextid":1,"contextInstanceId":0,"langrev":1728974251,"templaterev":"1728974251"};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/moodle.lse.ac.uk\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/moodle.lse.ac.uk\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/moodle.lse.ac.uk\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/moodle.lse.ac.uk\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/moodle.lse.ac.uk\/theme\/yui_combo.php?m\/1728974251\/","combine":true,"comboBase":"https:\/\/moodle.lse.ac.uk\/theme\/yui_combo.php?","ext":false,"root":"m\/1728974251\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_attendance-groupfilter":{"requires":["base","node"]},"moodle-mod_customcert-rearrange":{"requires":["dd-delegate","dd-drag"]},"moodle-mod_hsuforum-article":{"requires":["base","node","event","router","core_rating","querystring","moodle-mod_hsuforum-io","moodle-mod_hsuforum-livelog"]},"moodle-mod_hsuforum-io":{"requires":["base","io-base","io-form","io-upload-iframe","json-parse"]},"moodle-mod_hsuforum-livelog":{"requires":["widget"]},"moodle-mod_mediagallery-mediabox":{"requires":["base","node","selector-css3"]},"moodle-mod_mediagallery-base":{"requires":["base","node","selector-css3","dd-constrain","dd-proxy","dd-drop","dd-plugin","moodle-core-notification","event"]},"moodle-mod_offlinequiz-randomquestion":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_offlinequiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_offlinequiz-offlinequizbase","moodle-mod_offlinequiz-util-base","moodle-mod_offlinequiz-util-page","moodle-mod_offlinequiz-util-slot","moodle-course-util"]},"moodle-mod_offlinequiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_offlinequiz-offlinequizbase","moodle-mod_offlinequiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_offlinequiz-util":{"requires":["node"],"use":["moodle-mod_offlinequiz-util-base"],"submodules":{"moodle-mod_offlinequiz-util-base":{},"moodle-mod_offlinequiz-util-slot":{"requires":["node","moodle-mod_offlinequiz-util-base"]},"moodle-mod_offlinequiz-util-page":{"requires":["node","moodle-mod_offlinequiz-util-base"]}}},"moodle-mod_offlinequiz-offlinequizquestionbank":{"requires":["base","event","node","io","io-form","yui-later","moodle-question-qbankmanager","moodle-qbank_editquestion-chooser","moodle-question-searchform","moodle-core-notification"]},"moodle-mod_offlinequiz-modform":{"requires":["base","node","event"]},"moodle-mod_offlinequiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_offlinequiz-repaginate":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_offlinequiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_offlinequiz-util","querystring-parse"]},"moodle-mod_offlinequiz-offlinequizbase":{"requires":["base","node"]},"moodle-mod_oublog-tagselector":{"requires":["base","node","autocomplete","autocomplete-filters","autocomplete-highlighters"]},"moodle-mod_oublog-savecheck":{"requires":["base","node","io","panel","moodle-core-notification-alert"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_scheduler-delselected":{"requires":["base","node","event"]},"moodle-mod_scheduler-saveseen":{"requires":["base","node","event"]},"moodle-mod_scheduler-studentlist":{"requires":["base","node","event","io"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-qbank_editquestion-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-warning","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_echo360attoplugin-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emojipicker-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_fullscreen-button":{"requires":["event-resize","moodle-editor_atto-plugin"]},"moodle-atto_h5p-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_html-beautify":{},"moodle-atto_html-button":{"requires":["promise","moodle-editor_atto-plugin","moodle-atto_html-beautify","moodle-atto_html-codemirror","event-valuechange"]},"moodle-atto_html-codemirror":{"requires":["moodle-atto_html-codemirror-skin"]},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_poodll-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_recordrtc-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_recordrtc-recording"]},"moodle-atto_recordrtc-recording":{"requires":["moodle-atto_recordrtc-button"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_wordimport-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"https:\/\/moodle.lse.ac.uk\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/moodle.lse.ac.uk\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1728974251\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/moodle.lse.ac.uk\/lib\/javascript.php\/1728974251\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/moodle.lse.ac.uk\/lib\/javascript.php\/1728974251\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdn.jsdelivr.net\/npm\/mathjax@2.7.9\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>

<style type="text/css">

/* Hide the manual login form */
div.loginpanel form#login { display: none; }
div.forgetpass { display: none; }
div.potentialidp { padding-bottom: 1em; }

.responsive-video {
position: relative;
padding-bottom: 56.25%; /* Default for 1600x900 videos 16:9 ratio*/
padding-top: 0px;
height: 0;
overflow: hidden;
}

.responsive-video iframe {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
}

/* My feedback custom style */
.path-report-myfeedback .heading h2 {
padding: .5rem .5rem !important;
background: #ff0505 !important;
}

.dataTable th {
border-bottom: 2px solid #dee2e6 !important;
border-top: 1px solid #dee2e6 !important;
background: #ffffff !important;
font-weight: bold !important;
color: #000000 !important;
}

.dataTable tr.even,  [class^="sorting"], [class^="ellip"]{
background-color: rgba(0,0,0,.05) !important; 
}

/* 1st of 4 to improve readability of OS Open Forum discussion threads by adding the same border to posts as is seen on the standard Moodle forum */

.hsuforum-post-wrapper {
outline: 1px solid #dee2e6;
outline-offset: -15px;
padding-right: 3em;
padding-bottom: 3em;
}

.hsuforum-thread-author {
border-top: 1px solid #dee2e6;
border-left: 1px solid #dee2e6;
border-right: 1px solid #dee2e6;
}

.hsuforum-thread-header {
border-left: 1px solid #dee2e6;
border-right: 1px solid #dee2e6;
}

.hsuforum-thread-content {
border-left: 1px solid #dee2e6;
border-right: 1px solid #dee2e6;
border-bottom: 1px solid #dee2e6;
}

.hsuforum-post-title {
font-size: 1.25em;
}
</style>

<link rel="apple-touch-icon" href="/public-content/images/apple-touch-icon.png" />

<!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="https://analytics.euoffice.catalyst-eu.net/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '66']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->
<meta name="robots" content="noindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body  id="page-login-index" class="format-site  path-login chrome dir-ltr lang-en yui-skin-sam yui3-skin-sam moodle-lse-ac-uk pagelayout-login course-1 context-1 notloggedin catawesome-login" >

<div>
    <a class="sr-only sr-only-focusable" href="#maincontent">Skip to main content</a>
</div><script src="https://moodle.lse.ac.uk/lib/javascript.php/1728974251/lib/polyfills/polyfill.js"></script>
<script src="https://moodle.lse.ac.uk/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script><script src="https://moodle.lse.ac.uk/theme/jquery.php/core/jquery-3.6.1.min.js"></script>
<script src="https://moodle.lse.ac.uk/lib/javascript.php/1728974251/lib/javascript-static.js"></script>
<script>
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>


<style>
/* Add 'Hidden' text for all hidden greyed out courses */
a.breadcrumb-item-link.text-muted:after, a.dimmed::after , a.dimmed_text::after { 
    content: " - Hidden";
}

/* Add scrollbar to Grader Report */

div.gradeparent {
overflow: scroll;
}
</style>

<div id="background_carousel">
    <div id="lp_carousel" class="carousel slide "
      data-ride="carousel" data-interval="5000">
      <div class="carousel-inner">
              <div class="carousel-item item active" style="background-image: url(https://moodle.lse.ac.uk/pluginfile.php/1/theme_catawesome/slideimages/0/lse-library.jpg);"></div>
      </div>
    </div>
</div>


<div id="page" class="container-fluid mt-0">
    
    <div id="page-content" class="row">
        <div id="region-main-box" class="col-12">
            <section id="region-main" class="col-12">
                <span class="notifications" id="user-notifications"></span>
                <div role="main"><span id="maincontent"></span><div class="row justify-content-center logo">
        <img src="//moodle.lse.ac.uk/pluginfile.php/1/theme_catawesome/logologin/1729253918/LSE%202023%20full%20logo%20non-responsive.svg" title="LSE Moodle" alt="LSE Moodle"/>
    </div>

<div class="row justify-content-center my-4">
    <div class="col-md-12 guest">
        <div class="card loginpanel">
            <div class="card-block">

                <div class="row m-a-0">
                    <div class="col-lg-6 instructions">
                        <h1>Log in</h1>

                            <p dir="ltr" style="text-align:left;"></p><p dir="ltr">Use <strong>Office365</strong> to log in if you have a valid @lse.ac.uk email address. This is the recommended way to log in to Moodle for all current staff and students.<br /></p><p dir="ltr">Use <strong>LSE Identity Provider</strong> to log in if you do not have an active LSE email address but have been provided with an LSE Public Account.</p><br /><p></p>


                            <h3 class="mt-4 idp">Log in using your account on:</h3>
                            <div class="potentialidplist" class="m-t-1">
                                    <div class="potentialidp">
                                        <a href="https://moodle.lse.ac.uk/auth/saml2/login.php?wants=https%3A%2F%2Fmoodle.lse.ac.uk%2Fpluginfile.php%2F2911051%2Fcourse%2Fsection%2F251955%2FClass04.Rmd%3Ftime%3D1729001891235&idp=655a2ea6087cdbbec383971d4cc0fcc9&passive=off" title="Office 365" class="btn btn-secondary">
                                                <img src="https://moodle.lse.ac.uk/theme/image.php/catawesome/core/1729253918/i/user" alt="" width="24" height="24"/>
                                            Office 365
                                        </a>
                                    </div>
                                    <div class="potentialidp">
                                        <a href="https://moodle.lse.ac.uk/auth/saml2/login.php?wants=https%3A%2F%2Fmoodle.lse.ac.uk%2Fpluginfile.php%2F2911051%2Fcourse%2Fsection%2F251955%2FClass04.Rmd%3Ftime%3D1729001891235&idp=122f0f03f9278f4b2a34c147b047c7bd&passive=off" title="LSE Identity Provider" class="btn btn-secondary">
                                                <img src="https://ps-idp-logo-prod.s3.amazonaws.com/LSE-logo-16-x-16.png" alt="" width="24" height="24"/>
                                            LSE Identity Provider
                                        </a>
                                    </div>
                            </div>
                    </div>

                    <div class="col-lg-6 form">
                        <form action="https://moodle.lse.ac.uk/login/index.php" method="post" id="login">
                            <input id="anchor" type="hidden" name="anchor" value="">
                            <script>document.getElementById('anchor').value = location.hash;</script>

                            <h2 class="welcome">Already have an account?</h2>

                            <label for="username" class="sr-only">
                                    Username
                            </label>

                            <input type="hidden" name="logintoken" value="6PonCQpxBGS2veX1QE8P3vm46KgvtEwN" />
                            <div class="input-group input-group-username">
                                <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                                <input type="text" name="username" id="username"
                                    class="form-control"
                                    value=""
                                    placeholder="Username">
                            </div>

                            <label for="password" class="sr-only">Password</label>
                            <div class="input-group input-group-password">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" id="password" value=""
                                    class="form-control"
                                    placeholder="Password">
                            </div>


                            <button type="submit" class="btn btn-primary btn-block" id="loginbtn">Log in</button>
                        </form>

                        <div class="forgetpass mt-1">
                            <p><a href="https://moodle.lse.ac.uk/login/forgot_password.php">Forgotten your username or password?</a></p>
                        </div>

                        <div class="loginguest mt-4">
                        </div>
                        
                        <div class="login-divider"></div>
                        <div class="d-flex align-items-center justify-content-center mt-4">
                            <button type="button" class="btn btn-secondary"  data-modal="alert" data-modal-title-str='["cookiesenabled", "core"]'  data-modal-content-str='["cookiesenabled_help_html", "core"]'>Cookies notice</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div>
                
            </section>
        </div>
    </div>
</div>

<section class="edge--bottom">&nbsp;</section>
<footer id="page-footer" data-region="mainpage" class="bg-inverse">
    <div class="container-fluid">
        <div class="footer-lists row">




        </div>
        <div class="row">
            <div class="col-md-12 col-lg-7">
                    <div style="text-align: left;"><a href="https://lse.atlassian.net/wiki/spaces/MG/overview" target="_blank" rel="noopener">Moodle Guides</a> | <a href="https://lse.atlassian.net/wiki/spaces/LREG/overview" target="_blank" rel="noopener">Lecture recording guides</a> | <a href="https://lse.atlassian.net/wiki/spaces/MG/pages/1113391109/LSE+Moodle+Accessibility+Statement" target="_blank" rel="noopener">Accessibility Statement</a>&nbsp;| <a href="https://lse.atlassian.net/wiki/spaces/MG/pages/2067595265/LSE+Moodle+Terms+of+Use" target="_blank" rel="noopener">Terms of use | </a> <a href="https://moodle.lse.ac.uk/help.php?component=moodle&amp;identifier=cookiesenabled&amp;lang=en" target="_blank" rel="noopener">Cookies</a></div>
                <a class="mobilelink" href="https://download.moodle.org/mobile?version=2022112814&amp;lang=en&amp;iosappid=633359593&amp;androidappid=com.moodle.moodlemobile">Get the mobile app</a>


            </div>
            <div class="col-md-12 col-lg-5">
                <div class="copyright mb-3">
                    &copy; LSE
                </div>

            </div>
        </div>

        <div class="tool_usertours-resettourcontainer text-center"></div>
            
<script>
    // CATALYST IT - Login page customisations
    // Checks if on the correct page
    if($('#page-login-index').length) {
         // Moves the logo to inside the form box
        $('.logo').insertBefore('#login');
        // Moves the potentialidplist to inside the form box
        $('.potentialidplist').insertAfter('#login');
         // Moves the idp header to inside the form box
        $('h3.idp').insertAfter('#login');
    };
</script><script>
//<![CDATA[
var require = {
    baseUrl : 'https://moodle.lse.ac.uk/lib/requirejs.php/1728974251/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://moodle.lse.ac.uk/lib/javascript.php/1728974251/lib/jquery/jquery-3.6.1.min',
        jqueryui: 'https://moodle.lse.ac.uk/lib/javascript.php/1728974251/lib/jquery/ui-1.13.2/jquery-ui.min',
        jqueryprivate: 'https://moodle.lse.ac.uk/lib/javascript.php/1728974251/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },
      // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
      '*': { process: 'core/first' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script src="https://moodle.lse.ac.uk/lib/javascript.php/1728974251/lib/requirejs/require.min.js"></script>
<script>
//<![CDATA[
M.util.js_pending("core/first");
require(['core/first'], function() {
require(['core/prefetch'])
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp('en');
});;
M.util.js_pending('filter_panorama/panorama'); require(['filter_panorama/panorama'], function(amd) {amd.init("01146304eff2b6e129e66a3ba32e527f:2bb061b8bb73bcd43650b552ca8cf872e55f38a23aea3e520dc8994dd9701d1042378955da1ffd65bd43dd6a252937a6a206caba52e260b30d097807149611ef079612fe3e33d6b95bd9102b8d4ca744", "https:\/\/panorama-api-ez.yuja.com", "https:\/\/cdn-panorama.yuja.com", "882e679218ca244502b0ea51ebdc8a3fc3571d8cb8fe7863f36943b68e7c2dff", "1", "1725065060514", "sha512-o2+N28TOkRDZkW6xPV6j4a8es3vMT3P5QbBLIoSf97dNfdYnbStO9jtvtHEzPe5EtmBKpdtxxxwZu34+SHml2Q=="); M.util.js_complete('filter_panorama/panorama');});;

require(['jquery', 'theme_boost/loader'], function($) {
    $('#lp_carousel').carousel();
});
;

require(['theme_boost/loader']);
require(['theme_boost/drawer'], function(mod) {
    mod.init();
});

require(['theme_catawesome/waiting'], function(Waiting) {
    Waiting.init();
});

require(['theme_catawesome/metismenu', 'jquery'], function(metisMenu, $) {
    $(".metismenu").metisMenu();
});

$(document).ready(function(){
    $("#topbutton").hide();
    $(function (scrollTop) {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#topbutton').fadeIn();
            } else {
                $('#topbutton').fadeOut();
            }
        });

        $('#topbutton').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
});

;

;
M.util.js_pending('core/notification'); require(['core/notification'], function(amd) {amd.init(1, []); M.util.js_complete('core/notification');});;
M.util.js_pending('core/log'); require(['core/log'], function(amd) {amd.setConfig({"level":"warn"}); M.util.js_complete('core/log');});;
M.util.js_pending('core/page_global'); require(['core/page_global'], function(amd) {amd.init(); M.util.js_complete('core/page_global');});;
M.util.js_pending('core/utility'); require(['core/utility'], function(amd) {M.util.js_complete('core/utility');});;
M.util.js_pending('core/storage_validation'); require(['core/storage_validation'], function(amd) {amd.init(null); M.util.js_complete('core/storage_validation');});
    M.util.js_complete("core/first");
});
//]]>
</script>
<script src="https://moodle.lse.ac.uk/lib/javascript.php/1728974251/theme/catawesome/javascript/theme.js"></script>
<script src="https://moodle.lse.ac.uk/theme/javascript.php/catawesome/1729253918/footer"></script>
<script>
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Last modified","name":"Name","error":"Error","info":"Information","yes":"Yes","no":"No","ok":"OK","cancel":"Cancel","confirm":"Confirm","areyousure":"Are you sure?","closebuttontitle":"Close","unknownerror":"Unknown error","file":"File","url":"URL","collapseall":"Collapse all","expandall":"Expand all"},"repository":{"type":"Type","size":"Size","invalidjson":"Invalid JSON string","nofilesattached":"No files attached","filepicker":"File picker","logout":"Logout","nofilesavailable":"No files available","norepositoriesavailable":"Sorry, none of your current repositories can return files in the required format.","fileexistsdialogheader":"File exists","fileexistsdialog_editor":"A file with that name has already been attached to the text you are editing.","fileexistsdialog_filemanager":"A file with that name has already been attached","renameto":"Rename to \"{$a}\"","referencesexist":"There are {$a} links to this file","select":"Select"},"admin":{"confirmdeletecomments":"You are about to delete comments, are you sure?","confirmation":"Confirmation"},"debug":{"debuginfo":"Debug info","line":"Line","stacktrace":"Stack trace"},"langconfig":{"labelsep":": "}};
//]]>
</script>
<script>
//<![CDATA[
(function() {Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"MathJax.Hub.Config({\r\n    config: [\"Accessible.js\", \"Safe.js\"],\r\n    errorSettings: { message: [\"!\"] },\r\n    skipStartupTypeset: true,\r\n    messageStyle: \"none\"\r\n});\r\n","lang":"en"});
});
Y.use("moodle-filter_glossary-autolinker",function() {M.filter_glossary.init_filter_autolinking({"courseid":0});
});
M.util.help_popups.setup(Y);
 M.util.js_pending('random67175c3403c392'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random67175c3403c392'); });
})();
//]]>
</script>

        </div>


        <div class="footer-content-debugging my-3">
            <div class="container-fluid">
                
            </div>
        </div>

        <a onclick="('')" id="topbutton" class="back-to-top" title="Go to top"><i class="fa fa-chevron-up "></i></a>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="loadingmodal" tabindex="-1" role="dialog" aria-labelledby="loadingmodallabel" aria-hidden="true" data-waiting="0">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h3>Fetching learning content...</h3>
                <div class="waitloader"></div>
            </div>
        </div>
    </div>
</div>

</body>
</html>