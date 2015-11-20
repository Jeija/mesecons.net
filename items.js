var BASEPATH = "minetest-mod-mesecons/"

function popupwindow(name, doc) {
	$("#popup_name").text(name);
	$.get(doc + "/description.html", function (res) {
		$("#popup_description").html(res);
	});
	$("#popup_preview").attr("src", doc + "/preview.png");
	$("#popup_recipe").attr("src", doc + "/recipe.png");
	$.get(doc + "/recipe.png", function () {
		$("#popup_recipe").show();
		$("#popup_norecipe").hide();
	}).fail(function () {
		$("#popup_norecipe").show();
		$("#popup_recipe").hide();
	});
	$("#item_popup").show();
}

function renderdoc(container, structure, depth) {
	Object.keys(structure).forEach(function (name) {
		if (typeof(structure[name]) == "object") {
			var section = $("<div>").addClass("subsection-" + depth).appendTo(container);
			section.append($("<div>").addClass("subheading-" + depth).text(name))
			renderdoc(section, structure[name], depth + 1);
		} else {
			var item = $("<div>").addClass("item").appendTo(container);
			item.append($("<div>").addClass("item-name").text(name));
			item.append($("<img>").attr("src", BASEPATH + structure[name] + "/preview.png"));
			$(item).click(function () {
				popupwindow(name, BASEPATH + structure[name]);
			});
		}
	});

	$("#item_popup").click(function () {
		$("#item_popup").hide();
	});
}

$(function () {
	$.get(BASEPATH + "documentation.json", function (res) {
		renderdoc($("#documentation"), res, 0);
	});
});
