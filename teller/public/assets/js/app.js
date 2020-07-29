$(document).ready(function() {
    /* UYARI MESAJLARI 
    swal("HATA","Bir Hata Oluştu, Tekrar Deneyiniz.","error");
    swal("TEBRİKLER","Başarılı bir şekilde kayıt oldunuz..","success");
    */
    // ie
    if (!!navigator.userAgent.match(/MSIE/i) || !!navigator.userAgent.match(/Trident.*rv:11\./)) {
        $('body').addClass('ie');
    }

    // iOs, Android, Blackberry, Opera Mini, and Windows mobile devices
    var ua = window['navigator']['userAgent'] || window['navigator']['vendor'] || window['opera'];
    if ((/iPhone|iPod|iPad|Silk|Android|BlackBerry|Opera Mini|IEMobile/).test(ua)) {
        $('body').addClass('touch');
    }

    // fix z-index on ios safari
    if ((/iPhone|iPod|iPad/).test(ua)) {
        $(document, '.modal, .aside').on('shown.bs.modal', function(e) {
            var backDrop = $('.modal-backdrop');
            $(e.target).after($(backDrop));
        });
    }
    //resize
    var $w = $(window).width(),
        $lg = 1200,
        $md = 991,
        $sm = 768;
    $(window).on('resize', function() {
        var $w = $(window).width(),
            $lg = 1200,
            $md = 991,
            $sm = 768;
        if ($w > $lg) {
            $('.aside-lg').modal('hide');
        }
        if ($w > $md) {
            $('#aside').modal('hide');
            $('.aside-md, .aside-sm').modal('hide');
        }
        if ($w > $sm) {
            $('.aside-sm').modal('hide');
        }
    });
    $(document).on('click', '[data-nav] a', function(e) {
        var $this = $(this),
            $active, $li, $li_li;

        $li = $this.parent();
        $li_li = $li.parents('li');

        $active = $li.closest("[data-nav]").find('.active');

        $li_li.addClass('active');
        ($this.next().is('ul') && $li.toggleClass('active') && e.preventDefault()) || $li.addClass('active');

        $active.not($li_li).not($li).removeClass('active');

        if ($this.attr('href') && $this.attr('href') != '#') {
            $(document).trigger('Nav:changed');
        }
    });

    $(".media-select").on("click", function(event) {
        var id = $(this).attr('id');
        $('#file-' + id).click();
    });
    $(".media-input").on("change", function(event) {
        var id = $(this).attr('data-preview');
        if (this.files && this.files[0]) {

            var reader = new FileReader();
            reader.onload = function(e) {
                $('.' + id).css('background-image', 'url(' + e.target.result + ')');
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
    $(".filter .dropdown").on("hidden.bs.dropdown", function(event) {
        alert('form gonder');
    });
    $('.filter .dropdown-menu input').change(function() {
        var sList = '';
        $(this).parent().parent().parent().find('.dropdown-menu input:checked').each(function(index) {

            var id = $(this).attr('id');
            sList += $('label[for="' + id + '"]').text() + ', ';

        });
        var sList = sList.slice(0, -2);
        if (!sList) {
            var sList = $(this).parent().parent().parent().find('.dropdown-menu').attr('data-text');
        }
        $(this).parent().parent().parent().parent().find('.dropdown-toggle .select-text').html(sList);
    });
    $('.filter .dropdown-menu input').trigger('change');
    $(document).on('click', '.custom-control-dropdown', function(e) {
        e.stopPropagation();
    });
    window.totalcard = 10;
    window.leftcard = 10;
    window.selectedcard = 0;
    window.cards = [];
    $(".expansion").click(function() {


        totalcard = $(this).attr("total-card");
        leftcard = totalcard;
        selectedcard = 0;
        cards = [];

        $(".card-select").each(function() {
            $(this).find('input[type="checkbox"]').prop('checked', false);
            $(this).removeClass('active');
        });
        $(".total-card").text(totalcard);
        // $(".select-cards").fadeIn();
    });

    var Yorumlar = new Swiper('.yorumlar .swiper-container', {
      pagination: {
        el: '.yorumlar .swiper-pagination',
        clickable: true,
      },
    });
    var FalTurleri = new Swiper('.fal-turleri .swiper-container', {
        slidesPerView: 5,
        spaceBetween: 30,
        pagination: {
            el: '.fal-turleri .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            1024: {
                slidesPerView: 5,
                spaceBetween: 40,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
            }
        }
    });

$('.timepic').clockpicker();
    $('.datepic').datepicker({
        language: "tr"
    });
    $('[name="yorum-turu"]').change(function() {
        if($(this).val() === 'telefon') {
            $('.phone-form').removeClass('d-none');
        }else{
            $('.phone-form').addClass('d-none');
        }
    });
    $(".card-select").change(function() {
        console.log(totalcard + " - " + leftcard + " - " + selectedcard + " - " + cards);
        if (totalcard != -1) {
            if (!$(this).find('input[type="checkbox"]').is(':checked')) {
                $(this).find('input[type="checkbox"]').prop('checked', false);
                selectedcard--;
                leftcard++;
                $(this).addClass('active');
                cards.removeByValue($(this).find('input[type="checkbox"]').val());

            } else {

                if (leftcard <= 0) {
                    $(this).find('input[type="checkbox"]').prop('checked', false);
                    return;
                }
                $(this).find('input[type="checkbox"]').prop('checked');
                $(this).addClass('active');
                selectedcard++;
                leftcard--;
                if (cards.indexOf($(this).find('input[type="checkbox"]').val()) == -1) {
                    cards.push($(this).find('input[type="checkbox"]').val());
                }
            }
            $(".total-card").text(leftcard);

            window.cardstring = '';
            for (i = 0; i < cards.length; i++)
                cardstring += cards[i] + (i != cards.length - 1 ? ',' : '');

            $("[name='card-selects']").val(cardstring);
        }
        console.log(cardstring);
    });
});