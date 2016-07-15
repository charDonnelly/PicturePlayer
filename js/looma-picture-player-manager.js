/*
 LOOMA javascript code file #2
 Filename: looma-picture-player-manager.js
 Description: Allows the reordering of images.

 Programmer name: Thomas Woodside, Charlie Donnelly, and Sam Rosenberg
 Email: thomas.woodside@gmail.com, charlie.donnelly@menloschool.org, sam.rosenberg@menloschool.org
 Owner: VillageTech Solutions (villagetechsolutions.org)
 Date: 6/22/16
 Revision: 0.1
 */

$(function(){
    var group = $("#img-thumbs").sortable({
        onDragStart: function ($item, container, _super, event) {
            $item.css({
                position: "absolute"
               // position: "inherit"
            });
            $item.css({
                height: "auto",
                width: "66vw"
            });
            $item.addClass(container.group.options.draggedClass);
            $("body").addClass(container.group.options.bodyClass)
        },
         placeholder: "<li class='placeholder img-thumbnail' style='height: 15vh'></li>",
        // placeholder: "<li class='placeholder img-thumbnail img' style='height: 15vh'></li>",
    });
    $("#submit").click(function() {
        var data = group.sortable("serialize").get();

        var jsonString = JSON.stringify(data, null, ' ');
    })
});