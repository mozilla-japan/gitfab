require.config({
    paths: {
	"jQuery": "jquery.min",
	"github": "."
    },
    shim:{
  	"jQuery": {
	    exports: "jQuery"
	}
    }
});
require(["jQuery","common","project","projectEditor","gridlayout","slide","logger","lib/showdown-dev","lib/base64", "lib/diff_match_patch"], 
	function($,common,project,gridlayout,slide,logger,taglist,showdown,base64){
});
