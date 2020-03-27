import Vue from 'vue'

/**
 * This function is same as PHP's nl2br() with default parameters.
 *
 * @param {string} str Input text
 * @param {boolean} replaceMode Use replace instead of insert
 * @param {boolean} isXhtml Use XHTML
 * @return {string} Filtered text
 */
function nl2br (str, replaceMode, isXhtml) {

  var breakTag = (isXhtml) ? '<br />' : '<br>'
  var replaceStr = (replaceMode) ? '$1'+ breakTag : '$1'+ breakTag +'$2'
  return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, replaceStr)
}

/**
 * This function inverses text from PHP's nl2br() with default parameters.
 *
 * @param {string} str Input text
 * @param {boolean} replaceMode Use replace instead of insert
 * @return {string} Filtered text
 */
function br2nl (str, replaceMode) {

  var replaceStr = (replaceMode) ? "\n" : ''
  // Includes <br>, <BR>, <br />, </br>
  return str.replace(/<\s*\/?br\s*[\/]?>/gi, replaceStr)
}

Vue.filter('nl2br', nl2br)
Vue.filter('br2nl', br2nl)

Vue.prototype.$nl2br = nl2br
Vue.prototype.$br2nl = br2nl
