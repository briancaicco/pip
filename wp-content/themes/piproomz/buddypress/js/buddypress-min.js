function bp_init_activity(){jq.cookie("bp-activity-oldestpage",1,{path:"/",secure:"https:"===window.location.protocol}),void 0!==jq.cookie("bp-activity-filter")&&jq("#activity-filter-select").length&&jq('#activity-filter-select select option[value="'+jq.cookie("bp-activity-filter")+'"]').prop("selected",!0),void 0!==jq.cookie("bp-activity-scope")&&jq(".activity-type-tabs").length&&(jq(".activity-type-tabs li").each(function(){jq(this).removeClass("selected")}),jq("#activity-"+jq.cookie("bp-activity-scope")+", .item-list-tabs li.current").addClass("selected"))}function bp_init_objects(e){jq(e).each(function(t){void 0!==jq.cookie("bp-"+e[t]+"-filter")&&jq("#"+e[t]+"-order-select select").length&&jq("#"+e[t]+'-order-select select option[value="'+jq.cookie("bp-"+e[t]+"-filter")+'"]').prop("selected",!0),void 0!==jq.cookie("bp-"+e[t]+"-scope")&&jq("div."+e[t]).length&&(jq(".item-list-tabs li").each(function(){jq(this).removeClass("selected")}),jq("#"+e[t]+"-"+jq.cookie("bp-"+e[t]+"-scope")+", #object-nav li.current").addClass("selected"))})}function bp_filter_request(e,t,i,a,s,n,o,r,l){if("activity"===e)return!1;null===i&&(i="all"),jq.cookie("bp-"+e+"-scope",i,{path:"/",secure:"https:"===window.location.protocol}),jq.cookie("bp-"+e+"-filter",t,{path:"/",secure:"https:"===window.location.protocol}),jq.cookie("bp-"+e+"-extras",o,{path:"/",secure:"https:"===window.location.protocol}),jq(".item-list-tabs li").each(function(){jq(this).removeClass("selected")}),jq("#"+e+"-"+i+", #object-nav li.current").addClass("selected"),jq(".item-list-tabs li.selected").addClass("loading"),jq('.item-list-tabs select option[value="'+t+'"]').prop("selected",!0),"friends"!==e&&"group_members"!==e||(e="members"),bp_ajax_request&&bp_ajax_request.abort(),bp_ajax_request=jq.post(ajaxurl,{action:e+"_filter",cookie:bp_get_cookies(),object:e,filter:t,search_terms:s,scope:i,page:n,extras:o,template:l},function(e){if("pag-bottom"===r&&jq("#subnav").length){var t=jq("#subnav").parent();jq("html,body").animate({scrollTop:t.offset().top},"slow",function(){jq(a).fadeOut(100,function(){jq(this).html(e),jq(this).fadeIn(100)})})}else jq(a).fadeOut(100,function(){jq(this).html(e),jq(this).fadeIn(100)});jq(".item-list-tabs li.selected").removeClass("loading")})}function bp_activity_request(e,t){null!==e&&jq.cookie("bp-activity-scope",e,{path:"/",secure:"https:"===window.location.protocol}),null!==t&&jq.cookie("bp-activity-filter",t,{path:"/",secure:"https:"===window.location.protocol}),jq.cookie("bp-activity-oldestpage",1,{path:"/",secure:"https:"===window.location.protocol}),jq(".item-list-tabs li").each(function(){jq(this).removeClass("selected loading")}),jq("#activity-"+e+", .item-list-tabs li.current").addClass("selected"),jq("#object-nav.item-list-tabs li.selected, div.activity-type-tabs li.selected").addClass("loading"),jq('#activity-filter-select select option[value="'+t+'"]').prop("selected",!0),jq(".widget_bp_activity_widget h2 span.ajax-loader").show(),bp_ajax_request&&bp_ajax_request.abort(),bp_ajax_request=jq.post(ajaxurl,{action:"activity_widget_filter",cookie:bp_get_cookies(),_wpnonce_activity_filter:jq("#_wpnonce_activity_filter").val(),scope:e,filter:t},function(e){jq(".widget_bp_activity_widget h2 span.ajax-loader").hide(),jq("div.activity").fadeOut(100,function(){jq(this).html(e.contents),jq(this).fadeIn(100),bp_legacy_theme_hide_comments()}),void 0!==e.feed_url&&jq(".directory #subnav li.feed a, .home-page #subnav li.feed a").attr("href",e.feed_url),jq(".item-list-tabs li.selected").removeClass("loading")},"json")}function bp_legacy_theme_hide_comments(){var e=jq("div.activity-comments"),t,i,a;if(!e.length)return!1;e.each(function(){jq(this).children("ul").children("li").length<5||(comments_div=jq(this),t=comments_div.parents("#activity-stream > li"),i=jq(this).children("ul").children("li"),a=" ",jq("#"+t.attr("id")+" li").length&&(a=jq("#"+t.attr("id")+" li").length),i.each(function(e){e<i.length-5&&(jq(this).hide(),e||jq(this).before('<li class="show-all"><a href="#'+t.attr("id")+'/show-all/">'+BP_DTheme.show_x_comments.replace("%d",a)+"</a></li>"))}))})}function checkAll(){var e=document.getElementsByTagName("input"),t;for(t=0;t<e.length;t++)"checkbox"===e[t].type&&(""===$("check_all").checked?e[t].checked="":e[t].checked="checked")}function clear(e){if(e=document.getElementById(e)){var t=e.getElementsByTagName("INPUT"),i=e.getElementsByTagName("OPTION"),a=0;if(t)for(a=0;a<t.length;a++)t[a].checked="";if(i)for(a=0;a<i.length;a++)i[a].selected=!1}}function bp_get_cookies(){var e=document.cookie.split(";"),t={},i="bp-",a,s,n,o,r;for(a=0;a<e.length;a++)s=e[a],n=s.indexOf("="),o=jq.trim(unescape(s.slice(0,n))),r=unescape(s.slice(n+1)),0===o.indexOf("bp-")&&(t[o]=r);return encodeURIComponent(jq.param(t))}function bp_get_query_var(e,t){var i={};return t=void 0===t?location.search.substr(1).split("&"):t.split("?")[1].split("&"),t.forEach(function(e){i[e.split("=")[0]]=e.split("=")[1]&&decodeURIComponent(e.split("=")[1])}),!(!i.hasOwnProperty(e)||null==i[e])&&i[e]}var jq=jQuery,bp_ajax_request=null,newest_activities="",activity_last_recorded=0;jq(document).ready(function(){"-1"===window.location.search.indexOf("new")&&jq("div.forums").length?jq("#new-topic-post").hide():jq("#new-topic-post").show(),bp_init_activity();var e=["members","groups","blogs","forums","group_members"],t=jq("#whats-new");if(bp_init_objects(e),t.length&&bp_get_querystring("r")){var i=t.val();jq("#whats-new-options").slideDown(),t.animate({height:"3.8em"}),jq.scrollTo(t,500,{offset:-125,easing:"swing"}),t.val("").focus().val(i)}else jq("#whats-new-options").hide();if(t.focus(function(){jq("#whats-new-options").slideDown(),jq(this).animate({height:"3.8em"}),jq("#aw-whats-new-submit").prop("disabled",!1),jq(this).parent().addClass("active"),jq("#whats-new-content").addClass("active");var e=jq("form#whats-new-form"),t=jq("#activity-all");e.hasClass("submitted")&&e.removeClass("submitted"),t.length&&(t.hasClass("selected")?"-1"!==jq("#activity-filter-select select").val()&&(jq("#activity-filter-select select").val("-1"),jq("#activity-filter-select select").trigger("change")):(jq("#activity-filter-select select").val("-1"),t.children("a").trigger("click")))}),jq("#whats-new-form").on("focusout",function(e){var i=jq(this);setTimeout(function(){if(!i.find(":hover").length){if(""!==t.val())return;t.animate({height:"2.2em"}),jq("#whats-new-options").slideUp(),jq("#aw-whats-new-submit").prop("disabled",!0),jq("#whats-new-content").removeClass("active"),t.parent().removeClass("active")}},0)}),jq("#aw-whats-new-submit").on("click",function(){var e=0,t=jq(this),i=t.closest("form#whats-new-form"),a={},s;return jq.each(i.serializeArray(),function(e,t){"_"!==t.name.substr(0,1)&&"whats-new"!==t.name.substr(0,9)&&(a[t.name]?jq.isArray(a[t.name])?a[t.name].push(t.value):a[t.name]=new Array(a[t.name],t.value):a[t.name]=t.value)}),i.find("*").each(function(){(jq.nodeName(this,"textarea")||jq.nodeName(this,"input"))&&jq(this).prop("disabled",!0)}),jq("div.error").remove(),t.addClass("loading"),t.prop("disabled",!0),i.addClass("submitted"),object="",item_id=jq("#whats-new-post-in").val(),content=jq("#whats-new").val(),firstrow=jq("#buddypress ul.activity-list li").first(),activity_row=firstrow,timestamp=null,firstrow.length&&(activity_row.hasClass("load-newest")&&(activity_row=firstrow.next()),timestamp=activity_row.prop("class").match(/date-recorded-([0-9]+)/)),timestamp&&(e=timestamp[1]),item_id>0&&(object=jq("#whats-new-post-object").val()),s=jq.extend({action:"post_update",cookie:bp_get_cookies(),_wpnonce_post_update:jq("#_wpnonce_post_update").val(),content:content,object:object,item_id:item_id,since:e,_bp_as_nonce:jq("#_bp_as_nonce").val()||""},a),jq.post(ajaxurl,s,function(t){if(i.find("*").each(function(){(jq.nodeName(this,"textarea")||jq.nodeName(this,"input"))&&jq(this).prop("disabled",!1)}),t[0]+t[1]==="-1")i.prepend(t.substr(2,t.length)),jq("#"+i.attr("id")+" div.error").hide().fadeIn(200);else{if(0===jq("ul.activity-list").length&&(jq("div.error").slideUp(100).remove(),jq("#message").slideUp(100).remove(),jq("div.activity").append('<ul id="activity-stream" class="activity-list item-list">')),firstrow.hasClass("load-newest")&&firstrow.remove(),jq("#activity-stream").prepend(t),e||jq("#activity-stream li:first").addClass("new-update just-posted"),0!==jq("#latest-update").length){var a=jq("#activity-stream li.new-update .activity-content .activity-inner p").html(),s=jq("#activity-stream li.new-update .activity-content .activity-header p a.view").attr("href"),n=jq("#activity-stream li.new-update .activity-content .activity-inner p").text(),o="";""!==n&&(o=a+" "),o+='<a href="'+s+'" rel="nofollow">'+BP_DTheme.view+"</a>",jq("#latest-update").slideUp(300,function(){jq("#latest-update").html(o),jq("#latest-update").slideDown(300)})}jq("li.new-update").hide().slideDown(300),jq("li.new-update").removeClass("new-update"),jq("#whats-new").val(""),i.get(0).reset(),newest_activities="",activity_last_recorded=0}jq("#whats-new-options").slideUp(),jq("#whats-new-form textarea").animate({height:"2.2em"}),jq("#aw-whats-new-submit").prop("disabled",!0).removeClass("loading"),jq("#whats-new-content").removeClass("active")}),!1}),jq("div.activity-type-tabs").on("click",function(e){var t=jq(e.target).parent(),i,a;if("STRONG"===e.target.nodeName||"SPAN"===e.target.nodeName)t=t.parent();else if("A"!==e.target.nodeName)return!1;return jq.cookie("bp-activity-oldestpage",1,{path:"/",secure:"https:"===window.location.protocol}),i=t.attr("id").substr(9,t.attr("id").length),a=jq("#activity-filter-select select").val(),"mentions"===i&&jq("#"+t.attr("id")+" a strong").remove(),bp_activity_request(i,a),!1}),jq("#activity-filter-select select").change(function(){var e=jq("div.activity-type-tabs li.selected"),t=jq(this).val(),i;return i=e.length?e.attr("id").substr(9,e.attr("id").length):null,bp_activity_request(i,t),!1}),jq("div.activity").on("click",function(e){var t=jq(e.target),i,a,s,n,o,r,l,c,d,p;return t.hasClass("fav")||t.hasClass("unfav")?!t.hasClass("loading")&&(i=t.hasClass("fav")?"fav":"unfav",a=t.closest(".activity-item"),s=a.attr("id").substr(9,a.attr("id").length),l=bp_get_query_var("_wpnonce",t.attr("href")),t.addClass("loading"),jq.post(ajaxurl,{action:"activity_mark_"+i,cookie:bp_get_cookies(),id:s,nonce:l},function(e){t.removeClass("loading"),t.fadeOut(200,function(){jq(this).html(e),jq(this).attr("title","fav"===i?BP_DTheme.remove_fav:BP_DTheme.mark_as_fav),jq(this).fadeIn(200)}),"fav"===i?(jq(".item-list-tabs #activity-favs-personal-li").length||(jq(".item-list-tabs #activity-favorites").length||jq(".item-list-tabs ul #activity-mentions").before('<li id="activity-favorites"><a href="#">'+BP_DTheme.my_favs+" <span>0</span></a></li>"),jq(".item-list-tabs ul #activity-favorites span").html(Number(jq(".item-list-tabs ul #activity-favorites span").html())+1)),t.removeClass("fav"),t.addClass("unfav")):(t.removeClass("unfav"),t.addClass("fav"),jq(".item-list-tabs ul #activity-favorites span").html(Number(jq(".item-list-tabs ul #activity-favorites span").html())-1),Number(jq(".item-list-tabs ul #activity-favorites span").html())||(jq(".item-list-tabs ul #activity-favorites").hasClass("selected")&&bp_activity_request(null,null),jq(".item-list-tabs ul #activity-favorites").remove())),"activity-favorites"===jq(".item-list-tabs li.selected").attr("id")&&t.closest(".activity-item").slideUp(100)}),!1):t.hasClass("delete-activity")?(n=t.parents("div.activity ul li"),o=n.attr("id").substr(9,n.attr("id").length),r=t.attr("href"),l=r.split("_wpnonce="),c=n.prop("class").match(/date-recorded-([0-9]+)/),l=l[1],t.addClass("loading"),jq.post(ajaxurl,{action:"delete_activity",cookie:bp_get_cookies(),id:o,_wpnonce:l},function(e){e[0]+e[1]==="-1"?(n.prepend(e.substr(2,e.length)),n.children("#message").hide().fadeIn(300)):(n.slideUp(300),c&&activity_last_recorded===c[1]&&(newest_activities="",activity_last_recorded=0))}),!1):t.hasClass("spam-activity")?(n=t.parents("div.activity ul li"),c=n.prop("class").match(/date-recorded-([0-9]+)/),t.addClass("loading"),jq.post(ajaxurl,{action:"bp_spam_activity",cookie:encodeURIComponent(document.cookie),id:n.attr("id").substr(9,n.attr("id").length),_wpnonce:t.attr("href").split("_wpnonce=")[1]},function(e){e[0]+e[1]==="-1"?(n.prepend(e.substr(2,e.length)),n.children("#message").hide().fadeIn(300)):(n.slideUp(300),c&&activity_last_recorded===c[1]&&(newest_activities="",activity_last_recorded=0))}),!1):t.parent().hasClass("load-more")?(bp_ajax_request&&bp_ajax_request.abort(),jq("#buddypress li.load-more").addClass("loading"),null===jq.cookie("bp-activity-oldestpage")&&jq.cookie("bp-activity-oldestpage",1,{path:"/",secure:"https:"===window.location.protocol}),d=1*jq.cookie("bp-activity-oldestpage")+1,p=[],jq(".activity-list li.just-posted").each(function(){p.push(jq(this).attr("id").replace("activity-",""))}),load_more_args={action:"activity_get_older_updates",cookie:bp_get_cookies(),page:d,exclude_just_posted:p.join(",")},load_more_search=bp_get_querystring("s"),load_more_search&&(load_more_args.search_terms=load_more_search),bp_ajax_request=jq.post(ajaxurl,load_more_args,function(e){jq("#buddypress li.load-more").removeClass("loading"),jq.cookie("bp-activity-oldestpage",d,{path:"/",secure:"https:"===window.location.protocol}),jq("#buddypress ul.activity-list").append(e.contents),t.parent().hide()},"json"),!1):void(t.parent().hasClass("load-newest")&&(e.preventDefault(),t.parent().hide(),activity_html=jq.parseHTML(newest_activities),jq.each(activity_html,function(e,t){"LI"===t.nodeName&&jq(t).hasClass("just-posted")&&jq("#"+jq(t).attr("id")).length&&jq("#"+jq(t).attr("id")).remove()}),jq("#buddypress ul.activity-list").prepend(newest_activities),newest_activities=""))}),jq("div.activity").on("click",".activity-read-more a",function(e){var t=jq(e.target),i=t.parent().attr("id").split("-"),a=i[3],s=i[0],n,o;return n="acomment"===s?"acomment-content":"activity-inner",o=jq("#"+s+"-"+a+" ."+n+":first"),jq(t).addClass("loading"),jq.post(ajaxurl,{action:"get_single_activity_content",activity_id:a},function(e){jq(o).slideUp(300).html(e).slideDown(300)}),!1}),jq("form.ac-form").hide(),jq(".activity-comments").length&&bp_legacy_theme_hide_comments(),jq("div.activity").on("click",function(e){var t=jq(e.target),i,a,s,n,o,r,l,c,d,p,u,h,m,j,v,q,_;return t.hasClass("acomment-reply")||t.parent().hasClass("acomment-reply")?(t.parent().hasClass("acomment-reply")&&(t=t.parent()),i=t.attr("id"),a=i.split("-"),s=a[2],n=t.attr("href").substr(10,t.attr("href").length),o=jq("#ac-form-"+s),o.css("display","none"),o.removeClass("root"),jq(".ac-form").hide(),o.children("div").each(function(){jq(this).hasClass("error")&&jq(this).hide()}),"comment"!==a[1]?jq("#acomment-"+n).append(o):jq("#activity-"+s+" .activity-comments").append(o),o.parent().hasClass("activity-comments")&&o.addClass("root"),o.slideDown(200),jq.scrollTo(o,500,{offset:-100,easing:"swing"}),jq("#ac-form-"+a[2]+" textarea").focus(),!1):"ac_form_submit"===t.attr("name")?(o=t.parents("form"),r=o.parent(),l=o.attr("id").split("-"),r.hasClass("activity-comments")?d=l[2]:(c=r.attr("id").split("-"),d=c[1]),content=jq("#"+o.attr("id")+" textarea"),jq("#"+o.attr("id")+" div.error").hide(),t.addClass("loading").prop("disabled",!0),content.addClass("loading").prop("disabled",!0),u={action:"new_activity_comment",cookie:bp_get_cookies(),_wpnonce_new_activity_comment:jq("#_wpnonce_new_activity_comment").val(),comment_id:d,form_id:l[2],content:content.val()},h=jq("#_bp_as_nonce_"+d).val(),h&&(u["_bp_as_nonce_"+d]=h),jq.post(ajaxurl,u,function(e){if(t.removeClass("loading"),content.removeClass("loading"),e[0]+e[1]==="-1")o.append(jq(e.substr(2,e.length)).hide().fadeIn(200));else{var i=o.parent();o.fadeOut(200,function(){var t=jq.trim(e);i.children("ul").append(jq(t).hide().fadeIn(200)),o.children("textarea").val(""),i.parent().addClass("has-comments")}),jq("#"+o.attr("id")+" textarea").val(""),j=Number(jq("#activity-"+l[2]+" a.acomment-reply span").html())+1,jq("#activity-"+l[2]+" a.acomment-reply span").html(j),m=i.parents(".activity-comments").find(".show-all a"),m&&m.html(BP_DTheme.show_x_comments.replace("%d",j))}jq(t).prop("disabled",!1),jq(content).prop("disabled",!1)}),!1):t.hasClass("acomment-delete")?(v=t.attr("href"),q=t.parent().parent(),o=q.parents("div.activity-comments").children("form"),_=v.split("_wpnonce="),_=_[1],d=v.split("cid="),d=d[1].split("&"),d=d[0],t.addClass("loading"),jq(".activity-comments ul .error").remove(),q.parents(".activity-comments").append(o),jq.post(ajaxurl,{action:"delete_activity_comment",cookie:bp_get_cookies(),_wpnonce:_,id:d},function(e){if(e[0]+e[1]==="-1")q.prepend(jq(e.substr(2,e.length)).hide().fadeIn(200));else{var t=jq("#"+q.attr("id")+" ul").children("li"),i=0,a,s,n;jq(t).each(function(){jq(this).is(":hidden")||i++}),q.fadeOut(200,function(){q.remove()}),a=jq("#"+q.parents("#activity-stream > li").attr("id")+" a.acomment-reply span"),s=a.html()-(1+i),a.html(s),n=q.parents(".activity-comments").find(".show-all a"),n&&n.html(BP_DTheme.show_x_comments.replace("%d",s)),0===s&&jq(q.parents("#activity-stream > li")).removeClass("has-comments")}}),!1):t.hasClass("spam-activity-comment")?(v=t.attr("href"),q=t.parent().parent(),t.addClass("loading"),jq(".activity-comments ul div.error").remove(),q.parents(".activity-comments").append(q.parents(".activity-comments").children("form")),jq.post(ajaxurl,{action:"bp_spam_activity_comment",cookie:encodeURIComponent(document.cookie),_wpnonce:v.split("_wpnonce=")[1],id:v.split("cid=")[1].split("&")[0]},function(e){if(e[0]+e[1]==="-1")q.prepend(jq(e.substr(2,e.length)).hide().fadeIn(200));else{var t=jq("#"+q.attr("id")+" ul").children("li"),i=0,a;jq(t).each(function(){jq(this).is(":hidden")||i++}),q.fadeOut(200),a=q.parents("#activity-stream > li"),jq("#"+a.attr("id")+" a.acomment-reply span").html(jq("#"+a.attr("id")+" a.acomment-reply span").html()-(1+i))}}),!1):t.parent().hasClass("show-all")?(t.parent().addClass("loading"),setTimeout(function(){t.parent().parent().children("li").fadeIn(200,function(){t.parent().remove()})},600),!1):t.hasClass("ac-reply-cancel")?(jq(t).closest(".ac-form").slideUp(200),!1):void 0}),jq(document).keydown(function(e){if(e=e||window.event,e.target?element=e.target:e.srcElement&&(element=e.srcElement),3===element.nodeType&&(element=element.parentNode),!0!==e.ctrlKey&&!0!==e.altKey&&!0!==e.metaKey){27===(e.keyCode?e.keyCode:e.which)&&"TEXTAREA"===element.tagName&&jq(element).hasClass("ac-input")&&jq(element).parent().parent().parent().slideUp(200)}}),jq(".dir-search, .groups-members-search").on("click",function(e){if(!jq(this).hasClass("no-ajax")){var t=jq(e.target),i,a,s,n;return"submit"===t.attr("type")?(i=jq(".item-list-tabs li.selected").attr("id").split("-"),a=i[0],s=null,n=t.parent().find("#"+a+"_search").val(),"groups-members-search"===e.currentTarget.className&&(a="group_members",s="groups/single/members"),bp_filter_request(a,jq.cookie("bp-"+a+"-filter"),jq.cookie("bp-"+a+"-scope"),"div."+a,n,1,jq.cookie("bp-"+a+"-extras"),null,s),!1):void 0}}),jq("div.item-list-tabs").on("click",function(e){if(jq("body").hasClass("type")&&jq("body").hasClass("directory")&&jq(this).addClass("no-ajax"),!jq(this).hasClass("no-ajax")&&!jq(e.target).hasClass("no-ajax")){var t="SPAN"===e.target.nodeName?e.target.parentNode:e.target,i=jq(t).parent(),a,s,n,o,r;return"LI"!==i[0].nodeName||i.hasClass("last")?void 0:(a=i.attr("id").split("-"),"activity"!==(s=a[0])&&(n=a[1],o=jq("#"+s+"-order-select select").val(),r=jq("#"+s+"_search").val(),bp_filter_request(s,o,n,"div."+s,r,1,jq.cookie("bp-"+s+"-extras")),!1))}}),jq("li.filter select").change(function(){var e,t,i,a,s,n,o,r;return e=jq(jq(".item-list-tabs li.selected").length?".item-list-tabs li.selected":this),t=e.attr("id").split("-"),i=t[0],a=t[1],s=jq(this).val(),n=!1,o=null,jq(".dir-search input").length&&(n=jq(".dir-search input").val()),r=jq(".groups-members-search input"),r.length&&(n=r.val(),i="members",a="groups"),"members"===i&&"groups"===a&&(i="group_members",o="groups/single/members"),"friends"===i&&(i="members"),bp_filter_request(i,s,a,"div."+i,n,1,jq.cookie("bp-"+i+"-extras"),null,o),!1}),jq("#buddypress").on("click",function(e){var t=jq(e.target),i,a,s,n,o,r,l,c,d;return!!t.hasClass("button")||(t.parent().parent().hasClass("pagination")&&!t.parent().parent().hasClass("no-ajax")?!t.hasClass("dots")&&!t.hasClass("current")&&(i=jq(jq(".item-list-tabs li.selected").length?".item-list-tabs li.selected":"li.filter select"),a=i.attr("id").split("-"),s=a[0],n=!1,o=jq(t).closest(".pagination-links").attr("id"),r=null,jq("div.dir-search input").length&&(n=jq(".dir-search input"),n=!n.val()&&bp_get_querystring(n.attr("name"))?jq(".dir-search input").prop("placeholder"):n.val()),l=jq(t).hasClass("next")||jq(t).hasClass("prev")?jq(".pagination span.current").html():jq(t).html(),l=Number(l.replace(/\D/g,"")),jq(t).hasClass("next")?l++:jq(t).hasClass("prev")&&l--,c=jq(".groups-members-search input"),c.length&&(n=c.val(),s="members"),"members"===s&&"groups"===a[1]&&(s="group_members",r="groups/single/members"),"admin"===s&&jq("body").hasClass("membership-requests")&&(s="requests"),d=-1!==o.indexOf("pag-bottom")?"pag-bottom":null,bp_filter_request(s,jq.cookie("bp-"+s+"-filter"),jq.cookie("bp-"+s+"-scope"),"div."+s,n,l,jq.cookie("bp-"+s+"-extras"),d,r),!1):void 0)}),jq("a.show-hide-new").on("click",function(){return!!jq("#new-topic-post").length&&(jq("#new-topic-post").is(":visible")?jq("#new-topic-post").slideUp(200):jq("#new-topic-post").slideDown(200,function(){jq("#topic_title").focus()}),!1)}),jq("#submit_topic_cancel").on("click",function(){return!!jq("#new-topic-post").length&&(jq("#new-topic-post").slideUp(200),!1)}),jq("#forum-directory-tags a").on("click",function(){return bp_filter_request("forums","tags",jq.cookie("bp-forums-scope"),"div.forums",jq(this).html().replace(/&nbsp;/g,"-"),1,jq.cookie("bp-forums-extras")),!1}),jq("#send-invite-form").on("click","#invite-list input",function(){var e=jq("#send-invite-form > .invite").length,t,i;jq(".ajax-loader").toggle(),e&&jq(this).parents("ul").find("input").prop("disabled",!0),t=jq(this).val(),i=!0===jq(this).prop("checked")?"invite":"uninvite",e||jq(".item-list-tabs li.selected").addClass("loading"),jq.post(ajaxurl,{action:"groups_invite_user",friend_action:i,cookie:bp_get_cookies(),_wpnonce:jq("#_wpnonce_invite_uninvite_user").val(),friend_id:t,group_id:jq("#group_id").val()},function(a){jq("#message")&&jq("#message").hide(),e?bp_filter_request("invite","bp-invite-filter","bp-invite-scope","div.invite",!1,1,"","",""):(jq(".ajax-loader").toggle(),"invite"===i?jq("#friend-list").append(a):"uninvite"===i&&jq("#friend-list li#uid-"+t).remove(),jq(".item-list-tabs li.selected").removeClass("loading"))})}),jq("#send-invite-form").on("click","a.remove",function(){var e=jq("#send-invite-form > .invite").length,t=jq(this).attr("id");return jq(".ajax-loader").toggle(),t=t.split("-"),t=t[1],jq.post(ajaxurl,{action:"groups_invite_user",friend_action:"uninvite",cookie:bp_get_cookies(),_wpnonce:jq("#_wpnonce_invite_uninvite_user").val(),friend_id:t,group_id:jq("#group_id").val()},function(i){e?bp_filter_request("invite","bp-invite-filter","bp-invite-scope","div.invite",!1,1,"","",""):(jq(".ajax-loader").toggle(),jq("#friend-list #uid-"+t).remove(),jq("#invite-list #f-"+t).prop("checked",!1))}),!1}),jq(".visibility-toggle-link").on("click",function(e){e.preventDefault(),jq(this).attr("aria-expanded","true").parent().hide().addClass("field-visibility-settings-hide").siblings(".field-visibility-settings").show().addClass("field-visibility-settings-open")}),jq(".field-visibility-settings-close").on("click",function(e){e.preventDefault(),jq(".visibility-toggle-link").attr("aria-expanded","false");var t=jq(this).parent(),i=t.find("input:checked").parent().text();t.hide().removeClass("field-visibility-settings-open").siblings(".field-visibility-settings-toggle").children(".current-visibility-level").text(i).end().show().removeClass("field-visibility-settings-hide")}),jq("#profile-edit-form input:not(:submit), #profile-edit-form textarea, #profile-edit-form select, #signup_form input:not(:submit), #signup_form textarea, #signup_form select").change(function(){var e=!0;jq("#profile-edit-form input:submit, #signup_form input:submit").on("click",function(){e=!1}),window.onbeforeunload=function(t){if(e)return BP_DTheme.unsaved_changes}}),jq("#friend-list a.accept, #friend-list a.reject").on("click",function(){var e=jq(this),t=jq(this).parents("#friend-list li"),i=jq(this).parents("li div.action"),a=t.attr("id").substr(11,t.attr("id").length),s=e.attr("href"),n=s.split("_wpnonce=")[1],o;return!jq(this).hasClass("accepted")&&!jq(this).hasClass("rejected")&&(jq(this).hasClass("accept")?(o="accept_friendship",i.children("a.reject").css("visibility","hidden")):(o="reject_friendship",i.children("a.accept").css("visibility","hidden")),e.addClass("loading"),jq.post(ajaxurl,{action:o,cookie:bp_get_cookies(),id:a,_wpnonce:n},function(a){e.removeClass("loading"),a[0]+a[1]==="-1"?(t.prepend(a.substr(2,a.length)),t.children("#message").hide().fadeIn(200)):e.fadeOut(100,function(){jq(this).hasClass("accept")?(i.children("a.reject").hide(),jq(this).html(BP_DTheme.accepted).contents().unwrap()):(i.children("a.accept").hide(),jq(this).html(BP_DTheme.rejected).contents().unwrap())})}),!1)}),jq("#members-dir-list, #members-group-list, #item-header").on("click",".friendship-button a",function(){jq(this).parent().addClass("loading");var e=jq(this).attr("id"),t=jq(this).attr("href"),i=jq(this);return e=e.split("-"),e=e[1],t=t.split("?_wpnonce="),t=t[1].split("&"),t=t[0],jq.post(ajaxurl,{action:"addremove_friend",cookie:bp_get_cookies(),fid:e,_wpnonce:t},function(e){var t=i.attr("rel");parentdiv=i.parent(),"add"===t?jq(parentdiv).fadeOut(200,function(){parentdiv.removeClass("add_friend"),parentdiv.removeClass("loading"),parentdiv.addClass("pending_friend"),parentdiv.fadeIn(200).html(e)}):"remove"===t&&jq(parentdiv).fadeOut(200,function(){parentdiv.removeClass("remove_friend"),parentdiv.removeClass("loading"),parentdiv.addClass("add"),parentdiv.fadeIn(200).html(e)})}),!1}),jq("#buddypress").on("click",".group-button .leave-group",function(){if(!1===confirm(BP_DTheme.leave_group_confirm))return!1}),jq("#groups-dir-list").on("click",".group-button a",function(){var e=jq(this).parent().attr("id"),t=jq(this).attr("href"),i=jq(this);return e=e.split("-"),e=e[1],t=t.split("?_wpnonce="),t=t[1].split("&"),t=t[0],(!i.hasClass("leave-group")||!1!==confirm(BP_DTheme.leave_group_confirm))&&(jq.post(ajaxurl,{action:"joinleave_group",cookie:bp_get_cookies(),gid:e,_wpnonce:t},function(e){var t=i.parent();jq("body.directory").length?jq(t).fadeOut(200,function(){t.fadeIn(200).html(e);var a=jq("#groups-personal span"),s=1;i.hasClass("leave-group")?(t.hasClass("hidden")&&t.closest("li").slideUp(200),s=0):i.hasClass("request-membership")&&(s=!1),a.length&&!1!==s&&(s?a.text(1+(a.text()>>0)):a.text((a.text()>>0)-1))}):window.location.reload()}),!1)}),jq("#groups-list li.hidden").each(function(){"none"===jq(this).css("display")&&jq(this).css("cssText","display: list-item !important")}),jq("#buddypress").on("click",".pending",function(){return!1}),jq("body").hasClass("register")){var a=jq("#signup_with_blog");a.prop("checked")||jq("#blog-details").toggle(),a.change(function(){jq("#blog-details").toggle()})}jq(".message-search").on("click",function(e){if(!jq(this).hasClass("no-ajax")){var t=jq(e.target),i;return"submit"===t.attr("type")||"button"===t.attr("type")?(i="messages",bp_filter_request(i,jq.cookie("bp-"+i+"-filter"),jq.cookie("bp-"+i+"-scope"),"div."+i,jq("#messages_search").val(),1,jq.cookie("bp-"+i+"-extras")),!1):void 0}}),jq("#send_reply_button").click(function(){var e=jq("#messages_order").val()||"ASC",t=jq("#message-recipients").offset(),i=jq("#send_reply_button");return jq(i).addClass("loading"),jq.post(ajaxurl,{action:"messages_send_reply",cookie:bp_get_cookies(),_wpnonce:jq("#send_message_nonce").val(),content:jq("#message_content").val(),send_to:jq("#send_to").val(),subject:jq("#subject").val(),thread_id:jq("#thread_id").val()},function(a){a[0]+a[1]==="-1"?jq("#send-reply").prepend(a.substr(2,a.length)):(jq("#send-reply #message").remove(),jq("#message_content").val(""),"ASC"===e?jq("#send-reply").before(a):(jq("#message-recipients").after(a),jq(window).scrollTop(t.top)),jq(".new-message").hide().slideDown(200,function(){jq(".new-message").removeClass("new-message")})),jq(i).removeClass("loading")}),!1}),jq("body.messages #item-body div.messages").on("change","#message-type-select",function(){var e=this.value,t=jq('td input[type="checkbox"]'),i="checked";switch(t.each(function(e){t[e].checked=""}),e){case"unread":t=jq('tr.unread td input[type="checkbox"]');break;case"read":t=jq('tr.read td input[type="checkbox"]');break;case"":i="";break}t.each(function(e){t[e].checked=i})}),jq("#select-all-messages").click(function(e){this.checked?jq(".message-check").each(function(){this.checked=!0}):jq(".message-check").each(function(){this.checked=!1})}),jq("#messages-bulk-manage").attr("disabled","disabled"),jq("#messages-select").on("change",function(){jq("#messages-bulk-manage").attr("disabled",jq(this).val().length<=0)}),starAction=function(){var e=jq(this);return jq.post(ajaxurl,{action:"messages_star",message_id:e.data("message-id"),star_status:e.data("star-status"),nonce:e.data("star-nonce"),bulk:e.data("star-bulk")},function(t){1===parseInt(t,10)&&("unstar"===e.data("star-status")?(e.data("star-status","star"),e.removeClass("message-action-unstar").addClass("message-action-star"),e.find(".bp-screen-reader-text").text(BP_PM_Star.strings.text_star),1===BP_PM_Star.is_single_thread?e.attr("data-bp-tooltip",BP_PM_Star.strings.title_star):e.attr("data-bp-tooltip",BP_PM_Star.strings.title_star_thread)):(e.data("star-status","unstar"),e.removeClass("message-action-star").addClass("message-action-unstar"),e.find(".bp-screen-reader-text").text(BP_PM_Star.strings.text_unstar),1===BP_PM_Star.is_single_thread?e.attr("data-bp-tooltip",BP_PM_Star.strings.title_unstar):e.attr("data-bp-tooltip",BP_PM_Star.strings.title_unstar_thread)))}),!1},jq("#message-threads").on("click","td.thread-star a",starAction),jq("#message-thread").on("click",".message-star-actions a",starAction),jq("#message-threads td.bulk-select-check :checkbox").on("change",function(){var e=jq(this),t=e.closest("tr").find(".thread-star a");e.prop("checked")?"unstar"===t.data("star-status")?BP_PM_Star.star_counter++:BP_PM_Star.unstar_counter++:"unstar"===t.data("star-status")?BP_PM_Star.star_counter--:BP_PM_Star.unstar_counter--,BP_PM_Star.star_counter>0&&0===parseInt(BP_PM_Star.unstar_counter,10)?jq('option[value="star"]').hide():jq('option[value="star"]').show(),BP_PM_Star.unstar_counter>0&&0===parseInt(BP_PM_Star.star_counter,10)?jq('option[value="unstar"]').hide():jq('option[value="unstar"]').show()}),jq("#select-all-notifications").click(function(e){this.checked?jq(".notification-check").each(function(){this.checked=!0}):jq(".notification-check").each(function(){this.checked=!1})}),jq("#notification-bulk-manage").attr("disabled","disabled"),jq("#notification-select").on("change",function(){jq("#notification-bulk-manage").attr("disabled",jq(this).val().length<=0)}),jq("#close-notice").on("click",function(){return jq(this).addClass("loading"),jq("#sidebar div.error").remove(),jq.post(ajaxurl,{action:"messages_close_notice",notice_id:jq(".notice").attr("rel").substr(2,jq(".notice").attr("rel").length),nonce:jq("#close-notice-nonce").val()},function(e){jq("#close-notice").removeClass("loading"),e[0]+e[1]==="-1"?(jq(".notice").prepend(e.substr(2,e.length)),jq("#sidebar div.error").hide().fadeIn(200)):jq(".notice").slideUp(100)}),!1}),jq("#wp-admin-bar ul.main-nav li, #nav li").mouseover(function(){jq(this).addClass("sfhover")}),jq("#wp-admin-bar ul.main-nav li, #nav li").mouseout(function(){jq(this).removeClass("sfhover")}),
jq("#wp-admin-bar-logout, a.logout").on("click",function(){jq.removeCookie("bp-activity-scope",{path:"/",secure:"https:"===window.location.protocol}),jq.removeCookie("bp-activity-filter",{path:"/",secure:"https:"===window.location.protocol}),jq.removeCookie("bp-activity-oldestpage",{path:"/",secure:"https:"===window.location.protocol});var e=["members","groups","blogs","forums"];jq(e).each(function(t){jq.removeCookie("bp-"+e[t]+"-scope",{path:"/",secure:"https:"===window.location.protocol}),jq.removeCookie("bp-"+e[t]+"-filter",{path:"/",secure:"https:"===window.location.protocol}),jq.removeCookie("bp-"+e[t]+"-extras",{path:"/",secure:"https:"===window.location.protocol})})}),jq("body").hasClass("no-js")&&jq("body").attr("class",jq("body").attr("class").replace(/no-js/,"js")),"undefined"!=typeof wp&&void 0!==wp.heartbeat&&void 0!==BP_DTheme.pulse&&(wp.heartbeat.interval(Number(BP_DTheme.pulse)),jq.fn.extend({"heartbeat-send":function(){return this.bind("heartbeat-send.buddypress")}}));var s=0;jq(document).on("heartbeat-send.buddypress",function(e,t){s=0,jq("#buddypress ul.activity-list li").first().prop("id")&&(timestamp=jq("#buddypress ul.activity-list li").first().prop("class").match(/date-recorded-([0-9]+)/),timestamp&&(s=timestamp[1])),(0===activity_last_recorded||Number(s)>activity_last_recorded)&&(activity_last_recorded=Number(s)),t.bp_activity_last_recorded=activity_last_recorded,last_recorded_search=bp_get_querystring("s"),last_recorded_search&&(t.bp_activity_last_recorded_search_terms=last_recorded_search)}),jq(document).on("heartbeat-tick",function(e,t){t.bp_activity_newest_activities&&(newest_activities=t.bp_activity_newest_activities.activities+newest_activities,activity_last_recorded=Number(t.bp_activity_newest_activities.last_recorded),jq("#buddypress ul.activity-list li").first().hasClass("load-newest")||jq("#buddypress ul.activity-list").prepend('<li class="load-newest"><a href="#newest">'+BP_DTheme.newest+"</a></li>"))})});