require.config({
	baseUrl:"js",
	paths:{
		"pageajax":"common/ajaxmodel",
		"globaljs":"common/main",
	}
})
require(["globaljs","pageajax"],function(){

})