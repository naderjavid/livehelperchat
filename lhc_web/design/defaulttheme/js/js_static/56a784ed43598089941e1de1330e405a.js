lhcAppControllers.controller("CannedMsgCtrl",["$scope","$http","$location","$rootScope","$log","$window",function(e,n,a,g,s,t){this.languages=[],this.dialects=[];var i=this;this.initLanguage=function(e){i.languages=void 0!==t["languageCanned"+e]?t["languageCanned"+e]:[]},this.move=function(e,n){index=i.languages.indexOf(e),newIndex=index+n,newIndex>-1&&newIndex<i.languages.length&&(removedElement=i.languages.splice(index,1)[0],i.languages.splice(newIndex,0,removedElement))},this.addLanguage=function(){i.languages.push({message:"",fallback_message:"",languages:[]}),setTimeout((function(){$("#canned-main-tabs li:eq("+i.languages.length+") a").tab("show")}),250)},this.toggleSelection=function(e,n){var a=e.languages.indexOf(n);a>-1?e.languages.splice(a,1):e.languages.push(n)},this.deleteLanguage=function(e){i.languages.splice(i.languages.indexOf(e),1),$("#canned-main-tabs a:first").tab("show")},this.moveLeftField=function(e){i.move(e,-1)},this.moveRightField=function(e){i.move(e,1)},this.getLanguagesChecked=function(e){var n=[];return e.languages.forEach((function(e){2==e.length&&n.push(e)})),n.length>0?n.join(", "):e.languages.join(", ")},this.isSelectedDialect=function(e,n){void 0===e.dialect&&(e.dialect=[]);var a=!0;n.items.forEach((function(n){(-1===e.languages.indexOf(n.lang_code)||""!=n.short_code&&-1===e.languages.indexOf(n.short_code))&&(a=!1)})),e.dialect[n.lang.id]=a},this.changeSelection=function(e,n){!1===e.dialect[n.lang.id]?n.items.forEach((function(n){""!=n.short_code&&-1===e.languages.indexOf(n.short_code)&&e.languages.push(n.short_code),-1===e.languages.indexOf(n.lang_code)&&e.languages.push(n.lang_code)})):n.items.forEach((function(n){var a=null;""!=n.short_code&&(a=e.languages.indexOf(n.short_code))>-1&&e.languages.splice(a,1),(a=e.languages.indexOf(n.lang_code))>-1&&e.languages.splice(a,1)}))}}]),lhcAppControllers.controller("AutoResponderCtrl",["$scope","$http","$location","$rootScope","$log",function(e,n,a,g,s){this.languages=[],this.dialects=[],this.ignoreLanguages={languages:[]};var t=this;this.move=function(e,n){index=t.languages.indexOf(e),newIndex=index+n,newIndex>-1&&newIndex<t.languages.length&&(removedElement=t.languages.splice(index,1)[0],t.languages.splice(newIndex,0,removedElement))},this.addLanguage=function(){t.languages.push({message:"",fallback_message:"",languages:[]}),setTimeout((function(){$("#autoresponder-tabs li:eq("+(t.languages.length+3)+") a").tab("show")}),250)},this.toggleSelection=function(e,n){var a=e.languages.indexOf(n);a>-1?e.languages.splice(a,1):e.languages.push(n)},this.deleteLanguage=function(e){t.languages.splice(t.languages.indexOf(e),1),$("#autoresponder-tabs a:first").tab("show")},this.moveLeftField=function(e){t.move(e,-1)},this.moveRightField=function(e){t.move(e,1)},this.getLanguagesChecked=function(e){var n=[];return e.languages.forEach((function(e){2==e.length&&n.push(e)})),n.length>0?n.join(", "):e.languages.join(", ")},this.isSelectedDialect=function(e,n){void 0===e.dialect&&(e.dialect=[]);var a=!0;n.items.forEach((function(n){(-1===e.languages.indexOf(n.lang_code)||""!=n.short_code&&-1===e.languages.indexOf(n.short_code))&&(a=!1)})),e.dialect[n.lang.id]=a},this.changeSelection=function(e,n){!1===e.dialect[n.lang.id]?n.items.forEach((function(n){""!=n.short_code&&-1===e.languages.indexOf(n.short_code)&&e.languages.push(n.short_code),-1===e.languages.indexOf(n.lang_code)&&e.languages.push(n.lang_code)})):n.items.forEach((function(n){var a=null;""!=n.short_code&&(a=e.languages.indexOf(n.short_code))>-1&&e.languages.splice(a,1),(a=e.languages.indexOf(n.lang_code))>-1&&e.languages.splice(a,1)}))}}]);
//# sourceMappingURL=56a784ed43598089941e1de1330e405a.js.map
