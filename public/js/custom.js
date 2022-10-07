// $(document).on('click', '.change-locale', function() {
//     const $redirectLocale = $("meta[name='redirectLocale']").attr('content');
//     const $link = $("meta[name='currentLink']").attr('content');
//     const $locale = $(this).data('locale');
//     const $token = $(this).siblings('#hidden-token').val();

//     $.ajax({
//         type: "post",
//         url: $redirectLocale,
//         data: {
//             'locale': $locale,
//             'link': $link,
//             '_token': $token
//         },
//         dataType: "json",
//         success: function (response) {
//             window.location.href($link)
//         }
//     });
// })