<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>eMagicOne Lunch</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no;" />


    <!--	<link rel="stylesheet"  href="jqmob/jquery.mobile-1.4.5.min.css">-->
    <!--	<link rel="stylesheet"  href="jqmob/jquery.mobile.external-png-1.4.5.min.css">-->
    <link rel="stylesheet"  href="jqmob/theme-classic.css">
    <link rel="stylesheet"  href="jqmob/jquery.mobile.icons-1.4.5.min.css">
    <!--	<link rel="stylesheet"  href="jqmob/jquery.mobile.inline-png-1.4.5.min.css">-->
    <link rel="stylesheet"  href="jqmob/jquery.mobile.structure-1.4.5.min.css">
    <!--	<link rel="stylesheet"  href="jqmob/jquery.mobile.theme-1.4.5.min.css">-->

    <script src="jqmob/jquery.js"></script>
    <script src="jqmob/jquery.mobile-1.4.5.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="jqmob/lunch.css">

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        var dishCounter = 0;
        var delElementName = 'del-element';
    </script>

</head>
<body>
<div data-role="page" class="ui-page ui-page-footer-fixed ui-page-active ui-page-theme-c">
    <div data-role="header" style="padding-left: 20px; padding-right: 20px;z-index: 1;">
        <select name="select-custom-1" id="select-custom-1" data-native-menu="false">
            <option value="1">The 1st Option</option>
            <option value="2">The 2nd Option</option>
            <option value="3">The 3rd Option</option>
            <option value="4">The 4th Option</option>
        </select>

        <p>Date: <input type="text" id="datepicker" class="ui-btn"></p>

        <a href="/admin.php" class="ui-btn ui-btn-right ui-icon-delete ui-btn-icon-left">Icon only</a>
    </div>

    <div data-role="content" class="ui-body" id="content" style="z-index: 1;" align="center">
<!--        <ul data-role="listview" data-inset="true" id="listview">-->
<!--        </ul>-->
<!--        <ul data-role="listview" data-inset="true" id="listview">-->
<!--            <li data-icon="minus">-->
<!--                <a href="#">-->
<!--                 <input type="text" class="ui-btn-left" name="text-1" >-->
<!--                 <input type="text" class="ui-btn-left" name="text-2" >-->
<!--                </a>-->
<!--                <a href="#">data-icon="minus"</a>-->
<!--            </li>-->
<!--        </ul>-->
        <form method="post" id="menu_form" action="processor.php">
            <div id="main-container">
                <input type="hidden" name="call_function" value="set_menu">
                <fieldset class="ui-grid-a">
                    <div class="ui-hide-label ui-block-a" style="margin-right: 10px;">
                        <label for="dish-1">Surname</label>
                        <input type="text" name="dish-1" id="dish-1" placeholder="Dish...">
                    </div>
                    <div class="ui-hide-label ui-block-b">
                        <label for="price-1">Surname</label>
                        <input type="text" name="price-1" id="price-1" placeholder="Price...">
                    </div>
                    <div class="ui-hide-label ui-block-c">
                        <a href="#" id="del-element-1" class="ui-btn ui-icon-delete ui-btn-icon-notext ui-corner-all del-element">No text</a>
                    </div>
                </fieldset>
            </div>
<!--            <input type="submit" data-inline="true" value="Submit">-->
        </form>


    </div>


    <div data-role="navbar">
        <ul>
            <li><a href="#" data-icon="plus" id="add-element">Add</a></li>
            <li><a href="#" data-icon="check" id="save-menu">Save</a></li>
        </ul>
    </div>
    <div data-role="footer" data-position="fixed">
        <h4>&copy; 2016 - eMagicOne</h4>
    </div>
</div><!-- /page -->
</body>
<script>
    var dishCounter = 1;

    $( document ).ready(function() {
        $("#datepicker").datepicker();

        $("#add-element").click(function () {

            dishCounter = dishCounter + 1;

            var html =
//        '<li data-icon="minus" class="ui-li-has-alt ui-first-child ui-last-child>">' +
//                    '<a href="#" class="ui-btn">' +
//                        '<div class="ui-input-text ui-body-inherit ui-corner-all ui-mini ui-shadow-inset">' +
//                            '<input type="text" data-mini="true" name="text-dish-' + dishCounter +'" id="text-dish-' + dishCounter + '">' +
//                        '</div>' +
//                        '<div class="ui-input-text ui-body-inherit ui-corner-all ui-mini ui-shadow-inset">' +
//                        '<input type="text" name="text-1" data-mini="true"  id="text-1" value="' + dishCounter + '">' +
//                        '</div>' +
//                    '</a>' +
//        '           <a href="#" class="ui-li-has-alt ui-first-child ui-last-child>">data-icon="minus"</a>' +
//                '</li>'
                '<fieldset class="ui-grid-a">' +
                '<div class="ui-hide-label ui-block-a" style="margin-right: 10px;>' +
                '<label for="dish-' + dishCounter + '"></label>' +
                '<div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"">' +
                '<input type="text" name="dish-' + dishCounter + '" id="dish-' + dishCounter + '" placeholder="Dish...">' +
                '</div>' +
                '</div>' +
                '<div class="ui-hide-label ui-block-b">' +
                '<label for="price-' + dishCounter + '"></label>'+
                '<div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">' +
                '<input type="text" name="price-' + dishCounter + '" id="price-' + dishCounter + '" placeholder="Price...">' +
                '</div>' +
                '</div>' +
                '<div class="ui-hide-label ui-block-c">' +
                '<a href="#" id="del-element-' + dishCounter + '" class="ui-btn ui-icon-delete ui-btn-icon-notext ui-corner-all del-element">No text</a>' +
                '</div>' +
                '</fieldset>';

//            delElementName = "del-element-"+dishCounter;
//            html.appendTo( "#main-container" ).trigger( "create" );
            $("#main-container").html($("#main-container").html() + html).trigger("create");
//            document.getElementById('#del-element'+dishCounter).onclick = onDelElementClick(this);
//            delElements = document.getElementsByClassName(delElementName);
            $(".del-element").each(function() {
                this.addEventListener('click', onDelElementClick , this);
            });

//        $( "#dishes").append('<input type="checkbox" name="checkbox-v-2a" id="checkbox-v-2a"><label for="checkbox-v-2a">+</label>');
//        $( '<input type="checkbox" name="checkbox-v-2a" id="checkbox-v-2a"><label for="checkbox-v-2a">+</label>' ).insertAfter( "#dishes");
        });

        $(".del-element").click(function () {
            console.log(this);
            this.parentElement.parentElement.remove();
        });

        function onDelElementClick(element) {
            element.currentTarget.parentElement.parentElement.remove();
        }

        $("#save-menu").click(function(){
            $.ajax({url: "process.php",
                type: "POST",
                async: false,
                data: $("#menu_form").serialize(),
                success: function(result, textStatus, jqXHR){
                    $("div").html(result);
                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });

            e.preventDefault();
        });

    });
</script>
</html>

