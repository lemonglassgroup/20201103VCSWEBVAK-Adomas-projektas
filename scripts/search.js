$(document).ready(function () {
    $('.nav_sbar input[type="search"]').on("keyup input", function () {
        /* Priimame input */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if (inputVal.length) {
            $.get("src/backend-search.php", { term: inputVal }).done(function (data) {
                resultDropdown.html(data);
            });
        } else {
            resultDropdown.empty();
        }
    });

    $(document).on("click", ".result", function () {
        $(this).parents(".nav_sbar").find('input[type="search"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});