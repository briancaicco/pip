jQuery(document).ready(function($){function s(){t.classList.add("menu--animatable"),t.classList.contains("menu--visible")?t.classList.remove("menu--visible"):t.classList.add("menu--visible")}function e(){t.classList.remove("menu--animatable")}$(".glossary-index li a.glossary-menu").on("click",function(){var s=$(this).data("name");"all"===s?$(".glossary-items").show():($(".glossary-items").hide(),$("#glossary-"+s).show())}),$("#glossary-search").keyup(function(){var s=$(this).val().toLowerCase();$(".glossary-list .glossary-items").hide(),$(".glossary-list .glossary-item").hide();var e=!1;$(".glossary-list").find("div.glossary-item .term").each(function(){-1!==$(this).text().toLowerCase().indexOf(s)&&(e=!0,$(this).parent(".glossary-item").show(),$(this).parents(".glossary-items").show())}),!1===e?$(".glossary-alert").show():$(".glossary-alert").hide()}),$("#menu-toggle").click(function(){$("#wrapper").toggleClass("toggled")});var t=document.querySelector(".menu"),a=document.querySelector(".menu-icon");t.addEventListener("transitionend",e,!1),a.addEventListener("click",s,!1),t.addEventListener("click",s,!1)});